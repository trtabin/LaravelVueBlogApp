<template>
    <Head title="Edit Post" />
    <AdminLayout>
        <form @submit.prevent="form.put(route('post.update', form.id))">
            <div>
                <label for="title" class="form-label"
                    >Title<span class="text-danger">*</span></label
                >
                <input
                    v-model="form.title"
                    type="text"
                    class="form-control"
                    id="title"
                    placeholder="Enter Post Title"
                />
                <div v-if="errors.title" class="text-red-600">
                    {{ errors.title }}
                </div>
            </div>
            <div>
                <label for="description" class="form-label"
                    >Description<span class="text-danger">*</span></label
                >
                <textarea
                    v-model="form.description"
                    type="text"
                    class="form-control"
                    id="description"
                    aria-describedby="emailHelp"
                    placeholder="Enter Post Title"
                />
                <div v-if="errors.description" class="text-red-600">
                    {{ errors.description }}
                </div>
            </div>
            <div>
                <button
                    type="submit"
                    class="inline-block px-2 py-2 bg-blue-500 text-white rounded my-2"
                >
                    Edit Post
                </button>
                <Link class="nav-link" :href="route('post.index')">Cancel</Link>
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
        post: Object,
        errors: Object,
    },

    setup(props) {
        const form = useForm(props.post);
        return { form };
    },
};
</script>
