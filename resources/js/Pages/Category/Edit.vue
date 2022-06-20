<template>
    <Head title="Edit Category" />
    <AdminLayout>
        <form @submit.prevent="form.put(route('category.update', form.id))">
            <div>
                <label for="title" class="form-label"
                    >Name<span class="text-danger">*</span></label
                >
                <input
                    v-model="form.name"
                    type="text"
                    class="form-control"
                    id="title"
                    placeholder="Enter Category Name"
                />
                <div v-if="errors.name" class="text-red-600">
                    {{ errors.name }}
                </div>
            </div>
            <div>
                <button
                    type="submit"
                    class="inline-block px-2 py-2 bg-blue-500 text-white rounded my-2"
                >
                    Edit Category
                </button>
                <Link class="nav-link" :href="route('category.index')"
                    >Cancel</Link
                >
            </div>
        </form>
    </AdminLayout>
</template>

<script>
import AdminLayout from "../../Layouts/Admin";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
export default {
    components: {
        AdminLayout,
        Head,
        Link,
        useForm,
    },
    props: {
        category: Object,
        errors: Object,
    },

    setup(props) {
        const form = useForm(props.category);
        return { form };
    },
};
</script>
