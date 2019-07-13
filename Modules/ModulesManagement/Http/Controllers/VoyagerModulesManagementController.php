<?php

namespace Modules\ModulesManagement\Http\Controllers;

use Artisan;
use Exception;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use Nwidart\Modules\Facades\Module;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class VoyagerModulesManagementController extends Controller
{
    protected $request;

    public function __construct()
    {
        $this->request = app('request');
    }

    public function index(Request $request)
    {
        // Check permission
        if(!Auth::user()->hasPermission('browse_modules')) {
            throw new AccessDeniedHttpException();
        }

        //Check if app is not local
        if (!\App::environment('local') && !config('voyager.modules_in_production', false)) {
            throw new AccessDeniedHttpException();
        }

        $message = '';
        $active_tab = 'list';

        $artisan_output = '';

        $modules_enable = Module::allEnabled();
        $modules_disable = Module::allDisabled();
        $modules_status = Module::count();

        if ($request->isMethod('post')) {

            $command = $request->command;
            $args = $request->args;
            $args = (isset($args)) ? ' '.$args : '';

            try {
                $process = new Process('cd '.base_path().' && php artisan '.$command.$args);
                $process->run();

                if (!$process->isSuccessful()) {
                    throw new ProcessFailedException($process);
                }

                $artisan_output = $process->getOutput();

                //$artisan_output = exec('cd ' . base_path() . ' && php artisan ' . $command . $args);
                // Artisan::call($command . $args);
                // $artisan_output = Artisan::output();
            } catch (Exception $e) {
                $artisan_output = $e->getMessage();
            }
            $active_tab = 'commands';
        }

        // get the full list of artisan commands and store the output
        $commands = $this->getArtisanCommands();

        return view('modulesmanagement::admin.modules.index', compact(
            'active_tab', 
            'commands',
            'artisan_output',
            'modules_enable',
            'modules_disable',
            'modules_status'
        ))->with($message);
    }

    private function getArtisanCommands()
    {
        Artisan::call('list');

        // Get the output from the previous command
        $artisan_output = Artisan::output();
        $artisan_output = $this->cleanArtisanOutput($artisan_output);
        $commands = $this->getCommandsFromOutput($artisan_output);

        return $commands;
    }

    private function cleanArtisanOutput($output)
    {

        // Add each new line to an array item and strip out any empty items
        $output = array_filter(explode("\n", $output));

        // Get the current index of: "Available commands:"
        $index = array_search('Available commands:', $output);

        // Remove all commands that precede "Available commands:", and remove that
        // Element itself -1 for offset zero and -1 for the previous index (equals -2)
        $output = array_slice($output, $index - 2, count($output));

        return $output;
    }

    private function getCommandsFromOutput($output)
    {
        $commands = [];

        foreach ($output as $output_line) {
            if (empty(trim(substr($output_line, 0, 2)))) {
                $parts = preg_split('/  +/', trim($output_line));
            
                if(in_array($parts[0], ['module:enable','module:disable'])) {
                    $command = (object) ['name' => trim(@$parts[0]), 'description' => trim(@$parts[1])];
                    array_push($commands, $command);
                }
            }
        }

        return $commands;
    }

    private function redirect($to)
    {
        if (function_exists('redirect')) {
            return redirect($to);
        }

        return app('redirect')->to($to);
    }
}