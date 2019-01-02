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
            <input id="quantity" type="number" v-model="product.quantity" class="p-1">
        </div>
    </div>
    <div class="occasion-cart" style="position:relative; top:3rem;width:40%;">
        <div class="snipcart-details top_brand_home_details item_add single-item p-3 minicart-showing">
            <a @click="onClick" class="hvr-outline-out button2">Add to cart</a>
        </div>
    </div>
</div>
</template>

<script>
export default {
    props: ['initialProduct',],
    data () {
        return {
            product: {
                quantity: 1,
            },
        }
    },
    methods: {
        onClick () {
            if (!this.product.quantity) {
                this.errors.quantity = ['Invalid quantity']
                return
            }
            axios.post(`/cart/${this.product.id}`, this.product)
                .then(res => {
                    window.Event.$emit('added-to-cart', res.data)
                })
                .catch(err => {
                    // TODO replace to open the login model
                    if (err.response.status == 401) {
                    // console.log(err.response) 
                        window.location.replace('/login')
                    }
                })
        },
    },
    computed: {
        getRating () {
            return Math.round(this.product.ratings)
        }
    },
    created () {
        this.product = JSON.parse(this.initialProduct)
        this.product.quantity = 1
    }
}
</script>

<style lang="scss" scoped>
a {
    text-transform: uppercase;
}
</style>


