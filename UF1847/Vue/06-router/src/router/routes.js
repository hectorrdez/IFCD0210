
import { createRouter, createWebHashHistory } from 'vue-router';

const routes = [
    { path: '/acerca', component: () => import(/*webpackChunkName: "acercade"*/ '@/modules/articulos/pages/AcercaDePage.vue') },
    {
        path: '/:articulo', name: 'routerArticulo', component: () => import(/*webpackChunkName: "articulo"*/ '@/modules/articulos/pages/ArticuloPage'), props:
            (route) => {
                const id = route.params.articulo
                return isNaN(id) ? { id: 1 } : { id }

            }
    },
    { path: '/', component: () => import('@/modules/articulos/pages/ListaPage.vue') },
    { path: '/:PathMatch(.*)*', name: 'Not Found', component: () => import(/*webpackChunkName: "notfound"*/ '@/modules/shared/NotFoundPage.vue') },
];
const router = createRouter({
    history: createWebHashHistory(),
    routes,
})
export default router