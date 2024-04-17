import Dashboard from '../containers/Dashboard';

// Dashboard components
import Home from '../views/dashboard/Home';
//import Profile from '../views/dashboard/Profile';

export default {
    path: '/dashboard',
    component: Dashboard,
    children: [
        {
            path: '',
            name: 'dashboard',
            component: Home,
            meta: {
                requiresAuth: true
            }
        },
        /*{
            path: 'profile',
            name: 'profile',
            component: Profile,
            meta: {
                requiresAuth: true
            }
        }*/
    ]
}