const route = (path, pathToComponent, extraOptions = {}) => {
    const routeComponent = require(pathToComponent+ "").default;

    return Object.assign({
        path,
        component: routeComponent,
        props: true,
    }, Object.assign(extraOptions, {
        meta: Object.assign({
            name: routeComponent.name
        }, (extraOptions.meta || {}))
    }))
}

const unauthenticatedRoute = (path, pathToComponent, extraOptions = {}) => route(path, pathToComponent, Object.assign({
    meta: {
        forceAuth: false,
    }
}, extraOptions));

const authenticatedRoute = (path, pathToComponent, extraOptions = {}) => {

    return route(path, pathToComponent, Object.assign({
        meta: {
            forceAuth: true,
        }
    }, extraOptions))
};

export default [
    route('/', './routes/Base', {
        props: true,
        children: [
            unauthenticatedRoute('/login', './routes/Auth/Login'),
            authenticatedRoute('/logout', './routes/Auth/Logout'),
            unauthenticatedRoute('/register', './routes/Auth/Register'),

            authenticatedRoute('/hypervisors', './routes/App/Hypervisors'),
            authenticatedRoute('/servers', './routes/App/Servers/Index', {
                props: true,
                children: [
                    authenticatedRoute('/servers', './routes/App/Servers/Servers'),
                    authenticatedRoute('/servers/link', './routes/App/Servers/Link', {
                        props: true,
                    }),
                    authenticatedRoute('/servers/:id', './routes/App/Servers/Server'),
                ]
            }),
            authenticatedRoute('/settings', './routes/App/Settings/Index', {
                props: true,
                children: [
                    authenticatedRoute('/', './routes/App/Settings/Authorization'),
                    authenticatedRoute('/settings/password', './routes/App/Settings/ResetPassword'),
                ]
            }),

            unauthenticatedRoute('*', './routes/UnknownRoute'),
        ],
    }),
]
