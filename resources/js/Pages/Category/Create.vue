<template>
    <Head title="Add Category" />
    <AdminLayout>
        <form @submit.prevent="form.post(route('category.store'))">
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
                    Save Category
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
        errors: Object,
    },

    setup() {
        const form = useForm({
            name: "",
        });

        return { form };
    },
};
</script>
