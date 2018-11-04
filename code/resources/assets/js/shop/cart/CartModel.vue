<template>
<div id="PPMiniCart" v-click-outside="closeModel" v-if="show">
    <form method="post" class="card-body" action="#" > 
        <button type="button" class="close p-2" @click="closeModel">×</button> 
        <ul v-if="Object.keys(items).length" class="list-group list-group-flush bg-light">
            <li v-for="(item, index) in items" :key="index" class="minicart-item row"> 
                <div class="col-md-6 my-auto"> 
                    <a class="minicart-name" :href="'/products/' + item.id" v-text="item.name"></a>
                </div>
                <div class="minicart-details-quantity col-md-2 my-auto">
                    <input type="number" class="form-control" @blur="updateItem(item)" v-model="item.qty" min="1" name="quantity">
                </div>
                <div class="minicart-details-price col-md-2 my-auto">
                    <span class="minicart-price">LKR {{ item.price | currency }}</span>
                </div>
                <div class="minicart-details-remove col-md-1 my-auto">
                    <button type="button" class="minicart-remove" @click="removeItem(item)" 
                        :disabled="url=='/checkout'" data-minicart-idx="0">x</button>            
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
        total () {
            let total = 0
            for (let key in this.items) {
                total += this.items[key].price * this.items[key].qty
            }
            return total.toFixed(2)
        },
        url () {
            return window.location.pathname
        }
    },
    methods: {
        updateItem (item) {
            if (item.qty < 1) return

            axios.put(`/cart/${item.rowId}`, {quantity: item.qty})
                .then(res => {
                    window.Event.$emit('updated-cart', res.data.cart.count)
                    console.log(res)
                })
                .catch(err => {
                    console.log(err)
                })
        },
        removeItem (item) {
            window.Event.$emit('removed-from-cart', {qty: item.qty})

            axios.delete(`/cart/${item.rowId}`)
                .then(res => {
                    Vue.delete(this.items, item.rowId)
                    // console.log(Object.keys(this.items))
                    this.disableCheckout = this.items == null || Object.keys(this.items)
                })
                .catch(err => {
                    console.log(err)
            })
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
