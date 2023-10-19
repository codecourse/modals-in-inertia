<script setup>
import Modal from '@/Components/Modals/Modal.vue'
import { useModal } from 'momentum-modal'

const { close } = useModal()

const doSomething = () => {
    // do something
    close()
}
</script>

<template>
    <Modal v-slot="{ close }" class="!max-w-xl">
        This is a modal

        <button v-on:click="doSomething">Close modal</button>
    </Modal>
</template>
