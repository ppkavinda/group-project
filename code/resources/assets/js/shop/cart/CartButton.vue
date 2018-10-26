<template>
<a @click.prevent="toggleCart" class="nav-link menu__link" href="/cart">
    <i class="fa fa-shopping-cart" aria-hidden="true"></i> My cart <cart-badge :initial-count="initialCartCount"></cart-badge>
</a>
</template>

<script>
import CartBadge from './CartBadge'

export default {
    props: ['initialCartCount'],
    components: {CartBadge},
    methods: {
        toggleCart () {
            window.Event.$emit('open-cart')
        }
    }
}
</script>
