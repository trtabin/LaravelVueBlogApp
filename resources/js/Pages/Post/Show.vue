<template>
    <AdminLayout>
        <table class="table table-bordered table-condensed">
            <thead>
                <tr>
                    <td>Title</td>
                    <td>Description</td>
                </tr>
            </thead>
            <tr>
                <td>{{ post.title }}</td>
                <td>{{ post.description }}</td>
            </tr>
        </table>
    </AdminLayout>
</template>

<script>
import AdminLayout from "../../Layouts/Admin";

export default {
    components: {
        AdminLayout,
    },
    props: ["post"],
};
</script>
