<template>
    <div
        style="background-image: url('images/background.jpg')"
        class="back jumbotron text-center"
    >
        <h1 class="text-white text-uppercase pt-5">Blog App</h1>
    </div>

    <Navbar />

    <FeatureBlog />

    <section class="blog container my-6">
        <div class="row">
            <div class="post row col-lg-8 col-md-8 col-12">
                <BlogItem v-for="post in data.data" :post="post" />
            </div>

            <div class="sidebar col-lg-4 col-md-4 col-12">
                <div class="side">
                    <h4>My Personal favorites</h4>
                    <hr class="w-50" />
                    <div v-for="post in data.data" class="row pb-3">
                        <div class="sideimg col-lg-4 col-md-4 col-4">
                            <img class="img-fluid" src="images/1.jpg" alt="" />
                        </div>
                        <div class="sidetext col-lg-8 col-md-8 col-8">
                            <h4>{{ post.title }}</h4>
                            <a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Pagination class="mt-6" :links="data.links" />
    </section>

    <Footer />
</template>

<script>
import Footer from "@/Components/Footer.vue";
import Navbar from "@/Components/Navbar.vue";
import FeatureBlog from "@/Components/FeatureBlog.vue";
import BlogItem from "@/Components/BlogItem.vue";
import Pagination from "@/Components/Pagination";

export default {
    components: {
        Footer,
        Navbar,
        FeatureBlog,
        BlogItem,
        Pagination,
    },
    props: {
        data: Object,
    },
};
</script>
>

<style>
.back {
    background-repeat: no-repeat;
    overflow-y: hidden !important;
    overflow-x: hidden !important;
    background-size: cover;
    background-position: right;
    height: 400px;
    margin-bottom: 0;
}

.blog .row .post a {
    font-size: 0.9rem;
    color: #27ae60;
    font-weight: bold;
    text-decoration: none;
    border-style: none;
}

.blog .sidebar .side .row .sidetext h4 {
    font-size: 1rem;
}

.blog .sidebar .side .row .sidetext a {
    text-decoration: none;
    border-style: none;
    color: #6caa7f;
    font-size: 0.8rem;
}
</style>
