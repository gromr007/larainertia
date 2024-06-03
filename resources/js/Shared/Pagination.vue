<template>
    <nav v-if="links.length > 1" class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">
            <span class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">
                Showing <span class="font-semibold text-gray-900 dark:text-white">{{users.from}}-{{users.to}}</span>
                of <span class="font-semibold text-gray-900 dark:text-white">{{users.total}}</span>
            </span>
        <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
            <li>
                <Link :href="users.first_page_url" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</Link>
            </li>

            <li v-for="link in this.links" :key="link.label">
                <Link :href="link.url" :class="{'text-blue-500 font-bold': link.active}" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{link.label}}</Link>
            </li>

            <li>
                <Link :href="users.last_page_url" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</Link>
            </li>
        </ul>
    </nav>
</template>

<script>
    import {Link} from "@inertiajs/inertia-vue3";

    export default {
        name: "Pagination",
        components: {
            Link,
        },
        props: {
            users: Array,
            links: Array,
        }
    }
</script>

<style scoped>

</style>
