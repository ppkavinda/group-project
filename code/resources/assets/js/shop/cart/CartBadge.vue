<template>
    <span v-if="count>0" class="badge badge-light">{{ count }}</span>
</template>

<script>
export default {
    props: {
        initialCount: {
            default: 0,
            required: false,
        }
    },
    data () {
        return {
            items: [],
            count: 0,
        }
    },
    beforeMount () {
        window.Event.$on('added-to-cart', (item) => {
            console.log(item)
            this.items.push(item)
            // this.count++
        })
        window.Event.$on('removed-from-cart', (item) => {
            this.count -= item.qty
        })
        window.Event.$on('updated-cart', (count) => {
            this.count = count.qty
        })
        this.count = this.initialCount
    }
}
</script>

