<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Blogs</div>

                    <div class="panel-body">
                        <div class="row">
                            <list-blogs :mblogs="blogs"></list-blogs>
                            <add-blog v-on:added="added()"></add-blog>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                blogs: []
            }
        },

        mounted() {
            this.getBlogs();
        },

        methods: {
            getBlogs: function () {
                axios.get('/api/blogs').then(response => {
                    this.blogs = response.data;
                });
            },

            added: function() {
                this.getBlogs();
            }
        }
    }
</script>
