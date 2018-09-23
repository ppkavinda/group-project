<template>
    <div class="card mt-3">
        <div v-if="post.title" class="card-header text-center">
            <h3>{{ post.title | capitalize }}</h3>
        </div>
        <div class="card-body">
            <p class="card-text">
                <froalaView v-model="post.body"/>
            </p>
        </div>
    </div>
</template>

<script>
import VueFroala from 'vue-froala-wysiwyg';
import axios from 'axios'

export default {
    name: 'post-viewer',
    props: ['postId'],
    data: function () {
        return {
            post: {},
        }
    },
    mounted: function () {
        /**
         * getting post details according to the postId
         * and assign it to the post data
         */
        axios.get('/posts/get/' + this.postId)
        .then(res => {
            this.post = res.data
        })
        .catch (err => {
            console.log(err)
        })
    },
    filters: {
        /**
         * capitalize the first letter of a sentence
         */
        capitalize: function (value) {
            if (!value) return ''
            value = value.toString()
            return value.charAt(0).toUpperCase() + value.slice(1)
        }
    }
}
</script>
