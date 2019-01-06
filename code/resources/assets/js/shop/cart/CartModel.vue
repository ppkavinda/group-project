<template>
<div id="PPMiniCart" v-click-outside="closeModel" v-if="show">
    <form method="post" class="card-body" action="#" > 
        <button type="button" class="close p-2" @click="closeModel">×</button> 
        <ul v-if="Object.keys(items).length" class="list-group list-group-flush bg-light">
            <li v-for="(item, index) in items" :key="index" class="minicart-item row"> 
                <div class="col-md-6 my-auto"> 
                    <a class="minicart-name" :href="'/quickView/' + item.id" v-text="displayName(item)"></a>
                </div>
                <div class="minicart-details-quantity col-md-2 my-auto">
                    <input type="number" class="form-control" @blur="updateItem(item)" v-model="item.qty" min="1" name="quantity">
                </div>
                <div class="minicart-details-price col-md-2 my-auto">
                    <span class="minicart-price">LKR {{ item.price | currency }}</span>
                </div>
                <div class="minicart-details-remove col-md-1 my-auto">
                    <button type="button" class="minicart-remove" @click="removeItem(item)" 
                         data-minicart-idx="0">x</button>            
                </div>            
            </li>
        </ul>    
        <div v-else>
            <ul class="list-group list-group-flush bg-light">
                <li class="minicart-item row">
                    <div class="col-md-12 text-center">You cart is empty!</div>
                </li>
            </ul>
        </div>
        <div class="row">                    
            <div class="col-md-5 minicart-subtotal"><strong>Subtotal: LKR {{ total | currency }}</strong></div>    
            <div class="col-md-3 offset-md-4">
                <a href="/checkout" class="btn btn-primary mr-auto" :class="{'disabled': disableCheckout}">Go to Checkout</a>
            </div>
        </div>                                                                        
    </form>
</div>
</template>

<script>
export default {
    props: ['initialItems'],
    data() {
        return {
            show: false,
            items: {},
            disableCheckout: true,
        };
    },
    computed: {
        // subtotal of cart
        total () {
            let total = 0
            for (let key in this.items) {
                total += this.items[key].price * this.items[key].qty
            }
            return total.toFixed(2)
        },
        url () {
            return window.location.pathname
        },
    },
    methods: {
        /**
         * send the updated quantity to \Cart
         * triggered when user change the quantity of a product in cart
         */
        updateItem (item) {
            if (item.qty < 1) return

            axios.put(`/cart/${item.rowId}`, {rowId: item.rowId, quantity: item.qty})
                .then(res => {
                    // emit an event to catch from cartBadge
                    window.Event.$emit('updated-cart', {rowId:item.rowId, qty:res.data.cart.updated.qty})
                    console.log(res)
                })
                .catch(err => {
                    console.log(err, err.response.data.message)
                })
        },
        /**
         * remove an item from the cart
         */
        removeItem (item) {

            axios.delete(`/cart/${item.rowId}`, { data: item})
                .then(res => {

                    Vue.delete(this.items, item.rowId)

                    // disable checkout button if cart is empty
                    this.disableCheckout = this.items == null || !Object.keys(this.items)

                    // emit an event to catch from cartBadge
                    window.Event.$emit('removed-from-cart', {rowId:item.rowId, qty: item.qty, product: item})
                    
                    // TODO: redirect to better place
                    // redirect to /shop if no products in the cart
                    if (!Object.keys(this.items).length && this.url == '/checkout') window.location.replace('/shop')
                    
                })
                .catch(err => {
                    console.log(err)
            })
        },
        displayName(item) {
            console.log(item.options.size)
            return item.name + ` (${item.options.size})`
        },
        closeModel (e) {
            this.show = false
        }
    },
    beforeMount () {
        window.Event.$on("added-to-cart", cartItem => {
            this.show = true
            this.disableCheckout = false
            Vue.set(this.items, cartItem.rowId, cartItem)
        })
        // only if cart has any items in it, insert them to items
        if (this.initialItems.length > 2) {
            this.items = JSON.parse(this.initialItems)
            this.disableCheckout = false
        }
        console.log('beforemount')
    },
    created () {
        console.log(this.url)
        window.Event.$on('open-cart', () => {
            console.log('open-cart')
            this.show = true
        })
        console.log('open')
    },
    filters: {
        currency (value) {
            return  value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
    },
};
</script>
