<script setup>

const props = defineProps({
    condominios: {
        type: object,
        default: () => ({}),
    },
});

const form = useForm({

});

function destroy(id) {
    if(confirm("Tem certeza que quer apagar?")) {
        form.delete(route('condominio.destoy', id));
    }
}

</script>

<template>

    <head title="Perfil do Condominio" />

    <AppLayout title="Condomio-Show">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Condominio Show
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    v-if="$page.props.flash.message"
                    class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                    role="alert"
                >
                    <span class="font-medium">
                        {{ $page.props.flash.message }}
                    </span>
                </div>
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                       <div class="mb-2">
                            <Link :href="route('condominio.create')">
                                <PrimaryButton>Novo</PrimaryButton>
                            </Link>
                        </div>
                         <div
                            class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table
                                class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
                            >
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                                >
                                    <tr>
                                        <th scope="col" class="px-6 py-3">#</th>
                                        <th scope="col" class="px-6 py-3">
                                            Nome
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Editar
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Apagar
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        v-for="condominio in condominios"
                                        :key="condominios.id"
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                    >
                                        <th
                                            scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap"
                                        >
                                            {{ condominio.id }}
                                        </th>
                                        <th
                                            scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap"
                                        >
                                            {{ condominio.nome }}
                                        </th>

                                        <td class="px-6 py-4">
                                            <Link
                                                :href="
                                                    route(
                                                        'condominio.edit',
                                                        condominio.id
                                                    )
                                                "
                                               class="px-4 py-2 text-white bg-blue-600 rounded-lg" >Edit</Link
                                            >
                                        </td>
                                        <td class="px-6 py-4">
                                            <PrimaryButton
                                                class="bg-red-700"
                                                @click="destroy(condominio.id)"
                                            >
                                                Delete
                                            </primaryButton>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </AppLayout>

</template>