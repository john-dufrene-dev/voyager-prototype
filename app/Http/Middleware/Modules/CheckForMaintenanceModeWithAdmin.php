<?php

namespace App\Http\Middleware\Modules;

use Closure;
use Nwidart\Modules\Facades\Module;
use Symfony\Component\HttpFoundation\IpUtils;
use Modules\MaintenanceMode\Entities\MaintenanceIp;
use Modules\VoyagerBaseExtend\Traits\CorsSettingTable;
use Illuminate\Foundation\Http\Exceptions\MaintenanceModeException;
use Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode as Middleware;

class CheckForMaintenanceModeWithAdmin extends Middleware
{
    use CorsSettingTable;

    protected $maintenance_name = 'MAINTENANCE_MODE';

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
        // '::1',
        // '127.0.0.1',
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
        if(Module::find('MaintenanceMode')->isDisabled())
            return $next($request);

        if(true != $this->checkCors($this->maintenance_name))
            $this->setCors($this->maintenance_name,0);

        if (1 == $this->getCorsValue($this->maintenance_name)) {
            $data = [];

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

            throw new MaintenanceModeException(time(), null, null);
        }

        return $next($request);
    }
}
