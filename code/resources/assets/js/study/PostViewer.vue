<template>
    <div class="card mt-3">
        <div v-if="post.title" class="card-header text-center">
            <h3>
                <a v-if="user.id == post.user_id" class="text-dark" :href="'/posts/' + post.id + '/edit'">
                    <span>{{ post.title | capitalize }}</span>
                    
                    <small class="pull-right p-1" style="font-size:.6em;"><i class="fa fa-pencil"></i> Edit</small>
                </a>
                <span v-else>{{ post.title | capitalize }}</span>
            </h3>
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
    props: {initialPost: String},
    data: function () {
        return {
            user: {},
        }
    },
    computed: {
        /**
         * convert initialPost [jsonString] to JSON object
         */
        post: function () {
            return JSON.parse(this.initialPost)
        },
    },
    mounted: function () {
        /**
         * get the authenticated user
         * to set the visibility of the edit button (only to author)
         */
        axios.get('/user')
            .then(res => this.user = res.data)
            .catch(err => console.log(err))
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
