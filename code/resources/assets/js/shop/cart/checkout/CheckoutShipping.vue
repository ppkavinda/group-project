<template>
<div class="tab-pane" :class="{'active': initialActive}">
    <br><br>
    <div class="">
        <form method="POST" action="https://sandbox.payhere.lk/pay/checkout">   
            <div class="text-center">Pay Here</div>
            <input class="form-control" type="text" name="amount" :value="subtotal">  
            <input class="form-control" type="hidden" name="merchant_id" :value="1211891">    <!-- Replace your Merchant ID -->
            <input class="form-control" type="hidden" name="return_url" value="http://athwela.tk/checkout/success">
            <input class="form-control" type="hidden" name="cancel_url" value="http://athwela.tk/checkout/cancel">
            <input class="form-control" type="hidden" name="notify_url" value="http://athwela.tk/checkout/notify">  
            <input class="form-control" type="hidden" name="order_id" :value="234423">
            <input class="form-control" type="hidden" name="items" :value="items">
            <input class="form-control" type="hidden" name="currency" value="LKR">
            <input class="form-control" type="hidden" name="first_name" :value="user.first_name">
            <input class="form-control" type="hidden" name="last_name" :value="user.last_name">
            <input class="form-control" type="hidden" name="email" :value="user.email">
            <input class="form-control" type="hidden" name="phone" :value="user.telephone">
            <input class="form-control" type="hidden" name="address" :value="address">
            <input class="form-control" type="hidden" name="city" :value="user.city">
            <input class="form-control" type="hidden" name="country" value="Sri Lanka">
            <button type="submit" style="background: rgba(0, 0, 0, 0); border:none">
                <a href="https://www.payhere.lk" target="_blank"><img src="https://www.payhere.lk/downloads/images/pay_with_payhere.png" alt="Pay with PayHere" width="200"/></a>
            </button>
        </form>
    </div>
    <ul class="pagination wizard pagination-pager d-block">
        <li class="next page-item pull-left">
            <a @click.prevent="onPrevious" class="btn btn-primary" href="#">Previous</a>
        </li>
    </ul>
</div>
</template>

<script>
export default {
    props: ['initialActive', 'subtotal', 'user', 'cart'],
    data () {
        return {
            active: this.initialActive,
        }
    },
    methods: {
        onPrevious () {
            console.log('previous')
            this.$emit('gotoDetails')
        },
        onNext () {
            this.$emit('gotoPayment')
        },
        onPaymentSuccess () {
            console.log('payment successful')
            this.onNext()
        },
    },
    computed: {
        address () {
            return this.user.address1 + ' ' + this.user.address2
        },
        items () {
            return Object.keys.length + ' item' + (Object.keys.length > 1 ? 's' : '')
        }
    }
    
}
</script>

<style scoped>
.paypal-button-label {
    padding-bottom: 20px;
}
</style>
