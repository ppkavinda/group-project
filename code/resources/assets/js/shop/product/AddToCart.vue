<template>
<div>
    <div class="row">
        <div class="col-md-3">
            <div class="item-info-product ">    
                <div class="info-product-price">
                    <label for="price"><b>Price </b></label>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="item-info-product ">    
                <div class="info-product-price">
                    <span class="item_price" id="price">LKR {{ product.price - product.discount * .01 }}</span>
                    <del v-if="product.discount" style="color:red;">LKR {{ product.price }}</del>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="item-info-product ">    
                <div class="info-product-price">
                    <label for="price"><b>Ratings </b></label>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="rating1 item-info-product">
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
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="item-info-product">
                <div class="info-product-price">
                    <label for="size" class="col-form-label"><b>Size</b></label>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="item-info-product">
                <div class="info-product-price">
                    <select class="form-control" id="size" name="sizes" v-model="product.size">
                        <!-- @for($x=0; $x< count(explode(",",$product->sizes)); $x++) -->
                        <option v-for="(size, index) in sizesAsArray" :key="index">{{ size }}</option>
                        <!-- @endfor -->
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="item-info-product">
                <div class="info-product-price">
                    <label for="amount" class="col-form-label"><b>Quantity</b></label>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="item-info-product">
                <div class="info-product-price">
                    <input id="quantity" type="number" @change="clearErrors" min="1" 
                        v-model="product.quantity" class="form-control">
                    <small v-if="errors.quantity.length" v-text="errors.quantity[0]" class="invalid-feedback d-block pl-3">
                    </small>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="item-info-product">
                <div class="info-product-price">
                    <div class="occasion-cart" style="position:relative; top:3rem;width:40%;">
                        <div class="snipcart-details top_brand_home_details item_add single-item p-3 minicart-showing">
                            <!-- <add-to-cart-button @invalidQuantity="errorQuantity" :product="product"></add-to-cart-button> -->
                            <a @click="onClick" class="hvr-outline-out button2">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
// import AddToCartButton from './AddToCartButton'
  
export default {
    props: ['initialProduct', 'initialSizes'],
    // components: {AddToCartButton},
    data () {
        return {
            product: {
                quantity: 1,
                // size: 'a',
            },
            sizes: {},
            errors: {
                quantity: [],
                size: [],
            },
        }
    },
    methods: {
        errorQuantity () {
            this.product.quantity = 1
            console.log('error')
        },
        // onClick () {
        //     if (this.product.quantity <= 0) {
        //         this.$emit('invalidQuantity')
        //         this.errors.quantity = ['Invalid quantity']
        //         return
        //     }
        //     axios.post(`/cart/${this.product.id}`, this.product)
        //         .then(res => {
        //             window.Event.$emit('added-to-cart', res.data)
        //         })
        //         .catch(err => {
        //             if (err.response.status == 422) {
        //                 this.$emit('invalidQuantity')
        //                 this.errors.quantity = ['Invalid quantity']
        //             }
        //             // TODO replace to open the login model
        //             if (err.response.status == 401) {
        //             // console.log(err.response) 
        //                 window.location.replace('/login')
        //             }
        //         })
        // },
        onClick () {
            console.log(this.sizes[this.product.size], this.product.quantity)
            if (!this.sizes[this.product.size]) {
                this.errors.quantity = ['Invalid input']
                return
            }
            if (! (parseInt(this.product.quantity) > 0)) {
                this.errors.quantity = ['Invalid quantity']
                return
            }
            if ( !(parseInt(this.product.quantity) <= this.sizes[this.product.size])) {
                this.errors.quantity = [`Only ${this.sizes[this.product.size]} left`]
                return
            }
            axios.post(`/cart/${this.product.id}`, this.product)
                .then(res => {
                    this.sizes[this.product.size] -= parseInt(this.product.quantity)
                    window.Event.$emit('added-to-cart', res.data)
                })
                .catch(err => {
                    this.errors.quantity = ["Invalid quantity"]
                    if (err.response.status == 401) {
                    // console.log(err.response) 
                        window.location.replace('/login')
                    }
                })
        },
        clearErrors () {
            this.errors = {
                quantity: [],
                size: [],
            }
        }
    },
    computed: {
        getRating () {
            return Math.round(this.product.ratings)
        },
        sizesAsArray () {
            let sz = this.sizes
            delete sz.id
            delete sz.product_id
            delete sz.created_at
            delete sz.updated_at

            Object.keys(sz).forEach( s => {
                if (s[0] == 'r') delete sz[s]
                if (!sz[s]) delete sz[s]
            })
            return Object.keys(sz)
        }
    },
    created () {
        this.sizes = JSON.parse(this.initialSizes)
        this.product = JSON.parse(this.initialProduct)

        Vue.set(this.product, 'quantity', 1)
        Vue.set(this.product, 'size',  this.sizesAsArray[0])
        // Vue.set(this.product, 'previousSize',  '')

        window.Event.$on('removed-from-cart', (product) => {
            this.sizes[product.product.options.size] += parseInt(product.product.qty)
        })
    }
}
</script>

<style lang="scss" scoped>
a {
    text-transform: uppercase;
}
</style>


