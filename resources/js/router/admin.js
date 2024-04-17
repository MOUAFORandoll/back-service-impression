import Dashboard from '../containers/Dashboard';

// Dashboard components
import Home from '../views/admin/Home';
import UserList from '../views/admin/users/UserList';
import AddUser from '../views/admin/users/AddUser';
import EditUser from '../views/admin/users/EditUser';
import ContractList from '../views/admin/contracts/ContractList';
import AddContract from '../views/admin/contracts/AddContract';
import EditContract from '../views/admin/contracts/EditContract';
import PartnerList from '../views/admin/partners/PartnerList';
import AddPartner from '../views/admin/partners/AddPartner';
import EditPartner from '../views/admin/partners/EditPartner';
import AppointmentList from "../views/admin/appointments/AppointmentList";
import AddAppointment from "../views/admin/appointments/AddAppointment";
import EditAppointment from "../views/admin/appointments/EditAppointment";
//import Profile from '../views/dashboard/Profile';

export default {
    path: '/admin',
    component: Dashboard,
    children: [
        {
            path: '',
            name: 'admin',
            component: Home,
            meta: {
                requiresAuth: false
            }
        },
        {
            path: 'users',
            name: 'users',
            component: UserList,
            meta: {
                requiresAuth: false
            }
        },
        {
            path: 'users/add',
            name: 'add-user',
            component: AddUser,
            meta: {
                requiresAuth: false
            }
        },
        {
            path: 'users/:user/edit',
            name: 'edit-user',
            component: EditUser,
            meta: {
                requiresAuth: false
            }
        },
        {
            path: 'contracts',
            name: 'contracts',
            component: ContractList,
            meta: {
                requiresAuth: false
            }
        },
        {
            path: 'contracts/add',
            name: 'add-contract',
            component: AddContract,
            meta: {
                requiresAuth: false
            }
        },
        {
            path: 'contracts/:contract/edit',
            name: 'edit-contract',
            component: EditContract,
            meta: {
                requiresAuth: false
            }
        },
        {
            path: 'partners',
            name: 'partners',
            component: PartnerList,
            meta: {
                requiresAuth: false
            }
        },
        {
            path: 'partners/add',
            name: 'add-partner',
            component: AddPartner,
            meta: {
                requiresAuth: false
            }
        },
        {
            path: 'partners/:partner/edit',
            name: 'edit-partner',
            component: EditPartner,
            meta: {
                requiresAuth: false
            }
        },
        {
            path: 'appointments',
            name: 'appointments',
            component: AppointmentList,
            meta: {
                requiresAuth: false
            }
        },
        {
            path: 'appointments/add',
            name: 'add-appointment',
            component: AddAppointment,
            meta: {
                requiresAuth: false
            }
        },
        {
            path: 'appointments/:appointment/edit',
            name: 'edit-appointment',
            component: EditAppointment,
            meta: {
                requiresAuth: false
            }
        },

        {
            path: 'profile',
            name: 'profile',
            component: Home,
            meta: {
                requiresAuth: false
            }
        }
    ]
}
