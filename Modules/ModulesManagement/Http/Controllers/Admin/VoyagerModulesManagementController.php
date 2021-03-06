<?php

namespace Modules\ModulesManagement\Http\Controllers\Admin;

use Artisan;
use Exception;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use Nwidart\Modules\Facades\Module;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Process\Process;
use TCG\Voyager\Http\Controllers\Controller;
use Modules\Prototype\Traits\ExecuteCommandArtisan;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class VoyagerModulesManagementController extends Controller
{
    use ExecuteCommandArtisan;
    
    protected $request;
    protected $modules_commands = [];

    public function __construct()
    {
        $this->middleware('admin.user');
        
        if(Module::find('ModulesManagement')->isDisabled())
            abort(403, 'Module ModuleManagement is not allowed.');
    }

    public function index(Request $request)
    {
        // Check permission
        if(!Auth::user()->hasPermission('browse_modules')) {
            throw new AccessDeniedHttpException('This action is unauthorized.');
        }

        //Check if app is not local
        if (!\App::environment('local') && !config('voyager.modules_in_production', false)) {
            throw new AccessDeniedHttpException('This action is unauthorized.');
        }

        $artisan_output = '';

        $modules = Module::all();
        $this->module_commands = ['module:enable','module:disable'];

        if ($request->isMethod('post')) {

            $command = $request->command;
            $args = $request->args;
            $args = (isset($args)) ? ' '.$args : '';

            try {

                // Symfony 4.3.5 problem with new Process() => using exec()

                // $artisan_output = exec('cd ' . base_path() . ' && php artisan ' . $command . $args);
                Artisan::call($command . $args);
                $artisan_output = Artisan::output();

            } catch (Exception $e) {
                $artisan_output = $e->getMessage();
            }
            
            return redirect()->route('modules.index')->with('artisan_output', $artisan_output);
        }

        $commands = $this->getArtisanCommandsChoice($this->module_commands);

        return view('modulesmanagement::admin.modules.index', compact(
            'modules',
            'commands',
            'artisan_output'
        ));
    }
}