
Vue.component('product', {
    props: {
    },
    data: function () {
        return {
            meats: [],
        }
    },

    created() {
        this.getProducts();
    },

    methods: {
        goToDetails() {
                window.location.href('/details')
        },
        addToCart(meat) {
            meat.stock--;

            this.$root.$emit('add-to-cart', meat);
        },

        getProducts() {
            let self = this;

            axios({
                method: 'GET',
                url: '?page=home&function=getdata',
                headers: {
                    "X-Requested-With": "XMLHttpRequest"
                }
            }).then(function (response) {
                if (response.data.success) {
                    self.meats = response.data.meats;
                }
            }).catch(function (error) {

            });
        },
    },

    template: `            
    <div class="product">
    <div class="product-image">
        <img v-bind:src="image" alt="">
    </div>

    <div class="product-info">
        <h1>{{ name }}</h1>
        <h2>{{ description }}</h2>
        <p v-if="inStock">In Stock</p>
        <p v-else :class="{ outOfStock: !inStock }">Out of Stock</p>
            
    <div>
        <button v-on:click="addToCart" 
        :disabled="!inStock"
        :class="{ disabledButton: !inStock }"
        >>Add to Cart</button>
        <button v-on:click="removeFromCart">Remove from Cart</button>
    </div>
</div>`
})