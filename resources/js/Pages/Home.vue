<template>
    <h1 class="text-3xl font-bold underline"> {{ title }} </h1>
</template>

<script>
    // import Layout from "../Shared/Layout.vue";
    export default {
        name: "Home",
        components: {
            // Layout,
        },
        props: {
            title: String,
        },
        // layout: Layout,
    }
</script>
