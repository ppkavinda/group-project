<template>
<div class="card my-3 bg-light">
    <div class="card-body">
        <button @click="deleteComment(comment)" v-if="authorized" type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button> 
        <img class="float-left mr-3" :src="comment.user.profile_pic" alt="avatar" width="50px">
        <span class="card-title">
            <a class="font-weight-bold text-capitalize" :href="'/profile/' +  comment.user.id">{{ comment.user.name }}</a>
            <small class="font-weight-light">{{ comment.created_at | moment('calendar') }}</small>
        </span>
        <p class="card-text blockquote">{{ comment.body }}</p>

        <comment @deleted="deleteSubComment" v-for="(child, i) in children" :key="i" :reply="false" :comment="child"></comment>

        <a v-if="reply" href="#" @click.prevent="toggleReply" class="link link-primary btn-link"><small>{{ replyButton.msg }}</small></a>
        <!-- add comment form -->
        <div v-if="replyButton.show && reply" class="card bg-light p-3 m-3">
            <form @submit.prevent>
                <div class="form-group">
                    <textarea @keypress="clearError('body')" v-model="newComment.body" class="form-control" name="body" rows="3" 
                        placeholder="Type your question here..." required>
                    </textarea>
                    <small v-if="errors.body" class="form-text invalid-feedback d-block">{{ errors.body[0] }}</small>
                </div>
                <div class="form-group">
                    <button @click="addComment" class="btn" :class="commentButton.class" type="submit">{{ commentButton.msg }}</button>
                </div>
            </form>
        </div>
        <!-- end add comment form -->
    </div>
</div>
</template>

<script>
import axios from 'axios'

export default {
    name: 'comment',
    props: {
        comment: Object,
        initialChildren: {
            required: false,
            type: Array,
            default: Array
        },
        reply: Boolean,
        required: true,
    },

    data: function () {
        return {
            newComment: {
                body: '',
                parent_id: this.comment.id,
            },
            children: this.initialChildren,
            commentButton: {
                class: 'btn-primary',
                msg: 'Add Comment',
            },
            replyButton: {
                show: false,
                msg: 'Reply'
            },
            errors: {
                body: [],
            },
        }
    },
    methods: {
        /**
         * delete a comment
         */
        deleteComment (node) {
            this.$emit('deleted', node)
        },
        deleteSubComment (node) {
            axios.delete(`/comments/${node.id}`)
                .then( res => {
                    this.children.splice(this.children.indexOf(node), 1);
                })
                .catch(err => {
                    console.log(err)
            })
        },
        /**
         * add a reply
         */
        addComment: function () {
            // if comment is longer than 4 chars [client validation]
            if (this.comment.body.length > 4) {
                axios.post('/comments/' + this.comment.post_id, this.newComment)
                    .then(res => {
                        // comment sent to the server successfully
                        this.children.push(res.data)
                        this.newComment.body = ''
                        this.toggleReply()
                    }).catch(err => {
                        console.log(err, err)
                        this.errors = err.response.data.errors

                        // this.errors = err.response.data.errors
                })
            }
        },
        /**
         * toggling the reply form
         */
        toggleReply: function () {
            this.replyButton.show = !this.replyButton.show
            this.replyButton.msg = (this.replyButton.show) ? 'Cancel' : 'Reply'
        },
        /**
         * clearing the error message when user starts to type
         */
        clearError: function (field) {
            this.errors[field] = []
        }
    },
    computed: {
        /**
         * determine weather the user authorized or not to delete comment
         */
        authorized () {
            return this.comment.user_id == window.App.user.id;
        },

    },
    mounted () {
        // testing purposes
        // console.log('children', this.comment.id, this.children)
    }
}
</script>
