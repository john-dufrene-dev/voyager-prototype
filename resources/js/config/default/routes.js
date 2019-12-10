import routing from '../../routes/routes.json';

window.routes = function() {
    var args = Array.prototype.slice.call(arguments);
    var name = args.shift();

    if (routing[name] === undefined) {
        console.error('Unknown route ', name);
    } else {
        return '/' + routing[name]
            .split('/')
            .map(s => s[0] == '{' ? args.shift() : s)
            .join('/');
    }
};
