<template>
<div id="PPMiniCart" v-click-outside="closeModel" v-if="show">
    <form method="post" class="card-body" action="#" >    
        <button type="button" class="close p-2" @click="closeModel">×</button>    
        <ul v-if="Object.keys(items).length" class="list-group list-group-flush bg-light">
            <li v-for="(item, index) in items" :key="index" class="minicart-item row">            
                <div class="col-md-6">                
                    <a class="minicart-name" :href="'/products/' + item.id" v-text="item.name"></a>
                </div>
                <div class="minicart-details-quantity col-md-2">
                    <input type="number" class="form-control" @input="updateItem(item)" v-model="item.qty" min="1" name="quantity">
                </div>
                <div class="minicart-details-price col-md-2">
                    <span class="minicart-price" v-text="item.price"></span>
                </div>       
                <div class="minicart-details-remove col-md-1">          
                    <button type="button" class="minicart-remove" @click="removeItem(item)" data-minicart-idx="0">x</button>            
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
                <a class="btn btn-primary mr-auto">Go to Cart</a>
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
            show: true,
            items: {},
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
    },
    methods: {
        updateItem (item) {
            axios.put(`/cart/${item.rowId}`, {quantity: item.qty})
                .then(res => {
                    console.log(res)
                })
                .catch(err => {
                    console.log(err)
                })
        },
        removeItem (item) {
            axios.delete(`/cart/${item.rowId}`)
                .then(res => {
                    Vue.delete(this.items, item.rowId)
                })
                .catch(err => {
                    console.log(err)
            })
        },
        closeModel (e) {
            this.show = false
        }
    },
    created() {
        window.Event.$on("added-to-cart", cartItem => {
            this.show = true;
            Vue.set(this.items, cartItem.rowId, cartItem)
        });
        this.items = JSON.parse(this.initialItems)
    },
    filters: {
        currency (value) {
            return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
    },
};
////////////////// TODO update quantity
</script>
