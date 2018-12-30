<template>
<span>
    <input type="file" name="img" id="file" accept="image/*" class="inputfile" @change="onChange"/>
    <label for="file" class="mt-3">Choose a file</label>
</span>
</template>

<script>
export default {
    methods: {
        /**
         * reads the image file & emit 'loaded' event when loaded it
         * catch it in other component
         * emits -> src, file
         * src: blog url for preview purposes
         * file: actuall file for upload
         * 
         */
        onChange (e) {
            if (! e.target.files.length) return

            let file = e.target.files[0]
            let reader = new FileReader()

            reader.readAsDataURL(file)

            reader.onload = e => {
                let src = e.target.result

                this.$emit('loaded', {src, file})
            }
        }
    }
}
</script>

<style scoped>
.inputfile {
	width: 0.1px;
	height: 0.1px;
	opacity: 0;
	overflow: hidden;
	position: absolute;
	z-index: -1;
}
</style>
