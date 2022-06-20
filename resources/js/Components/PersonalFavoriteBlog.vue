<template>
    <div class="sideimg col-lg-4 col-md-4 col-4">
        <img
            v-if="post.image"
            class="img-fluid"
            :src="getImage(post.image)"
            alt=""
        />
    </div>
    <div class="sidetext col-lg-8 col-md-8 col-8">
        <h4>{{ post.title }}</h4>
        <Link :href="route('blog', post.id)">Read more</Link>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        Link,
    },
    props: {
        post: Object,
    },
    methods: {
        getImage(pic) {
            return "/images/" + pic;
        },
    },
};
</script>
