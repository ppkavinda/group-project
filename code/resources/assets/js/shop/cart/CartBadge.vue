<template>
    <span v-if="count>0" class="badge badge-light">{{ count }}</span>
</template>

<script>
export default {
    props: {
        initialCart: {
            default: 0,
            required: false,
        }
    },
    data () {
        return {
            items: JSON.parse(this.initialCart),
            // count: 0,
        }
    },
    computed: {
        // count of products in cart
        count () {
            let totalItems = 0
            Object.keys(this.items).forEach(item => {
                totalItems += parseInt(this.items[item].qty)
            });

            return totalItems
        }
    },
    beforeMount () {
        /**
         * listening for events, emitted by CartModel
         */
        window.Event.$on('added-to-cart', (item) => {
            console.log(item)
            Vue.set(this.items, item.rowId, item)
        })
        window.Event.$on('removed-from-cart', (item) => {
            Vue.delete(this.items, item.rowId)
        })
        window.Event.$on('updated-cart', (item) => {
            this.items[item.rowId].qty = item.qty
        })
    }
}
</script>

