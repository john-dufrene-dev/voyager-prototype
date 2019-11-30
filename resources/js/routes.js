    var Ziggy = {
        namedRoutes: {"login":{"uri":"login","methods":["GET","HEAD"],"domain":null},"login.post":{"uri":"login","methods":["POST"],"domain":null},"logout":{"uri":"logout","methods":["POST"],"domain":null},"register":{"uri":"register","methods":["GET","HEAD"],"domain":null},"pages.account":{"uri":"account","methods":["GET","HEAD"],"domain":null},"home.index":{"uri":"\/","methods":["GET","HEAD"],"domain":null},"articles.index":{"uri":"articles","methods":["GET","HEAD"],"domain":null},"articles.category":{"uri":"articles\/{category}","methods":["GET","HEAD"],"domain":null},"articles.show":{"uri":"articles\/{category}\/{post}","methods":["GET","HEAD"],"domain":null}},
        baseUrl: 'http://voyager.local/',
        baseProtocol: 'http',
        baseDomain: 'voyager.local',
        basePort: false,
        defaultParameters: []
    };

    if (typeof window.Ziggy !== 'undefined') {
        for (var name in window.Ziggy.namedRoutes) {
            Ziggy.namedRoutes[name] = window.Ziggy.namedRoutes[name];
        }
    }

    export {
        Ziggy
    }
