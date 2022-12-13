<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import InputError from '@/Components/InputError.vue';
import TextInput from '@/Components/TextInput.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { useForm, Link } from '@inertiajs/inertia-vue3';
 
const form = useForm({
    nome: '',
    provincia: '',
    municipio:'',
    bairro:'',
    descrisao:'',
    user_id:'',
});
</script>
 
<template>
    <AppLayout title="Condominio">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Condominio
            </h2>
        </template>
 
        <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
            <form @submit.prevent="form.post(route('condominio.store'), { onSuccess: () => form.reset() })">
                <TextInput
                    v-model="form.nome"
                    placeholder="Qual é o nome do Condominio?"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                />
                <InputError :message="form.errors.nome" class="mt-2" />
                <TextInput
                    v-model="form.provincia"
                    placeholder="Qual é a Provincia?"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                />
                <InputError :message="form.errors.provincia" class="mt-2" />
                <TextInput
                    v-model="form.municipio"
                    placeholder="Qual é o Municipio?"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                />
                <InputError :message="form.errors.municipio" class="mt-2" />
                <TextInput
                    v-model="form.bairro"
                    placeholder="Qual é o Bairro?"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                />
                <InputError :message="form.errors.bairro" class="mt-2" />
                <textarea
                    v-model="form.descrisao"
                    placeholder="Coloque uma breve descrisão sobre o endereço (Opcional)"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                ></textarea>
                <PrimaryButton class="mt-4">Salvar</PrimaryButton>
                <Link :href="route('condominio.index')"><PrimaryButton class="mt-4" :href="route('condominio.index')">Cancelar</PrimaryButton></Link>
            </form>
        </div>
    </AppLayout>
</template>