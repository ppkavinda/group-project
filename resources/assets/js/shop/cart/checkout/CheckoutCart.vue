<template>
<div class="row">
    <div class="col-md-12 container">
        <div id="formwizard_simple" class="form-wizard form-wizard-horizontal">
            <form class="form floating-label">
                <div class="form-wizard-nav">
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" :class="progressFill"></div>
                    </div>
                    <ul class="nav nav-justified nav-pills">
                        <li class="nav-item">
                            <a class="nav-link" :class="{'active': activeDetails}" href="#fws_tab1">
                                <span class="step">1</span> <span class="title">Customer Information</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" :class="{'active': activeShipping}" href="#fws_tab2">
                                <span class="step">2</span> <span class="title">Shipping Details</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" :class="{'active': activePayment}" href="#fws_tab3">
                                <span class="step">3</span> <span class="title">Payment Method</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="form-container tab-content clearfix p-30">
                    <checkout-details :initial-active="activeDetails" 
                        :initial-details="initialUserDetails" @gotoShipping="goShipping"></checkout-details>
                    <checkout-shipping :initial-active="activeShipping"
                        :user="user" :savedOrder="savedOrder"
                        @gotoDetails="goDetails" @gotoPayment="goPayment" ></checkout-shipping>
                    <checkout-payment :initial-active="activePayment"
                        :user="user" :subtotal="subTotal" :delivery="deliveryDetails"
                        :newAddress="deliveryDetails.address1 != ''"
                        :cart="cart"
                        @gotoShipping="goShipping"></checkout-payment>
                </div>
            </form>
        </div>
    </div>
</div>
</template>

<script>
import CheckoutDetails from './CheckoutDetails'
import CheckoutShipping from './CheckoutShipping'
import CheckoutPayment from './CheckoutPayment'

export default {
    components: {CheckoutDetails, CheckoutPayment, CheckoutShipping},
    props: ['initialUserDetails', 'initialCart', 'successfull'],
    data () {
        return {
            user: {},
            cart: this.initialCart,
            activeDetails: true,
            activeShipping: false,
            activePayment: false,
            progressFill: 'progress-fill-0',
            deliveryDetails: {},
            savedOrder: false,
            order_id: 3
        }
    },
    methods: {
        goShipping (user) {
            this.activeDetails = false
            this.activeShipping = true
            this.activePayment = false
            this.progressFill = 'progress-fill-50'
            if (user) this.user = user
        },
        goDetails () {
            console.log('goDetails')
            this.activeDetails = true
            this.activeShipping = false
            this.activePayment = false
            this.progressFill = 'progress-fill-0'
        },
        goPayment (delivery) {
            console.log('goPayment')
            this.deliveryDetails = delivery
            this.activeDetails = false
            this.activeShipping = false
            this.activePayment = true
            this.savedOrder = true
            this.progressFill = 'progress-fill-100'
        },
    },
    computed: {
        subTotal () {
            let total = 0
            for (let key in this.cart) {
                total += this.cart[key].price * this.cart[key].qty
            }
            return total.toFixed(2)
        },
    },
    created () {
        // if (this.successfull) this.goPayment()
        this.user = JSON.parse(this.initialUserDetails)
        this.cart = JSON.parse(this.initialCart)

        window.Event.$on("added-to-cart", cartItem => {
            Vue.set(this.cart, cartItem.rowId, cartItem)
        })

        window.Event.$on('removed-from-cart', item => {
            console.log('removed from cart', item.rowId)
            Vue.delete(this.cart, item.rowId)
        })

        window.Event.$on('updated-cart', item => {
            console.log('updated', item)
            // Vue.set(this.cart, item.rowId.qty, item.quantity)
            
            this.cart[item.rowId].qty = item.qty
        })

    },
}
</script>

<style lang="scss" scoped>
.form-container {
    width: 70%;
    margin-left: auto;
    margin-right: auto;
}
.progress-fill-0 {
    width: 0;
}
.progress-fill-50 {
    width: 50%;
}
.progress-fill-100 {
    width: 100%;
}
</style>
