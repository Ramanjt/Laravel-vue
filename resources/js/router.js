import Vue from 'vue';
import VueRouter from 'vue-router';
import DocumentComp from "./components/DocumentComp";

Vue.use(VueRouter);

export default new VueRouter({
    routes:[
        {path:'/',component: DocumentComp}
    ],
    mode:'history'
})