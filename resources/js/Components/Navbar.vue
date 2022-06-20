<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <span class="navbar-brand" href="#">Blog App</span>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <Link
                        class="nav-link"
                        :href="route('home')"
                        :class="{
                            active: $page.component === 'Welcome',
                        }"
                        >Home</Link
                    >
                </li>
                <li class="nav-item">
                    <Link class="nav-link" href="#">About</Link>
                </li>
                <li class="nav-item">
                    <Link class="nav-link" href="#">Contact Us</Link>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        Link,
    },
};
</script>
