<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    notes: Array
})
</script>

<template>
    <Head title="Notes" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Notes</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <Link :href="route('notes.create')">New note</Link>

                        <div class="mt-10 space-y-1">
                            <template v-if="notes.length">
                                <div v-for="note in notes" :key="note.id">
                                    <Link :href="route('notes.show', note)">{{ note.id }}. {{ note.body }}</Link>
                                </div>
                            </template>
                            <div v-else>No notes yet</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
