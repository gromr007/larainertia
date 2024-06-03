<template>
    <Link :href="route('users.index')">
        <button class="my-5 text-white bg-green-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Вернуться назад</button>
    </Link>
    {{form.errors}}
    <form @submit.prevent="store">
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <input :class="{'border-red-500': form.errors.name}" v-model="form.name" type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required />
            <div class="text-red-500 mt-2" v-if="form.errors.name"></div>
        </div>
        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input :class="{'border-red-500': form.errors.email}"  v-model="form.email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required />
            <div class="text-red-500 mt-2" v-if="form.errors.email"></div>
        </div>
        <div class="mb-6">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <input :class="{'border-red-500': form.errors.password}"  v-model="form.password" type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required />
            <div class="text-red-500 mt-2" v-if="form.errors.password"></div>
        </div>
        <div v-if="form.isDirty" class="text-green-500 py-5">
            Поля изменились, не забудте сохранить
        </div>
        <button :disabled="form.processing" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Создать
        </button>
    </form>

</template>



<script>
    import {Link, useForm} from '@inertiajs/inertia-vue3';
    export default {
        name: "Users_Create",
        components: {
            Link,
            useForm,
        },
        props: {
            title: String,
        },
        setup() {
            const form = useForm({
                name: null,
                email: null,
                password: null,
            });

            function store() {
                form.post(route('users.store'));
            }

            return {form, store}
        },
    }
</script>

<style scoped>

</style>
