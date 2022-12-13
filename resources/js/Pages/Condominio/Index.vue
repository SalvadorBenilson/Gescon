<script setup>

import AppLayout from '@/Layouts/AppLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Link } from '@inertiajs/inertia-vue3';

</script>
 
<template>
    <AppLayout title="Condominio">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Lista dos seus Condominio
            </h2>
        </template>
        <Link :href="route('condominio.create')"><PrimaryButton class="mt-4">Novo</PrimaryButton></Link>

        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            <table class="table-fixed w-full">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="px-4 py-2 w-20">#</th>
                                <th class="px-4 py-2">Nome</th>
                                <th class="px-4 py-2">Provincia</th>
                                <th class="px-4 py-2">Municipio</th>
                                <th class="px-4 py-2">Bairro</th>
                                <th class="px-4 py-2">Descrisão</th>
                                <th class="px-4 py-2">Autor</th>
                                <th class="px-4 py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="condominio in row">
                                <td class="border px-4 py-2">{{ row.id }}</td>
                                <td class="border px-4 py-2">{{ row.nome }}</td>
                                <td class="border px-4 py-2">{{ row.provincia }}</td>
                                <td class="border px-4 py-2">{{ row.municipio }}</td>
                                <td class="border px-4 py-2">{{ row.bairro }}</td>
                                <td class="border px-4 py-2">{{ row.descrisao }}</td>
                                <td class="border px-4 py-2">{{ row.user.name }}</td>
                                <td class="border px-4 py-2">
                                <button @click="edit(row.id)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</button>
                                <button @click="destroy(row.id)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Apagar</button>
                                </td>
                            </tr>
                        </tbody>
                </table>
            </div>
    </AppLayout>
</template>