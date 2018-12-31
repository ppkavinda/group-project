<template>
    <a @click="onClick" class="hvr-outline-out button2">Add to cart</a>
</template>

<script>
export default {
    props: ['product'],
    data () {
        return {
            errors: {
                quantity: 1,
            },
        }
    },
    methods: {
        onClick () {
            if (this.product.quantity <= 0) {
                this.$emit('quantityError')
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
}
</script>

<style>

</style>

