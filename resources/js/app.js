import Vue from "vue";

import router from "./router";
import responsive from "vue-responsive";
Vue.use(responsive);

Vue.component("header-component", require("./components/Header.vue").default);
Vue.component("footer-component", require("./components/Footer.vue").default);

const app = new Vue({
    el: "#app",
    router
});
