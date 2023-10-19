<script setup>
import Modal from '@/Components/Modals/Modal.vue'
</script>

<template>
    <Modal v-slot="{ close }" class="!max-w-xl">
        This is a modal

        <button v-on:click="close">Close modal</button>
    </Modal>
</template>
