import LoginComponent from './components/Login.vue';
import DashboardComponent from './components/Dashboard.vue';
import LogoutComponent from './components/Logout.vue';


export default {

    '/login': {
        name: 'auth.login',
        component: LoginComponent
    },

    '/logout': {
        name: 'auth.logout',
        component: LogoutComponent
    },

    'dashboard': {
        name: 'dashboard',
        component: DashboardComponent
    }

}