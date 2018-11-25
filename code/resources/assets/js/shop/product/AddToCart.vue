<template>
<div>
    <div class="rating1">
        <span class="starRating">
            <input id="rating5" type="radio" name="rating" value="5">
            <label for="rating5">5</label>
            <input id="rating4" type="radio" name="rating" value="4">
            <label for="rating4">4</label>
            <input id="rating3" type="radio" name="rating" value="3" checked="">
            <label for="rating3">3</label>
            <input id="rating2" type="radio" name="rating" value="2">
            <label for="rating2">2</label>
            <input id="rating1" type="radio" name="rating" value="1">
            <label for="rating1">1</label>
        </span>
    </div>
    <div class="color-quality">
        <div class="color-quality-right">
            <label for="quantiry"><h5>Quality :</h5></label>
            <input type="number" v-model="product.quantity" class="p-1">
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
            }
            axios.post(`/cart/${this.product.id}`, this.product)
                .then(res => {
                    // console.log(res)
                    window.Event.$emit('added-to-cart', res.data)
                })
                .catch(err => {
                    // TODO replace to open the login model
                    if (err.response.status == 401) {
                    // console.log(err.response) 
                        window.location.replace('/login')
                    }
                })
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


