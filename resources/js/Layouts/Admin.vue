<template>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
        <Link class="navbar-brand">Admin Panel</Link>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarCollapse"
            aria-controls="navbarCollapse"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto sidenav" id="navAccordion">
                <li class="nav-item">
                    <Link
                        class="nav-link"
                        :href="route('post.index')"
                        :class="{
                            active: $page.component === 'Post/Index',
                        }"
                        >Post</Link
                    >
                </li>
                <li class="nav-item">
                    <Link
                        class="nav-link"
                        :href="route('post.create')"
                        :class="{
                            active: $page.component === 'Post/Create',
                        }"
                        >Create Post</Link
                    >
                </li>
                <li class="nav-item">
                    <Link
                        class="nav-link"
                        :href="route('category.index')"
                        :class="{
                            active: $page.component === 'Category/Index',
                        }"
                        >Category</Link
                    >
                </li>
                <li class="nav-item">
                    <Link
                        class="nav-link"
                        :href="route('category.create')"
                        :class="{
                            active: $page.component === 'Category/Create',
                        }"
                        >Create Category</Link
                    >
                </li>
                <li class="nav-item">
                    <Link class="nav-link" :href="route('logout')" method="post"
                        >Logout</Link
                    >
                </li>
            </ul>
        </div>
    </nav>

    <main class="content-wrapper">
        <div class="container-fluid mt-20">
            <div v-if="$page.props.flash.message" class="text-blue-600">
                {{ $page.props.flash.message }}
            </div>
            <slot />
        </div>
    </main>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        Link,
    },
};
</script>

<style>
.footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 3.5rem;
    line-height: 3.5rem;
    background-color: #ccc;
}

.nav-link:hover {
    transition: all 0.4s;
}

.nav-link-collapse:after {
    float: right;
    content: "\f067";
    font-family: "FontAwesome";
}

.nav-link-show:after {
    float: right;
    content: "\f068";
    font-family: "FontAwesome";
}

.nav-item ul.nav-second-level {
    padding-left: 0;
}

.nav-item ul.nav-second-level > .nav-item {
    padding-left: 20px;
}

@media (min-width: 992px) {
    .sidenav {
        position: absolute;
        top: 0;
        left: 0;
        width: 230px;
        height: calc(100vh - 3.5rem);
        margin-top: 3.5rem;
        background: #343a40;
        box-sizing: border-box;
        border-top: 1px solid rgba(0, 0, 0, 0.3);
    }

    .navbar-expand-lg .sidenav {
        flex-direction: column;
    }

    .content-wrapper {
        margin-left: 230px;
    }
}
</style>
