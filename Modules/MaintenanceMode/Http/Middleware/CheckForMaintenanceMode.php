<?php

namespace Modules\MaintenanceMode\Http\Middleware;

use Closure;
use Nwidart\Modules\Facades\Module;
use Symfony\Component\HttpFoundation\IpUtils;
use Modules\MaintenanceMode\Entities\MaintenanceIp;
use Illuminate\Foundation\Http\Exceptions\MaintenanceModeException;
use Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode as Middleware;

class CheckForMaintenanceMode extends Middleware
{
    /**
     * The URIs that should be reachable while maintenance mode is enabled.
     *
     * @var array
     */
    protected $except = [
        '/admin',
        '/admin/*',
    ];

    /**
     * The IPs that should be reachable while maintenance mode is enabled.
     *
     * @var array
     */
    protected $allowed = [
        '::1',
        '127.0.0.1',
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     *
     * @throws \Symfony\Component\HttpKernel\Exception\HttpException
     */
    public function handle($request, Closure $next)
    {
        if ($this->app->isDownForMaintenance()) {
            $data = json_decode(file_get_contents($this->app->storagePath().'/framework/down'), true);

            foreach(MaintenanceIp::All() as $ip) {
                if((bool)$ip->active === true)
                    array_push($this->allowed,$ip->ip_maintenance);
            }

            if (isset($this->allowed) && IpUtils::checkIp($request->ip(), (array) $this->allowed)) {
                return $next($request);
            }

            if ($this->inExceptArray($request)) {
                return $next($request);
            }

            throw new MaintenanceModeException($data['time'], $data['retry'], $data['message']);
        }

        return $next($request);
    }
}
