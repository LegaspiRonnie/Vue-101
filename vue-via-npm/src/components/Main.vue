<script setup lang="ts">
  import {ref} from 'vue'
  const name = ref("Ronnie")
  const paragraph = ref("Im about to learn Vue.js")
</script> 

<template>
    
  <main>
      <h1>Hello {{name}}</h1>
      <p>{{  paragraph  }}</p>
  </main>
</template>

<style composed>
</style>