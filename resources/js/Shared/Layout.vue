<template>
    <div class="container mx-auto">
        <ul>
            <li>
                <Link :href="route('home')" >Главная</Link>
            </li>
            <li>
                <Link :href="route('about')" >О нас</Link>
            </li>
        </ul>
        <slot/>
    </div>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3';
export default {
    name: "Layout",
    components: {
        Link,
    },
}
</script>

<style scoped>

</style>
