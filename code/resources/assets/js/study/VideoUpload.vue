<template>
<div class="col-md-12">
<form class="col-md-12" method="POST" action="/videos/upload" enctype="multipart/form-data">
    <div class="form-group row">
        <label class="col-form-label col-md-2">Title </label>
        <input class="form-control col-md-10" type="text" v-model="formData.title" @keypress="clearError('title')" required>
        <span v-if="errors.title" class="invalid-feedback offset-md-2 d-block" role="alert">
            <strong>{{ errors.title[0] }}</strong>
        </span>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-2">Select Video </label>
        <div class="custom-file col-md-10">
            <label class="custom-file-label" for="customFile">Choose Video</label>
            <input type="file" name="video" accept="video/*" class="custom-file-input" id="customFile" @change="onVideoLoaded" :disabled="loading">
        </div>
        <small id="passwordHelpBlock" class="col-md-10 offset-md-2 form-text text-muted">
            Max file size : 100M
        </small>
        <span v-if="errors.video" class="offset-md-2 invalid-feedback d-block" role="alert">
            <strong>{{ errors.video[0] }}</strong>
        </span>
    </div>
    <div class="form-group row">
        <label for="course" class="col-form-label col-md-2">Select Course </label>
        <select v-model="formData.course_id" id="course" class="col-md-10 custom-select" @click="clearError('course_id')" :disabled="loading">
            <option value="0">Select one...</option>
            <option v-for="course in courses" :key="course.id" :value="course.id" v-text="course.title"></option>
        </select>
        <span v-if="errors.course_id" class="invalid-feedback offset-md-2 d-block" role="alert">
            <strong>{{ errors.course_id[0] }}</strong>
        </span>
    </div>
    <div class="form-group row">
        <label for="exampleFormControlTextarea1" class="col-md-2">Description</label>
        <textarea class="form-control col-md-10" 
            id="exampleFormControlTextarea1" rows="3" 
            v-model="formData.description" 
            @keypress="clearError('description')" 
            :disabled="loading"></textarea>
        <span v-if="errors.description" class="offset-md-2 invalid-feedback d-block" role="alert">
            <strong>{{ errors.description[0] }}</strong>
        </span>
    </div>
    <div class="form-group row">
        <button class="col-md-2 offset-md-2 btn" 
            :class="submitButton.class" type="submit"
            @click.prevent="submitForm" 
            v-text="submitButton.msg" :disabled="loading">
        </button>
        <sync-loader :loading="loading" color="lightblue" class="ml-3"></sync-loader>
    </div>
</form>
    </div>
</template>

<script>
import { SyncLoader } from 'vue-spinner/dist/vue-spinner.min.js'

export default {
    name: 'VideoUpload',
    components: {SyncLoader},
    data () {
        return {
            loading: false,
            courses: [],
            formData: {
                title: '',
                description: '',
                video: {},
                course_id: 0
            },
            errors: {
                title: [],
                video: [],
                course_id: [],
                description: []
            },
            submitButton: {
                msg: 'Upload',
                class: 'btn-primary',
            }
        }
    },
    methods: {
        submitForm () {
            if (!this.validate()) {
                return
            }

            let data = new FormData();
            data.append('video', this.formData.video.file)
            data.append('course_id', this.formData.course_id)
            data.append('title', this.formData.title)
            data.append('description', this.formData.description)

            this.loading = true
            axios.post('/videos/upload', data)
                .then(res => {
                    this.loading = false
                    this.submitButton.class = 'btn-success'
                    this.submitButton.msg = 'Uploaded!'
                    this.formData = {
                        title: '',
                        description: '',
                        video: {},
                        course_id: 0
                    }
            
                    setTimeout(() => {
                        this.submitButton.class = 'btn-primary'
                        this.submitButton.msg = 'Upload'
                    }, 2000);
                    // console.log(res)
                }).catch(err => {
                    this.loading = false
                    console.log(err)
                })
        },
        onVideoLoaded (e) {
            if (! e.target.files.length) return
            this.clearError('video')

            let file = e.target.files[0]
            let size = file.size /1024/1024

            if (size > 99) {
                this.errors.video = ['Too large File! Please select a smaller one.']
                return 
            }

            let reader = new FileReader()
            reader.readAsDataURL(file)

            reader.onload = e => {
                let src = e.target.result
                this.formData.video = {src, file}
                // console.log(this.formData.video)
            }
        },
        clearError (field) {
            this.errors[field] = []
        },
        validate () {
            if (!this.formData.title) {
                this.errors.title = ['Title is required']
                return false
            }
            if (!this.formData.video) {
                this.errors.video = ['Please select a video']
                return false
            }
            if (!this.formData.course_id) {
                this.errors.course_id = ['Please select a course']
                return
            }
            if (!this.formData.description) {
                this.errors.description = ['Description is required']
                return false
            }
            return true
        }
    },
    mounted () {
        /**
         * get courses list
         * to fill the courses option box
         */
        axios.get('/api/courses')
        .then( res => {
            this.courses = res.data
        })
    }

}
</script>
