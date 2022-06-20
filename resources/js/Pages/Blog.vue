<template>
    <Navbar />

    <div class="container" style="margin-top: 30px">
        <div class="row">
            <div class="col-sm-8">
                <h2>{{ data.post.title }}</h2>
                <span
                    v-for="category in data.post.categories"
                    class="badge badge-secondary mr-1"
                    >{{ category.name }}</span
                >
                <div>
                    <img
                        v-if="data.post.image"
                        style="width: 90%; height: auto"
                        :src="getImage(data.post.image)"
                    />
                </div>
                <p class="mt-3">
                    {{ data.post.description }}
                </p>
            </div>
        </div>
    </div>

    <Footer />
</template>

<script>
import Footer from "@/Components/Footer.vue";
import Navbar from "@/Components/Navbar.vue";
export default {
    components: {
        Footer,
        Navbar,
    },
    props: {
        data: Object,
    },
    methods: {
        getImage(pic) {
            return "/images/" + pic;
        },
    },
};
</script>
