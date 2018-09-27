<template>
<div>
    <div class="card bg-light p-3">
        <form @submit.prevent>
            <div class="form-group">
                <textarea @keypress="clearError('body')" v-model="comment.body" class="form-control" name="body" rows="3" placeholder="Type your question here..." required></textarea>
                <small v-if="errors.body" class="form-text invalid-feedback d-block">{{ errors.body[0] }}</small>

            </div>
            <div class="form-group">
                <button @click="addComment" class="btn" :class="commentButton.class" type="submit">{{ commentButton.msg }}</button>
            </div>
        </form>
    </div>
    <hr>
    <h4 v-if="!comments.length" class="m-3">No comments posted yet. Be the first one to add one.</h4>
    <h5 v-else class="my-3">Comments</h5>
    <comment v-for="comment in comments" v-if="!comment.parent_id" :reply="true" :initialChildren="getChildren(comment.id)" :key="comment.id" :comment="comment"></comment>
</div>
</template>

<script>
import comment from './Comment'
import axios from 'axios'

export default {
    props: ['initialComments', 'postId'],
    components: {comment},

    data: function () {
        return {
            comments: [], // all previous the comments
            comment: { // new comment [at comment box]
                body: '',
                parend_id: 0,
            },
            commentButton: {
                class: 'btn-primary',
                msg: 'Add Comment',
            },
            errors: {
                body: [],
            },
        }
    },
    methods: {
        /**
         * posting the comment
         */
        addComment: function () {
            axios.post('/comments/' + this.postId, this.comment)
                .then(res => {
                    // successfully sent comment to the server
                    this.comments.unshift(res.data[0])
                    this.comment.body = ''
                    this.commentButton.class = 'btn-success'
                    this.commentButton.msg = 'Done !'
                    setTimeout(() => {
                        this.commentButton.class = 'btn-primary',
                        this.commentButton.msg = 'Add Another Comment'
                    }, 2000);

                    console.log(res.data)
                })
                .catch(err => {
                    this.errors = err.response.data.errors
                    console.log(err.response.data.errors)
            })
        },
        /**
         * returning the children comments of a particular comment
         */
        getChildren: function (parent_id) {
            return this.comments.filter(child => parent_id == child.parent_id)
        },
        /**
         * clear the error when user starts to type
         */
        clearError: function (field) {
            this.errors[field] = []
        }
    },
    mounted: function () {
        // initialize comments with initialComments prop
        this.comments = JSON.parse(this.initialComments)
    }
    
}
</script>
