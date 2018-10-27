<template>
<div class="tab-pane" :class="{'active': initialActive}">
    <br><br>
    <div class="form-group">
        <label for="Address1" class="col-form-label">Address Line 1</label>
        <input type="text" name="address1" id="Address1" class="form-control" v-model="details.address1" required>
        <small v-if="errors.address1 && errors.address1.length" class="form-text text-danger" v-text="errors.address1[0]"></small>
    </div>
    <div class="form-group">
        <label for="Address2" class="col-form-label">Address Line 2 (optional)</label>
        <input type="text" name="address" id="Address2" class="form-control" v-model="details.address2">
    </div>
    <div class="row">
        <div class="col-sm-8 pl-0">
            <div class="form-group">
                <label for="City" class="col-form-label">City</label>
                <input type="text" name="City" id="City" class="form-control" v-model="details.city" required>
            <small v-if="errors.city && errors.city.length" class="form-text text-danger" v-text="errors.city[0]"></small>
            </div>
        </div>
        <div class="col-sm-4 pr-0">
            <div class="form-group">
                <label for="postal_code" class="col-form-label">Postal Code / Zip Code</label>
                <input type="text" name="postal_code" id="postal_code" class="form-control" v-model="details.postal_code" required>
                <small v-if="errors.postal_code && errors.postal_code.length" class="form-text text-danger" v-text="errors.postal_code[0]"></small>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="telephone" class="col-form-label">Telephone</label>
        <input type="text" name="telephone" id="telephone" class="form-control" v-model="details.telephone" required>
        <small v-if="errors.telephone && errors.telephone.length" class="form-text text-danger" v-text="errors.telephone[0]"></small>
    </div>
    <ul class="pagination wizard pagination-pager d-block">
        <li class="next page-item pull-right">
            <a @click.prevent="onNext" class="btn btn-primary" href="#">Next</a>
        </li>
    </ul>
</div>
</template>

<script>
export default {
    props: ['initialDetails', 'initialActive'],
    data () {
        return {
            details: {
                address1: '',
                address2: '',
                city: '',
                postal_code: '',
                telephone: '',
            },
            errors: {
                address1: [],
                city: [],
                postal_code: [],
                telephone: [],
            },
        }
    },
    methods: {
        onNext () {
            axios.post('/checkout/details', this.details)
                .then( res => {
                    console.log(res.data)
                    this.errors = {}
                    this.$emit('gotoShipping')
                })
                .catch (err => {
                    console.log(err.response.data.errors)
                    this.errors = err.response.data.errors
                })
        }
    },
    created () {
        this.details = JSON.parse(this.initialDetails)
        // console.log(this.details)
    }
}
</script>
