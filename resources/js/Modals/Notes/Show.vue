<script setup>
import Modal from '@/Components/Modals/Modal.vue'

defineProps({
    note: Object
})
</script>

<template>
    <Modal>
        {{ note }}
    </Modal>
</template>
