<template>
    <Head title="All Post" />
    <AdminLayout>
        <table class="table table-bordered table-condensed">
            <thead>
                <tr>
                    <td>Title</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tr v-for="post in data.data">
                <td>{{ post.title }}</td>
                <td width="130">
                    <!-- <button @click="edit(row)" class="btn btn-sm btn-primary">Edit</button> -->
                    <button
                        @click="deletePost(post.id)"
                        class="btn btn-sm btn-danger"
                    >
                        Del
                    </button>
                    <button @click="show(post)" class="btn btn-sm btn-danger">
                        Show
                    </button>
                    <Link
                        :href="route('post.edit', post.id)"
                        class="btn btn-sm btn-danger"
                    >
                        Edit
                    </Link>
                </td>
            </tr>
        </table>

        <Pagination class="mt-6" :links="data.links" />
    </AdminLayout>
</template>
<script>
import AdminLayout from "../../Layouts/Admin";
import Pagination from "@/Components/Pagination";
import { Head, Link } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";

export default {
    components: {
        AdminLayout,
        Pagination,
        Head,
        Link,
    },
    props: {
        data: Object,
    },

    methods: {
        deletePost: function (id) {
            if (confirm("Are you sure?")) {
                Inertia.delete(this.route("post.destroy", id));
            }
        },
        show: function (data) {
            this.$inertia.get(this.route("post.show", data));
        },
    },
};
</script>
