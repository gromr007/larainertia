<template>
    {{user}}

<!--    <div class="relative overflow-x-auto shadow-md sm:rounded-lg m-6 p-5">-->
<!--        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">-->
<!--            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border-solid border-2">-->
<!--                <tr>-->
<!--                    <th scope="col" class="p-4">-->
<!--                        <div class="flex items-center">-->
<!--                            <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">-->
<!--                            <label for="checkbox-all-search" class="sr-only">checkbox</label>-->
<!--                        </div>-->
<!--                    </th>-->
<!--                    <th scope="col" class="px-6 py-3">-->
<!--                        Name-->
<!--                    </th>-->
<!--                    <th scope="col" class="px-6 py-3">-->
<!--                        Email-->
<!--                    </th>-->
<!--                    <th scope="col" class="px-6 py-3">-->
<!--                        Edit-->
<!--                    </th>-->
<!--                    <th scope="col" class="px-6 py-3">-->
<!--                        Delete-->
<!--                    </th>-->
<!--                </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--                <tr v-if="users.data.length > 0" v-for="user in users.data" :key="user.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">-->
<!--                    <td class="w-4 p-4">-->
<!--                        <div class="flex items-center">-->
<!--                            <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">-->
<!--                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>-->
<!--                        </div>-->
<!--                    </td>-->
<!--                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">-->
<!--                        <Link :href="route('users.show', [user.id])" class="font-medium text-black-600 dark:text-black-500 hover:underline">{{ user.name }}</Link>-->
<!--                    </td>-->
<!--                    <td class="px-6 py-4">-->
<!--                        {{ user.email }}-->
<!--                    </td>-->
<!--                    <td class="px-6 py-4 w-4">-->
<!--                        <Link :href="route('users.edit', [user.id])" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</Link>-->
<!--                    </td>-->
<!--                    <td class="px-6 py-4 w-4">-->
<!--                        <Link :href="route('users.destroy', [user.id])" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</Link>-->
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr v-else class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">-->
<!--                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">-->
<!--                        Пользователей не обнаружено-->
<!--                    </td>-->
<!--                </tr>-->
<!--            </tbody>-->
<!--        </table>-->

<!--    </div>-->


</template>



<script>
    import {Link} from '@inertiajs/inertia-vue3';
    export default {
        name: "Users_Show",
        components: {
            Link,
        },
        props: {
            title: String,
            user: Array,
        },
    }
</script>

<style scoped>

</style>
