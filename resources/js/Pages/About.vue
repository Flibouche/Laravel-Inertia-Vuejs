<script setup>
    defineProps({
        user: String
    })
</script>

<template>
    <div>
        <h1>About {{ user }}</h1>
    </div>
</template>