<template>
    <span class="badge badge-light">{{ count }}</span>
</template>

<script>
export default {
    props: {initialCount: {
        default: 0,
        required: false,
    }},
    data () {
        return {
            count: 0,
        }
    },
    beforeMount () {
        window.Event.$on('added-to-cart', () => {
            this.count++
        })
        window.Event.$on('removed-from-cart', (item) => {
            this.count -= item.qty
        })
        window.Event.$on('updated-cart', (count) => {
            this.count = count
        })
        this.count = this.initialCount
    }
}
</script>

