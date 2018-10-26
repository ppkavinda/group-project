<template>
<div class="tab-pane" :class="{'active': initialActive}">
    <br><br>
    <div class="form-group">
        <label for="Country" class="col-form-label">Shipping Method</label>
        <input type="text" name="Country" id="Country" class="form-control">
    </div>
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
    props: ['initialActive'],
    data () {
        return {
            active: this.initialActive
        }
    },
    methods: {
        onPrevious () {
            console.log('previous')
            this.$emit('gotoDetails')
        },
        onNext () {
            this.$emit('gotoPayment')
        }
    }
    
}
</script>

