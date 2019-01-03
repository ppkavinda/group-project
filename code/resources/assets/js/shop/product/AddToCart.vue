<template>
<div>
    <div class="rating1">
        <span class="starRating">
            <input disabled id="rate5" type="radio" value="5" :checked="getRating==5">
            <label for="rate5">5</label>
            <input disabled id="rate4" type="radio" value="4" :checked="getRating==4">
            <label for="rate4">4</label>
            <input disabled id="rate3" type="radio" value="3" :checked="getRating==3">
            <label for="rate3">3</label>
            <input disabled id="rate2" type="radio" value="2" :checked="getRating==2">
            <label for="rate2">2</label>
            <input disabled id="rate1" type="radio" value="1" :checked="getRating==1">
            <label for="rate1">1</label>
        </span>
    </div>
    <div class="color-quality">
        <div class="color-quality-right">
            <label for="quantity"><h5>Quality :</h5></label>
            <input id="quantity" type="number" min="1" v-model="product.quantity" class="p-1">
        </div>
    </div>
    <div class="occasion-cart" style="position:relative; top:3rem;width:40%;">
        <div class="snipcart-details top_brand_home_details item_add single-item p-3 minicart-showing">
            <add-to-cart-button @quantityError="errorQuantity" :product="product"></add-to-cart-button>
        </div>
    </div>
</div>
</template>

<script>
// import AddToCartButton from './AddToCartButton'
  
export default {
    props: ['initialProduct',],
    // components: {AddToCartButton},
    data () {
        return {
            product: {
                quantity: 1,
            },
        }
    },
    methods: {
        errorQuantity () {
            this.product.quantity = 1
            console.log('error')
        }
    //     onClick () {
    //         if (!this.product.quantity) {
    //             this.errors.quantity = ['Invalid quantity']
    //             return
    //         }
    //         axios.post(`/cart/${this.product.id}`, this.product)
    //             .then(res => {
    //                 window.Event.$emit('added-to-cart', res.data)
    //             })
    //             .catch(err => {
    //                 // TODO replace to open the login model
    //                 if (err.response.status == 401) {
    //                 // console.log(err.response) 
    //                     window.location.replace('/login')
    //                 }
    //             })
    //     },
    },
    computed: {
        getRating () {
            return Math.round(this.product.ratings)
        }
    },
    created () {
        this.product = JSON.parse(this.initialProduct)
        Vue.set(this.product, 'quantity', 1)
    }
}
</script>

<style lang="scss" scoped>
a {
    text-transform: uppercase;
}
</style>


