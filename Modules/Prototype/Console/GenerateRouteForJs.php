<?php

namespace Modules\Prototype\Console;

use File;
use Illuminate\Support\Arr;
use Illuminate\Routing\Router;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class GenerateRouteForJs extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'route:generate:js';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate routes for javascript.';

    /**
     * The attributes that should not be trimmed.
     *
     * @var array
     */
    protected $valid = [
        'home.index',
        'pages.account',
        'register',
        'logout',
        'login',
        'login.post',
        'articles.index',
        'articles.category',
        'articles.show',
        'password.request',
    ];

    protected $router;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Router $router)
    {
        parent::__construct();
        $this->router = $router;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $routes = [];

        $api                = app('Dingo\Api\Routing\Router');
        $apiRoutes          = $api->getRoutes();
        $apiNameKeyedRoutes = collect([]);

        foreach ($this->router->getRoutes() as $route) {
            if(in_array($route->getName(), $this->valid)) {
                $routes[$route->getName()] = $route->uri();
            }            
        }

        foreach ($apiRoutes as $version => $routesCollection) {
            $versionRoutes = collect($routesCollection->getRoutes());

            foreach ($versionRoutes as $apiRoute) {
                $name = $apiRoute->getAction()['as'];
                $uri = $apiRoute->getAction()['uri'];
                // TODO : substr just if 1st character is "/"
                $routes[$name] = substr($uri, 1);
            }
        }

        File::put('resources/js/routes/routes.json', json_encode($routes, JSON_PRETTY_PRINT));
    }
}
