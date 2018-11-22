<template>
<div class="tab-pane" :class="{'active': initialActive}">
    <br><br>
    <div class="">
        <div class="text-center">
            <span for="Country" class="py-1">Pay with</span>
        </div>
        <div class="text-center">
            <div id="paypal-button"></div>
        </div>
        <!-- <input type="text" name="Country" id="Country" class="form-control"> -->
    </div>
    <ul class="pagination wizard pagination-pager d-block">
        <li class="next page-item pull-left">
            <a @click.prevent="onPrevious" class="btn btn-primary" href="#">Previous</a>
        </li>
        <!-- <li class="next page-item pull-right">
            <a @click.prevent="onNext" class="btn btn-primary" href="#">Next</a>
        </li> -->
    </ul>
</div>
</template>

<script>
export default {
    props: ['initialActive', 'initialSubtotal'],
    data () {
        return {
            active: this.initialActive,
            subtotal: 0,
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
        payment (data, actions) {
            return actions.payment.create({
                transactions: [{
                    amount: {
                        total: this.subtotal,
                        currency: 'USD'
                    }
                }]
            });
        },
        onAuthorize (data, actions) {
            return actions.payment.execute().then(function() {
                // payment successfull
                this.onPaymentSuccess()
            }.bind(this));
        },
        convertToUsd (amount) {
            return amount
        }
    },
    created () {
        this.subtotal = this.initialSubtotal
    },
    mounted() {
        paypal.Button.render({
            // Configure environment
            env: 'sandbox',
            client: {
                sandbox: 'AVxjiDsHZLd6O6utf6kxHYYIYsrq6x0dRpq2XrPq0Df81UMPwTUNwbyc9Y6rXxiWr8FQfvnhfk1a8XXP',
                production: 'demo_production_client_id'
            },
            // Customize button (optional)
            locale: 'en_US',
            style: {
                size: 'large',
                color: 'gold',
                shape: 'pill',
            },

            // Enable Pay Now checkout flow (optional)
            commit: true,

            // Set up a payment
            payment: this.payment,
            // Execute the payment
            onAuthorize: this.onAuthorize,
        }, '#paypal-button');

    }
    
}
</script>

<style scoped>
.paypal-button-label {
    padding-bottom: 20px;
}
</style>
