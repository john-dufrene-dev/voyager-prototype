<?php

namespace Modules\VoyagerBaseExtend\Http\Controllers\Admin;

use Artisan;
use Exception;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\App;
use Nwidart\Modules\Facades\Module;
use Symfony\Component\Process\Process;
use TCG\Voyager\Http\Controllers\Controller;
use Modules\Prototype\Traits\ExecuteCommandArtisan;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class VoyagerCompassExtendController extends Controller
{
    use ExecuteCommandArtisan;
    
    protected $request;
    protected $compass_choice_commands;
    protected $compass_commands;

    public function __construct()
    {
        if(Module::find('VoyagerBaseExtend')->isDisabled())
            abort(403, 'Module VoyagerBaseExtend is not allowed.');

        $this->compass_choice_commands = config('voyager.compass_choice_commands');
        $this->compass_commands = config('voyager.compass_commands');
    }

    public function index(Request $request)
    {
        // Check permission
        $this->authorize('browse_compass');
        //Check if app is not local
        if (!\App::environment('local') && !config('voyager.compass_in_production', false)) {
            throw new AccessDeniedHttpException();
        }

        $message = '';
        $active_tab = '';

        $artisan_output = '';

        if ($request->isMethod('post')) {
            $command = $request->command;
            $args = $request->args;
            $args = (isset($args)) ? ' '.$args : '';

            try {

                // Symfony 4.3.5 problem with new Process() => using exec() or Artisan

                // $artisan_output = exec('cd ' . base_path() . ' && php artisan ' . $command . $args);
                Artisan::call($command . $args);
                $artisan_output = Artisan::output();

            } catch (Exception $e) {
                $artisan_output = $e->getMessage();
            }
            $active_tab = 'commands';
        }

        $commands = $this->getArtisanCommands();

        return view('voyagerbaseextend::admin.compass.index', compact('active_tab', 'commands', 'artisan_output'))->with($message);
    }
}