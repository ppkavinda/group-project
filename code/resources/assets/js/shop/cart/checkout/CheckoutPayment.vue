<template>
<div :class="{'active': initialActive}" class="tab-pane">
    <br><br>
    <div class="form-group">
        <label for="URL" class="col-form-label">URL</label>
        <input type="text" name="URL" id="URL" class="form-control">
        <p class="form-text text-muted">Starts with http://</p>
    </div>
    <div class="form-group">
        <label for="rangelength" class="col-form-label">Range restriction</label>
        <input type="text" name="rangelength" id="rangelength" class="form-control">
        <p class="form-text text-muted">Between 5 and 10</p>
    </div>
    <form ref="form" method="POST" action="https://sandbox.payhere.lk/pay/checkout">
            <div class="form-group">
            <button type="submit" style="background: rgba(0, 0, 0, 0); border:none">
                <a href="https://www.payhere.lk" target="_blank">
                    <img src="https://www.payhere.lk/downloads/images/pay_with_payhere.png" alt="Pay with PayHere" width="200"/>
                </a>
            </button>
        </div>
        <input class="form-control-plaintext plain-text" readonly type="hidden" name="amount" :value="subtotal">  
        <input class="form-control" type="hidden" name="merchant_id" :value="1211891">    <!-- Replace your Merchant ID -->
        <input class="form-control" type="hidden" name="return_url" value="http://athwela.tk/checkout/success">
        <input class="form-control" type="hidden" name="cancel_url" value="http://athwela.tk/checkout/cancel">
        <input class="form-control" type="hidden" name="notify_url" value="http://athwela.tk:3000/checkout/notify">  
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
    </form>
    <ul class="pagination wizard pagination-pager d-block">
        <li class="next page-item pull-left">
            <a @click.prevent="onPrevious" class="btn btn-primary" href="#">Previous</a>
        </li>
        <li class="next page-item pull-right">
            <a @click.prevent="onNext" class="btn btn-primary" href="#">Next</a>
        </li>
    </ul>

</div>
</template>

<script>

export default {
    props: ['initialActive', 'subtotal', 'user', 'delivery', 'cart'],
    data () {
        return {
            active: this.initialActive,
            newAddress: false,
            order: {},
        }
    },
    methods: {
        onPrevious () {
            console.log('previous')
            this.$emit('gotoShipping')
        },
    },
    computed: {
        items () {
            let str = ''
            Object.keys(this.cart).forEach(key => {
                str += this.cart[key].name + ', ' 
            });
            return str
        },
        address () {
            return this.user.address1 + ' ' +  this.user.address2
        }
    },
    mounted () {
    }
}
</script>
