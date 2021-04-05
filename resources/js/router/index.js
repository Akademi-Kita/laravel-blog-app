import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter);

import Home from "../pages/Home/Home.vue";
import About from "../pages/About/About.vue";
import Blogs from "../pages/Blogs/Blogs.vue";
import Latests from "../pages/Latests/Latests.vue";

const Popular = require("../pages/Popular/Popular.vue").default;
const PageNotFound = require("../pages/PageNotFound.vue").default;

const routes = [
    {
        path: "/",
        component: Home,
        name: "home"
    },
    {
        path: "/about",
        component: About,
        name: "about"
    },
    {
        path: "/blog",
        component: Blogs,
        name: "blog"
    },
    {
        path: "/latests",
        component: Latests,
        name: "latests"
    },
    {
        path: "/popular",
        component: Popular,
        name: "popular"
    },
    {
        path: "*",
        component: PageNotFound,
        name: "notfound"
    }
];

const router = new VueRouter({
    mode: "history",
    routes,
    linkExactActiveClass: "active"
});

export default router;
