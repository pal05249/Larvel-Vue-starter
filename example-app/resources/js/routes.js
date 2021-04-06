import VueRouter from 'vue-router';
import Index from './components/Index'
import dashboard from './components/ExampleComponent'
const routes=[
 
    { path:"/dashboard",component: dashboard,name:"dashboard"},
    
]

const router = new VueRouter({
    routes,
    mode:"history",
});

export default router;