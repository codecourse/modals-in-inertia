<script setup>
import Modal from '@/Components/Modals/Modal.vue'
import { useForm } from '@inertiajs/vue3'

const form = useForm({
    body: null
})
</script>

<template>
    <Modal>
        <form class="space-y-4" v-on:submit.prevent="form.post(route('notes.store'))">
            <div>
                <label for="body" class="sr-only">Note</label>
                <input type="text" id="body" v-model="form.body">
            </div>

            <button type="submit">Create note</button>
        </form>
    </Modal>
</template>
