<template>
<div :class="{'active': initialActive}" class="tab-pane">
    <br><br>
    <div class="form-group">
        <label for="URL" class="col-form-label"><strong><i class="fa fa-envelope-open"></i> Delivery Address:</strong></label>
        <div class="form-control-plaintext" v-html="formatedAddress" ></div>
    </div>
    <div class="form-group">
        <ul>
        <label for="URL" class="col-form-label"><strong> Orderd Products:</strong></label>
            <li class="row" v-for="(prod, index) in products" :key="index">
                <span><i class="fa fa-check"></i></span>
                <span class="col-md-7">
                    {{ prod.name }}
                </span>
                &times;
                <span class="col-md-1">
                    {{ prod.qty }}
                </span>
                =
                <span class="col-md-3">
                    LKR {{ prod.price }}
                </span>
            </li>
        </ul>
    </div>
    <div class="form-group row">
        <label for="URL" class="col-form-label col-sm-3 col-md-2"><strong>Subtotal:</strong></label>
        <input type="text" name="subtotal" id="subtotal" class="form-control-plaintext col-sm-7" :value="'LKR ' + subtotal" readonly>
    </div>
    <form ref="form" method="POST" action="https://sandbox.payhere.lk/pay/checkout">
            <div class="form-group">
                if above details are correct you can pay from here
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
        <input class="form-control" type="hidden" name="order_id" :value="delivery.orderId">
        <input class="form-control" type="hidden" name="items" :value="items">
        <input class="form-control" type="hidden" name="currency" value="LKR">
        <input class="form-control" type="hidden" name="first_name" :value="user.name">
        <input class="form-control" type="hidden" name="last_name" :value="user.name">
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
    </ul>

</div>
</template>

<script>

export default {
    props: ['initialActive', 'subtotal', 'user', 'delivery', 'cart', 'newAddress'],
    data () {
        return {
            active: this.initialActive,
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
        // items as a string (to send to payhere)
        items () {
            let str = ''
            Object.keys(this.cart).forEach(key => {
                str += this.cart[key].name + ', ' 
            });
            return str
        },
        // products as a array
        products () {
            let prod = [];
            Object.keys(this.cart).forEach(key => {
                prod.push(this.cart[key])
            });
            return prod;
        },
        // subtotal () {
        //     let total = 0;
        //     this.products.forEach(prod => total += prod.price * prod.qty)
        //     return total;
        // },
        // full address for store in data base
        address () {
            if (this.newAddress) 
                return this.user.name + ', ' + this.delivery.address1 + ', '
                    + this.delivery.address2 + '. ' + this.delivery.city + ' ' + this.delivery.telephone
            return this.user.name + ', ' + this.user.address1 + ' ' 
                + this.user.address2 + ' ' + this.user.city + ' ' + this.user.telephone
        },
        // address for display on page
        formatedAddress () {
            if (this.newAddress) 
                return this.user.name + ',<br/>' + this.delivery.address1 + '\n,<br/>'
                    + this.delivery.address2 + '.<br/>' + this.delivery.city + '<br/>' + this.delivery.telephone
            return this.user.name + ',<br/>' + this.user.address1 + '\n,<br/>' 
                + this.user.address2 + '.<br/>' + this.user.city + '<br/>' + this.user.telephone
        }
    },
    mounted () {
    }
}
</script>
