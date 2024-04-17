import Auth from '../containers/Auth'

// Auth components
import Login from '../views/auth/Login';
import Register from '../views/auth/Register';

export default {
    path: '/auth',
    name: 'auth',
    component: Auth,
    redirect: '/login',
    children: [
        {
            path: '/login',
            name: 'login',
            component: Login,
            meta: {
                guest: true
            }
        },
        {
            path: '/register',
            name: 'register',
            component: Register,
            meta: {
                guest: true
            }
        }
    ]
}