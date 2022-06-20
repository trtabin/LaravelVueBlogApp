<template>
    <div class="post1 col-lg-6 col-md-6 col-12 mb-4">
        <img class="img-fluid pb-3" src="images/6.jpg" alt="" />
        <h3>{{ post.title }}</h3>
        <p>
            {{ post.description }}
        </p>
        <Link :href="route('blog', post.id)"> Read more</Link>
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
};
</script>
