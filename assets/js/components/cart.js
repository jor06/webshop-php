Vue.component('cart-form', {
    data: function () {
        return {
            cart: null,
        }
    },

    props: {
        method: {
            default: 'POST',
        }
    },

    mounted() {

    },

    created() {
        this.cart = this.$parent.cart;
    },

    methods: {
        showShoppingCart() {
            $('.layer').fadeIn();

            $('.cart').toggle({
                direction: 'right',
            });

            // axios({ })
        },

        closeShoppingCart() {
            $('.layer').fadeOut();
            $('.cart').fadeOut();
        },

        checkout() {
            this.$root.$emit('save-cart');
        },
    },

    template: `
        <section>
            <button @click="closeShoppingCart">Close cart</button>
            <div class="row p-2 mb-2" v-for="product in cart.products">
                <div class="col-md-4">
                    <img :src="'/assets/images/webshop/' + product.image" width="50">
                </div>
                <div class="col-md-2">{{ product.amount }}</div>
                <div class="col-md-3 text-end">{{ product.cost }}</div>
                <div class="col-md-3" text-end>{{ product.cost * product.amount }}</div>
            </div>

            <div class="row">
                <div class="col-md-12 mt-3">
                    <button @click="checkout">Checkout</button>
                </div>
            </div>
        </section>
    `,
})