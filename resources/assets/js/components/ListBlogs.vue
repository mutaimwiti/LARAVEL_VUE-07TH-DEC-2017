<template>
    <div class="col-md-8">
        <div class="panel">
            <div class="panel-heading">Blogs</div>
            <div class="panel-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Title</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="blog in mblogs">
                        <td>{{ blog.title }}</td>
                        <td>{{ blog.body }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['mblogs'],

        mounted() {

        }
    }
</script>
