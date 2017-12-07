<template>
<div class ="container">
    <form action="#" onsubmit="bindingBody()">
        <div class="form-group">
            <label for="postTitle">Post Title</label>
            <input type="text" class="form-control" name="postTitle" id="postTitle" placeholder="Enter post title">
        </div>
        <div class="form-group">
            <label for="postBody">Post Text</label>
            <input name="postBody" type="hidden">
            <div>
                <quill-editor v-model="content"
                            ref="myQuillEditor"
                            :options="editorOption"
                            @blur="onEditorBlur($event)"
                            @focus="onEditorFocus($event)"
                            @ready="onEditorReady($event)">
                </quill-editor>
            </div>
        </div>
        <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Submit</button>
    </form>
</div>
</template>

<script>
    import Quill from 'quill'
    export default {
        data () {
            return {
                content: '<h2>I am Example</h2>',
                posts: {
                    title: '',
                    body: '',
                },
            }
        },
        methods: {
            onEditorBlur(quill) {
                console.log('editor blur!', quill)
            },
            onEditorFocus(quill) {
                console.log('editor focus!', quill)
            },
            onEditorReady(quill) {
                console.log('editor ready!', quill)
            },
            onEditorChange({ quill, html, text }) {
                console.log('editor change!', quill, html, text)
                this.content = html
            }
        },

        computed: {
            editor() {
                return this.$refs.myQuillEditor.quill
            }
        },

        mounted() {
            console.log('this is current quill instance object', this.editor)
        }
    }
</script>
