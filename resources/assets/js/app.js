/* Vue.component(
    'example-component',
    require('./components/Example.vue')
); */

import Vue from 'vue';

import ExampleComponent from './components/Example.vue';


new Vue({
    el: "#app",
    components: {
        'example-component' : ExampleComponent,
    }
});