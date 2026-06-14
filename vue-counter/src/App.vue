
<template>
  <h1>Counter is: {{ counter }}</h1>

  <button @click="counter++">Increment</button>
  <button @click="decrement">Decrement</button>
</template>

<script setup>
  import { ref } from 'vue'

  const counter = ref(0);
  
  function decrement() {
    counter.value--;
  }
</script>