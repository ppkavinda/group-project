<template>
<div id="carouselExampleSlidesOnly" class="" data-ride="carousel">
  <div class="">
    <div class="slid-display pb-2">
      <img class="d-block w-100" :src="selected" alt="First slide">
    </div>
    <div v-if="imgs" class="slide-row text-center">
      <img v-for="(img, index) in imgs" :key="index" 
        @mouseover="onSelected(img)"
        class=" slide-row-img" 
        :src="img" alt="First slide">
    </div>
  </div>
</div>
</template>

<script>
export default {
    props: ["initialImgs"],
    data() {
        return {
            selected: "",
            imgs: []
        };
    },
    methods: {
        onSelected(img) {
            this.selected = img;
        },
        getSelected() {
            return this.selected;
        }
    },
    created() {
        this.imgs = JSON.parse(this.initialImgs);
        this.selected = this.imgs[0];
    }
};
</script>

<style lang="scss" scoped>
.slide-row-img {
    max-width: 33.3%;
    border: 4px solid white;
    &:hover {
        border: 2px solid white;
    }
}
</style>

