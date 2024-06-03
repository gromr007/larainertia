<template>

    <p v-if="$page.props.message" class="bg-indigo-600 h-10 flex items-center justify-center text-sm font-medium text-white px-4 sm:px-6">
        {{ $page.props.message }}
    </p>

    <div class="container mx-auto">
        <ul>
            <li>
                <Link :href="route('home')" >Главная</Link>
            </li>
            <li>
                <Link :href="route('about')" >О нас</Link>
            </li>
            <li>
                <Link :href="route('users.index')" >Пользователи</Link>
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
