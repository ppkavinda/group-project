<template>
<div class="tab-pane" :class="{'active': initialActive}">
    <br><br>
    <div class="">
        <div class="form-group">
            <label class="form-check-label" for="defaultCheck1">
                <input class="form-check-input" type="radio" :value="false" v-model="newAddress" id="defaultCheck1">
                    Use my address as the shipping address
            </label>
            <br>
            <label class="form-check-label" for="defaultCheck2">
                <input class="form-check-input" type="radio" :value="true" v-model="newAddress" id="defaultCheck2">
                Add different delivery details
            </label>
        </div>
        <div class="form-group">
            <label for="dAddress1" class="col-form-label">Delivery Address</label>
            <input type="text" name="address1" id="dAddress1" class="form-control" 
                v-model="delivery.address1" placeholder="Delivery Address line 1" :disabled="!newAddress" required>
            <small v-if="errors['delivery.address1'] && errors['delivery.address1'].length" 
                class="form-text text-danger" v-text="errors['delivery.address1'][0]"></small>
        </div>
        <div class="form-group">
            <input type="text" name="address2" id="dAddress2" class="form-control" 
                v-model="delivery.address2" placeholder="Delivery Address line 2" :disabled="!newAddress">
            <small v-if="errors['delivery.address2'] && errors['delivery.address2'].length" 
                class="form-text text-danger" v-text="errors['delivery.address2'][0]"></small>
        </div>
        <div class="row">
            <div class="col-sm-8 pl-0">
                <div class="form-group">
                    <label for="dCity" class="col-form-label">City</label>
                    <input type="text" name="City" id="dCity" class="form-control" 
                        v-model="delivery.city" placeholder="Delivery city" :disabled="!newAddress" required>
                    <small v-if="errors['delivery.city'] && errors['delivery.city'].length" 
                        class="form-text text-danger" v-text="errors['delivery.city'][0]"></small>
                </div>
            </div>
            <div class="col-sm-4 pr-0">
                <div class="form-group">
                    <label for="dpostal_code" class="col-form-label">Postal Code / Zip Code</label>
                    <input type="text" name="postal_code" id="dpostal_code" 
                        class="form-control" v-model="delivery.postal_code" 
                        placeholder="Delivery Postal Code" :disabled="!newAddress" required>
                    <small v-if="errors['delivery.postal_code'] && errors['delivery.postal_code'].length" 
                        class="form-text text-danger" v-text="errors['delivery.postal_code'][0]"></small>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="dtelephone" class="col-form-label">Telephone</label>
            <input type="text" name="telephone" id="dtelephone" class="form-control" 
                v-model="delivery.telephone" placeholder="Delivery Telephone No" :disabled="!newAddress">
            <small v-if="errors['delivery.telephone'] && errors['delivery.telephone'].length" 
                class="form-text text-danger" v-text="errors['delivery.telephone'][0]"></small>
        </div>
    </div>
    <ul class="pagination wizard pagination-pager d-block">
        <li class="next page-item pull-left">
            <a @click.prevent="onPrevious" class="btn btn-primary" href="#">Previous</a>
        </li>
        <li class="next page-item pull-right">
            <a @click.prevent="createOrder" class="btn btn-primary" href="#">Next</a>
        </li>
    </ul>
</div>
</template>

<script>
export default {
    props: ['initialActive', 'subtotal', 'user'],
    data () {
        return {
            active: this.initialActive,
            newAddress: false,
            order: {},
            delivery: {
                address1: '',
                address2: '',
                city: '',
                postal_code: '',
                telephone: '',
            },
            errors: {
                address1: [],
                address2: [],
            }
        }
    },
    methods: {
        createOrder (e) {
            let data = {
                user: this.user,
                differentDelivery: this.newAddress
            }

            if (this.newAddress) {
                data.delivery = this.delivery
            }
            
            axios.post('/orders/store', data)
                .then( res => {
                    console.log(res.data)
                    this.errors = {}
                    this.onNext()
                })
                .catch (err => {
                    console.log(err.response.data.errors)
                    this.errors = err.response.data.errors
                })
        },
        onPrevious () {
            console.log('previous')
            this.$emit('gotoDetails')
        },
        onNext () {
            this.$emit('gotoPayment', this.delivery)
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
