<template>
    <div>
        <Link :href="route('users.create')">
            <button class="text-white bg-green-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Создать пользователя</button>
        </Link>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg m-6 p-5">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border-solid border-2">
                <tr>
                    <th scope="col" class="p-4">
                        <div class="flex items-center">
                            <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Edit
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Delete
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Delete2
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-if="users.data.length > 0" v-for="user in users.data" :key="user.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <Link :href="route('users.show', [user.id])" class="font-medium text-black-600 dark:text-black-500 hover:underline">{{ user.name }}</Link>
                    </td>
                    <td class="px-6 py-4">
                        {{ user.email }}
                    </td>
                    <td class="px-6 py-4 w-4">
                        <Link :href="route('users.edit', [user.id])" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Редактировать</Link>
                    </td>
                    <td class="px-6 py-4 w-4">
                        <Link method="delete" :href="route('users.destroy', [user.id])" class="font-medium text-red-600 dark:text-red-500 hover:underline">Удалить</Link>
                    </td>
                    <td class="px-6 py-4 w-4">
                        <a href="#" @click="destroy(user.id)" class="font-medium text-red-600 dark:text-red-500 hover:underline">Удалить2</a>
                    </td>
                </tr>
                <tr v-else class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Пользователей не обнаружено
                    </td>
                </tr>
            </tbody>
        </table>
        <Pagination :users="users" :links="links"/>

    </div>


</template>



<script>
    import {Link} from '@inertiajs/inertia-vue3';
    import Pagination from '@/Shared/Pagination.vue';
    export default {
        name: "Users_Index",
        components: {
            Link,
            Pagination,
        },
        props: {
            title: String,
            users: Array,
        },
        computed: {
            links() {
                return this.users.links.filter( (item, index, arr) => (index !== 0 && index !== arr.length-1) ? true : false);
            }
        },
        methods: {
            destroy(id) {
                if(confirm('Вы уверены?')) {
                    this.$inertia.delete(this.route('users.destroy', id));
                }
            },

        }
    }
</script>

<style scoped>

</style>
