import getRoute from 'ziggy'
import { Ziggy }  from '../../routes';

/**
 * Customize Ziggy's route helper to be more convenient for our use case.
 *
 * @param {String} name Route name.
 * @param {Object} params Route params.
 * @return {String} URL for the route.
 */

window.routing = (name, params) => getRoute(name, params, false, Ziggy).url();