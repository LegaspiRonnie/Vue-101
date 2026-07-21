<script setup lang="ts">
    import {ref} from 'vue'
    const emoji = ref("🙌")
</script>

<template>
    <header>
      <span>{{ emoji }}</span>
  </header>
</template>


<style scoped>
</style>