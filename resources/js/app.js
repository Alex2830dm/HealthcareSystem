/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Componente por defecto
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//Componente para visualizar emergencias
Vue.component('emergencias-component', require('./components/proyecto/EmergenciasComponent.vue').default);

Vue.component('doctores-component', require('./components/proyecto/DoctoresComponent').default);
//Conponente para el administrador (emergencias)
Vue.component('emer-component', require('./components/administrador/EmerComponet.vue').default);
//Componente para el administrador (doctores)
Vue.component('doc-component', require('./components/administrador/DocsComponent.vue').default);
Vue.component('citas-component', require('./components/proyecto/CitasComponent.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
