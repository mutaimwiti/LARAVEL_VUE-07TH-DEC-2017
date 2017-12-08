<template>
    <div class="col-md-4">
        <div class="panel">
            <div class="panel-heading">Add Blog</div>
            <div class="panel-body">
                <form class="form" v-on:submit.prevent="add">
                    <div class="form-group">
                        <label class="control-label">Title</label>
                        <input class="form-control" v-model.trim="title" type="text" required/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Title</label>
                        <textarea class="form-control" v-model.trim="body" required></textarea>
                    </div>
                    <div class="form-group pull-right">
                        <input class="btn btn-primary" type="reset" value="Clear"/>
                        <input class="btn btn-primary" type="submit" value="Add"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                title: '',
                body: ''
            }
        },

        methods: {
            add(){
                axios.post('/api/blogs', {title: this.title, body: this.body}).then(response => {
                    this.$emit('added', {title: this.title, body: this.body});
                    this.title = '';
                    this.body = '';
                });
            },


        }
    }
</script>
