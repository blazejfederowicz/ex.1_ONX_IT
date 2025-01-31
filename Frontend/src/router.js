import {createRouter, createWebHistory} from 'vue-router'
import DefaultComponent from "./components/DefaultLayout.vue";
import HomePage from "./pages/HomePage.vue";
import UrlsPage from "./pages/UrlsPage.vue";

const routes = [{
    path:'/',
    component: DefaultComponent,
    children:[
        {path:'/', name:'Home', component: HomePage },
        {path:'/shorturl', name: 'Url', component: UrlsPage}
    ]
},
{
    path: "/:pathMatch(.*)*",
    redirect: '/',
}
]

const router = createRouter({
    history: createWebHistory(),
    routes
})



export default router;