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
    methods: {
        onPrevious () {
            console.log('previous')
            this.$emit('gotoShipping')
        },
    }
    
}
</script>
