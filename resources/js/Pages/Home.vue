<template>
    <Head>
        <title> {{title}} </title>
    </Head>
    <h1 class="text-3xl font-bold underline"> {{ title }} </h1>
</template>

<script>
    // import Layout from "../Shared/Layout.vue";
    import {Head} from '@inertiajs/inertia-vue3';
    export default {
        name: "Home",
        components: {
            // Layout,
            Head,
        },
        props: {
            title: String,
        },
        // layout: Layout,
    }
</script>
