
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',

    data : {
        product: {
            id : "",
            title : "",
            name : "",
            image : "",
            category : ""
        }
    },

    mounted: () => {

    },

    methods : {
        openModal: (product) => {
            this.product = product;
            let productModal = $('#productModal');
            productModal.find('.title').html(product.title);
            let titles = ["Very nice choice", "We would love to see you get it", "You deserve it", "Go for it, don't be shy"];
            productModal.find('.desc').html(titles[Math.floor(Math.random() * 3)]);
            productModal.find('.name').html(product.name);
            productModal.find('.sherable-link').html("").attr('href', '#');
            productModal.find('.btn-primary').show();
            productModal.modal('toggle');
        },
        getShareLink: () => {
            let productModal = $('#productModal');
            let address = window.location.origin + "/product/" + this.product.id + "/campaign/";
            productModal.find('.btn-primary').hide();

            axios.post('campaign', {'product_id' : this.product.id}).then((data) => {
                address = address + data.data.campaign.key;
                productModal.find('.sherable-link').html(address).attr('href', address);
            });
        }

    }
});
