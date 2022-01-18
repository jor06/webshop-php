Vue.component('products', {
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
        addToCart(meat) {
            meat.stock--;

            this.$root.$emit('add-to-cart', meat);
        },

        getProducts() {
            let self = this;

            axios({
                method: 'GET',
                url: '?page=home&action=getdata',
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
        <div class="row">
            <div class="col-md-4 pt-3" v-for="meat in meats">
                <div class="card">
                    <img :src="'/assets/images/webshop/' + meat.image" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ meat.name }}</h5>
                        <p class="card-text">{{ meat.descr }}</p>
                        <p>Price: {{ meat.price }},-</p>
                        <p>Stock: {{ meat.stock }}</p>
                        <input type="button" class="btn btn-danger" :disabled="meat.stock === 0" @click="addToCart(meat)" value="Order">
                        <input type="button" class="btn btn-danger" :disabled="meat.stock === 0" @click="" value="Details">
                        </div>
                </div>
            </div>
        </div>`,
})