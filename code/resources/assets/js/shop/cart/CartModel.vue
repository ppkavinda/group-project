<template>
<div id="PPMiniCart" v-click-outside="closeModel" v-if="show">
    <form method="post" class="card-body" action="#" >    
        <button type="button" class="close p-2" @click="closeModel">×</button>    
        <ul v-if="items.length" class="list-group list-group-flush bg-light">
            <li v-for="(item, index) in items" :key="index" class="minicart-item row">            
                <div class="col-md-6">                
                    <a class="minicart-name" :href="'/products/' + item.id" v-text="item.name"></a>
                </div>
                <div class="minicart-details-quantity col-md-2">
                    <input type="number" class="form-control" v-model="item.pivot.quantity" min="0" name="quantity">
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
            <div class="col-md-5 minicart-subtotal"><strong>Subtotal: LKR {{ total }}</strong></div>       
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
            items: [],
        };
    },
    computed: {
        total () {
            let total = 0
            this.items.forEach( item => total+= item.price * item.pivot.quantity)
            return total.toFixed(2)
        },
    },
    methods: {
        removeItem (item) {
            this.items.splice(item.index, 1)
        },
        closeModel (e) {
            this.show = false
        }
    },
    created() {
        window.Event.$on("added-to-cart", res => {
            this.show = true;
            let item = res
            item.pivot = {}
            item.pivot.quantity = 2
            this.items.push(item);
        });
        this.items = JSON.parse(this.initialItems)
    },
};
</script>
