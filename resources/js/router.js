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

            authenticatedRoute('/hypervisors', './routes/Hypervisors'),

            unauthenticatedRoute('*', './routes/UnknownRoute'),
        ],
    }),
]
