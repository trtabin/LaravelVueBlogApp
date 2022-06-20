<template>
    <Head title="All Post" />
    <AdminLayout>
        <table class="table table-bordered table-condensed">
            <thead>
                <tr>
                    <td>Title</td>
                    <td>Status</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </thead>
            <tr v-for="post in data.data">
                <td class="w-50">{{ post.title }}</td>
                <td>{{ post.isPublished ? "Published" : "Not Published" }}</td>
                <td>
                    <button @click="show(post)" class="btn btn-sm btn-primary">
                        Preview
                    </button>
                </td>
                <td>
                    <Link
                        :href="route('post.edit', post.id)"
                        class="btn btn-sm btn-secondary"
                    >
                        Edit
                    </Link>
                </td>
                <td>
                    <button
                        @click="deletePost(post.id)"
                        class="btn btn-sm btn-danger"
                    >
                        Delete
                    </button>
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
            this.$inertia.get(this.route("blog", data));
        },
    },
};
</script>
