<template>
    <div class="one col-lg-4 col-md-6 col-12 mb-3">
        <img class="img-fluid" :src="getImage(post.image)" alt="" />
        <div class="text w-75 h-50 text-light p-4">
            <h6>{{ post.title }}</h6>
            <Link class="link" :href="route('blog', post.id)">Read more</Link>
        </div>
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

<style>
.featured .row .one {
    height: 300px;
}
.featured .row .one img {
    height: 100%;
    width: 100%;
    background-size: cover;
    box-sizing: border-box;
    object-fit: cover;
}
.featured .row .one .text {
    background-color: rgba(0, 0, 0, 0.5);
    height: 100%;
    width: 100%;
    position: absolute;
    bottom: 0;
}

.featured .row .one a {
    text-decoration: none;
    border-style: none;
    color: white;
    font-size: 0.9rem;
}

.featured .row .one a::after {
    content: "";
    display: block;
    width: 30%;
    height: 2px;
    background: #2ecc71;
}
</style>
