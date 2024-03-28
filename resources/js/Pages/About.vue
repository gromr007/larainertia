<template>
    <Head :title="title" />
    <h1 class="text-3xl font-bold underline"> {{ title }} </h1>
</template>

<script>
    import {Head} from '@inertiajs/inertia-vue3';
    export default {
        name: "About",
        components: {
            Head,
        },
        props: {
            title: String,
        },
    }
</script>
