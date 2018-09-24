<template>
    <div>
    <div class="row">
        <div class="col-md-9 bg-light p-2">
            <div class="form-group">
                <input @keypress="clearError('title')" v-model="post.title" type="text" id="postTitle" class="form-control" name="title" placeholder="Enter the Title">

                <span v-if="errors.title" :class="{'invalid-feedback d-block' : errors.title}">
                    <strong>{{ errors.title[0] }}</strong>
                </span>
            </div>
            
            <div class="form-group">
                <froala :tag="'textarea'" :config="config" v-model="post.body"></froala>
                <span v-if="errors.body" :class="{'invalid-feedback d-block' : errors.body}">
                    <strong>{{ errors.body[0] }}</strong>
                </span>
            </div>
        </div>
        <div class="col-md-3 pl-4">
            <div class="card bg-light p-2">
                <div class="card-header bg-light">
                    <strong>Publish</strong>
                    <button @click="publish" class="btn ml-4" :class="publishButton.class">{{ publishButton.msg }}</button>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="form-group">
                            <label class="col-form-label" for="courseId">Course:</label>
                            <!-- <div class="col-sm-10"> -->
                                <select @click="clearError('course_id')" v-model="post.course_id" class="form-control" name="course_id">
                                    <option value="0">Please select the course --</option>
                                    <option v-for="course in courses" :value="course.id" :key="course.id">{{ course.title }}</option>
                                </select>
                            <!-- </div> -->
                            <span v-if="errors.course_id" :class="{'invalid-feedback d-block' : errors.course_id}">
                                <strong>{{ errors.course_id[0] }}</strong>
                            </span>
                        </div>
                    </li>
                    <li v-if="post.id" class="list-group-item">
                        <div class="form-group">
                            See the saved post: <a class="btn-link" target="blank" :href="'/posts/' + post.id">In Here</a>
                        </div>
                    </li>
                </ul>
                <div class="form-group">
                    <button class="btn btn-block mb-2" :class="saveButton.class" @click="save">{{ saveButton.msg }}</button>
                    <small v-if="post.id" class="text-muted">Last modified at {{ post.updated_at | duration('humanize') }} ago</small>
                </div>
            </div>
        </div>

    </div>
    <hr>

    <h3>Preview</h3>
    <post-viewer :post="post"/>
    </div>
</template>

<script>
import VueFroala from 'vue-froala-wysiwyg';
import axios from 'axios'

export default {
    props: {
        postId: {
            required: false,
        }
    },
    name: 'post-editor',
    data () {
        return {
            config: {
                events: {
                    'froalaEditor.image.removed':  (e, editor, $img) => {
                        this.deleteImage($img.attr('src'))
                    },
                    'froalaEditor.focus': (e, editor, target) => {
                        this.clearError('body')
                    } 
                },
                heightMin: 600,
                // Set the image upload parameter.
                imageUploadParam: 'image',

                // Set the image upload URL.
                imageUploadURL: '/posts/image',

                // Additional upload params.
                imageUploadParams: {_token: document.head.querySelector('meta[name="csrf-token"]').content},

                // Set request type.
                imageUploadMethod: 'POST',

                // Set max image size to 5MB.
                imageMaxSize: 2 * 1024 * 1024,

                // Allow to upload PNG and JPG.
                imageAllowedTypes: ['jpeg', 'jpg', 'png']
            },
            post: {
                title: 'asd fasdf a',
                course_id: 2,
                body: 'asdf asdfa sdfasdf sdfaf sdf dsf asdf sdfa sf sf',
                id: 0,
                published: false,
                updated_at: '',
            },
            errors: {
                title: [],
                course_id: [],
                body: [],
            },
            courses: [],
            saveButton: {
                class: 'btn-default',
                msg: 'Save',
            },
            publishButton: {
                class: 'btn-primary',
                msg: 'Publish now',
            }
        }
    },
    methods: {
        /**
         * publish the post
         */
        publish: async function () {
            if (! this.post.published) {
                await this.save()
                axios.post('/posts/publish', {post: this.post.id})
                    .then(res => {
                        this.post.published = true
                        this.publishButton.class = 'btn-success'
                        this.publishButton.msg = 'published !'

                        setTimeout(() => {
                            this.publishButton.class = 'btn-link text-danger'
                            this.publishButton.msg = 'unpublish'
                        }, 1000);
                        console.log('published')
                    })
            } else {
                axios.post('/posts/unpublish', {post: this.post.id})
                    .then(res => {
                        this.post.published = false
                        this.publishButton.class = 'btn-success'
                        this.publishButton.msg = 'unpublished !'

                        setTimeout(() => {
                            this.publishButton.class = 'btn-primary'
                            this.publishButton.msg = 'publish'
                        }, 1000);
                        console.log('unpublished')
                    })
            }
        },
        /**
         * save the post
         */
        save: async function () {
            // validating the inputs
            if (this.validate()) {
                // if the post is already saved
                if (this.post.id != 0) {
                    // update the post
                    axios.put('/posts/' + this.post.id, this.post)
                        .then( res => {
                            console.log('updated')
                            this.saveButton.class = 'btn-success'
                            this.saveButton.msg = 'saved !'
                            this.post.updated_at = res.data.updated_at
                            setTimeout(() => {
                                this.saveButton.class = 'btn-default'
                                this.saveButton.msg = 'save'
                            }, 1000);
                        })
                        .catch( err => {
                            console.log(err)
                        })
                } else {
                    // if the post is not saved
                    // await because publish() should have this.post.id to be an non-0 val
                    var response = await axios.post('/posts', this.post)
                    console.log(response)
                    this.post.id = await response.data.id
                    this.post.updated_at = response.data.updated_at
                    this.saveButton.class = 'btn-success'
                    this.saveButton.msg = 'saved !'
                    this.post.updated_at = response.data.updated_at
                    setTimeout(() => {
                        this.saveButton.class = 'btn-default'
                        this.saveButton.msg = 'save'
                    }, 1000);
                }
            }
        },
        /**
         * validate the fields before submit it
         */
        validate: function () {
            if (this.post.title == '') {
                this.errors.title = ['Please enter a title.']
                return false
            }
            if (this.post.course_id == 0 | this.post.course_id == '0') {
                this.errors.course_id = ['Please select a course']
                return false
            }
            if (this.post.body == '') {
                this.errors.body = ['Post is too short.']
                return false
            }
            return true
        },
        /**
         * clear the error once the user starts to type
         */
        clearError: function (field) {
            this.errors[field] = []
        },
        /**
         * delete image from server when it delete from the post
         */
        deleteImage: function (img) {
            axios.delete('/posts/image', {data: {image: img}})
                .then(res => console.log(img))
                .catch( error => console.log(error))
        }
    },
    /**
     * get courses list
     * to fill the courses option box
     */
    mounted: function () {
        // if (this.dataPost) {
        //     this.post = this.dataPost
        // }
        axios.get('/api/courses')
            .then( res => {
                this.courses = res.data
            })
        axios.get('/api/posts', { params: {
            post: this.postId
        }})
            .then( res => {
                this.post = res.data
            })
        if (this.post.published) {
            this.publishButton.clss = 'btn-default'
            this.publishButton.msg = 'unpublish'
        }
    },
}
</script>