<template>
    <Head title="Add Post" />
    <AdminLayout>
        <form @submit.prevent="form.post(route('post.store'))">
            <div class="mb-3">
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
            <div class="mb-3">
                <label for="title" class="form-label"
                    >Select Catogory<span class="text-danger">*</span></label
                >
                <Multiselect
                    v-model="form.categories"
                    mode="multiple"
                    :close-on-select="false"
                    :options="category"
                />
            </div>
            <div class="mb-3">
                <label class="form-label"
                    >Upload Image<span class="text-danger">*</span></label
                >
                <br />
                <input
                    type="file"
                    @input="form.image = $event.target.files[0]"
                />
                <div v-if="errors.image" class="text-red-600">
                    {{ errors.image }}
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
            <div class="mb-3">
                <input
                    v-model="form.isPublished"
                    type="checkbox"
                    class="form-label"
                    id="isPublished"
                />
                <label class="form-label" for="isPublished"
                    >Publish the post</label
                >
            </div>
            <div>
                <button
                    type="submit"
                    class="inline-block px-2 py-2 bg-blue-500 text-white rounded my-2"
                >
                    Save Post
                </button>
                <Link class="nav-link" :href="route('post.index')">Cancel</Link>
            </div>
        </form>
    </AdminLayout>
</template>

<script>
import AdminLayout from "../../Layouts/Admin";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import Multiselect from "@vueform/multiselect";
export default {
    components: {
        AdminLayout,
        Head,
        Link,
        useForm,
        Multiselect,
    },
    props: {
        errors: Object,
        category: Object,
    },

    setup() {
        const form = useForm({
            title: "",
            description: "",
            isPublished: false,
            image: null,
            categories: null,
        });

        return { form };
    },
};
</script>

<style src="@vueform/multiselect/themes/default.css"></style>
