<template>
    <Head title="All Category" />
    <AdminLayout>
        <table class="table table-bordered table-condensed">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td></td>
                </tr>
            </thead>
            <tr v-for="category in data.data">
                <td>{{ category.id }}</td>
                <td>{{ category.name }}</td>
                <td>
                    <Link
                        :href="route('category.edit', category.id)"
                        class="btn btn-sm btn-primary"
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
};
</script>
