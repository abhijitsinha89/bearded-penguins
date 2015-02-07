// Collect the routes
app.constant('routes', getRoutes());

// Configure the routes and route resolvers
app.config(['$routeProvider', '$locationProvider', 'routes', routeConfigurator]);
function routeConfigurator($routeProvider,$locationProvider, routes) {

    routes.forEach(function (r) {
        $routeProvider.when(r.url, r.config);
        $locationProvider.html5Mode(true).hashPrefix('!');

    });
    $routeProvider.otherwise({ redirectTo: '/' });

}

// Define the routes
function getRoutes() {
    return [
        {
            url: '/',
            urlPath:'',
            config: {
                title: 'home',
                templateUrl: myLocalized.partials + '/home/home.html'
            }
        },
        {
            url: '/about',
            urlPath:'about',
            config: {
                title: 'about',
                templateUrl: myLocalized.partials + '/about/about.html',
                settings: {
                    nav: 1,
                    content: 'About'
                }
            }
        },
        {
            url: '/contact',
            urlPath:'contact',
            config: {
                templateUrl: myLocalized.partials + '/contactus/contactus.html',
                title: 'contact',
                settings: {
                    nav: 2,
                    content: 'Contact'
                }
            }
        },
        {
            url: '/articles/:article',
            config: {
                templateUrl: myLocalized.partials + '/articles/articles.html',
                title: 'article'
            }
        },
        {
            url: '/authors/:author',
            config: {
                templateUrl: myLocalized.partials + '/authors/authors.html',
                title: 'article'
            }
        },
        {
            url: '/categories/:category',
            config: {
                templateUrl: myLocalized.partials + 'app/categories/categories.html',
                title: 'work'
            }
        }

    ];
}