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

            <!-- publish -->
            <div class="card bg-light p-2 mb-3">
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
                    <small v-if="post.id" class="text-muted">Last modified {{ post.updated_at | moment("calendar") }}</small>
                </div>
            </div>
            <!-- featured image -->
            <div class="card bg-light p-2">
                <div class="card-header bg-light">
                    <strong>Cover Image</strong>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="form-group text-center">
                            <img :src="post.cover_img" :alt="post.title" class="img-fluid">
                            <form action="POST">
                                <image-upload @loaded="onCoverLoaded"></image-upload>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <hr>
    <!-- collapsing preview panel -->
    <div class="accordion" id="accordionExample">
        <div class="card-header" id="headingOne">
        <h5 class="mb-0">
            <button class="btn btn-link dropdown-toggle" type="button" data-toggle="collapse" 
                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Show a Preview 
            </button>
        </h5>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
            <post-viewer :initial-post="JSON.stringify(post)"/>
        </div>
        </div>
    </div>
    <!-- end preview -->
    </div>
</template>

<script>
import VueFroala from 'vue-froala-wysiwyg';
import ImageUpload from './ImageUpload.vue';

export default {
    props: {
        initialPost: {
            required: false,
            type: String,
        },
    },
    components: {ImageUpload},
    name: 'post-editor',
    data () {
        return {
            // [for editor]
            config: {
                events: {
                    // send signal to delete the image from server
                    'froalaEditor.image.removed':  (e, editor, $img) => {
                        this.deleteImage($img.attr('src'))
                    },
                    // when focus the editor
                    // clear the errors message
                    'froalaEditor.focus': (e, editor, target) => {
                        this.clearError('body')
                    } 
                },
                heightMin: 600,
                // Set the image upload parameter.
                imageUploadParam: 'image',

                // Set the image upload URL.
                imageUploadURL: '/posts/image',

                // sending csrf-token with the upload image request
                imageUploadParams: {_token: document.head.querySelector('meta[name="csrf-token"]').content},

                // Set request type.
                imageUploadMethod: 'POST',

                // Set max image size to 2MB.
                imageMaxSize: 2 * 1024 * 1024,

                // Allow to upload PNG and JPG.
                imageAllowedTypes: ['jpeg', 'jpg', 'png']
            },
            post: {
                title: '',
                course_id: 0,
                body: '',
                id: 0,
                cover_img: '',
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
         * handling the upload cover image
         */
        onCoverLoaded (cover) {
            this.post.cover_img = cover.src
            this.persistCover(cover.file)
        },
        /**
         * saving the loaded cover image
         */
        persistCover (cover) {
            let data = new FormData();
            data.append('cover', cover)
            axios.post(`/posts/${this.post.id}/cover`, data)
                .then(res => console.log(res))
                .catch(err => console.log(err))
        },
        /**
         * toggle publish a post
         */
        publish: async function () {
            // if not published
            if (! this.post.published) {
                // first save the post
                await this.save()
                // then set publish status
                axios.post('/posts/publish', {post: this.post.id})
                    .then(res => {
                        this.post.published = true
                        this.publishButton.class = 'btn-success'
                        this.publishButton.msg = 'published !'

                        setTimeout(() => {
                            this.publishButton.class = 'link text-danger'
                            this.publishButton.msg = 'unpublish'
                        }, 1000);
                        console.log('published')
                    })
            } else {
                // if already published
                // then un-set publish the post
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
                    // await: because publish() should have this.post.id to be an non-0 val
                    var response = await axios.post('/posts', this.post)
                    console.log(response)
                    this.post.id = await response.data.id
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
    mounted: function () {
        /**
         * get courses list
         * to fill the courses option box
         */
        axios.get('/api/courses')
        .then( res => {
            this.courses = res.data
        })

        /**
         * [when updating an post]
         * if initialPost prop is assigned (which means: updating an post)
         * assign this.post to initialPost
         */
        if (this.initialPost) {
            this.post = JSON.parse(this.initialPost)
        }
        /**
         * [when updating an post]
         * if the existing post is published set publish button styles
         */
        if (this.post.published) {
            this.publishButton.class = 'link text-danger'
            this.publishButton.msg = 'unpublish'
        }
    },
}
</script>