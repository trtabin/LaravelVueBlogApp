<template>
    <Navbar />

    <div class="container" style="margin-top: 30px">
        <div class="row">
            <div class="col-sm-8">
                <h2>{{ data.post.title }}</h2>
                <h5>Title description, Dec 7, 2017</h5>
                <div class="fakeimg">Fake Image</div>
                <p>Some text..</p>
                <p>
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
};
</script>
