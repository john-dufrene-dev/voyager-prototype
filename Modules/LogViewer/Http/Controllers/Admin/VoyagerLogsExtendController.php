<?php

namespace Modules\LogViewer\Http\Controllers\Admin;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\App;
use Nwidart\Modules\Facades\Module;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Process\Process;
use Modules\LogViewer\Entities\LogViewer;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use TCG\Voyager\Http\Controllers\VoyagerCompassController as BaseVoyagerCompassController;

class VoyagerLogsExtendController extends BaseVoyagerCompassController
{

    public function __construct()
    {
        $this->middleware('admin.user');

        if(Module::find('LogViewer')->disabled())
            abort(403, 'Module not allowed.');
        
        $this->request = app('request');
    }

    public function index(Request $request)
    {
        // Check permission
        if(!Auth::user()->hasPermission('browse_logs')) {
            throw new AccessDeniedHttpException('This action is unauthorized.');
        }

        //Check if app is not local
        if (!\App::environment('local') && !config('voyager.logs_in_production', false)) {
            throw new AccessDeniedHttpException('This action is unauthorized.');
        }

        $message = '';
        $active_tab = 'logs';

        if ($this->request->input('log')) {
            $active_tab = 'logs';
            LogViewer::setFile(base64_decode($this->request->input('log')));
        }

        if ($this->request->input('logs')) {
            $active_tab = 'logs';
        }

        if ($this->request->input('download')) {
            $active_tab = 'logs';

            return $this->download(LogViewer::pathToLogFile(base64_decode($this->request->input('download'))));
        } elseif ($this->request->has('del')) {
            $active_tab = 'logs';
            app('files')->delete(LogViewer::pathToLogFile(base64_decode($this->request->input('del'))));

            return $this->redirect($this->request->url().'?logs=true')->with([
                'message'    => __('voyager::compass.commands.delete_success').' '.base64_decode($this->request->input('del')),
                'alert-type' => 'success',
                ]);
        } elseif ($this->request->has('delall')) {
            $active_tab = 'logs';
            foreach (LogViewer::getFiles(true) as $file) {
                app('files')->delete(LogViewer::pathToLogFile($file));
            }

            return $this->redirect($this->request->url().'?logs=true')->with([
                'message'    => __('voyager::compass.commands.delete_all_success'),
                'alert-type' => 'success',
                ]);
        }

        
        $logs = LogViewer::all();
        $files = LogViewer::getFiles(true);
        $current_file = LogViewer::getFileName();

        return view('logviewer::admin.logs.index', compact('logs', 'files', 'current_file', 'active_tab'))->with($message);
    }

    private function redirect($to)
    {
        if (function_exists('redirect')) {
            return redirect($to);
        }

        return app('redirect')->to($to);
    }

    private function download($data)
    {
        if (function_exists('response')) {
            return response()->download($data);
        }

        // For laravel 4.2
        return app('\Illuminate\Support\Facades\Response')->download($data);
    }
}