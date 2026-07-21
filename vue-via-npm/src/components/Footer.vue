<script setup lang="ts">
import {ref} from 'vue'
  const currentYear = new Date().getFullYear();
</script>

<template>
    <footer>
      <p>
        &copy; {{ currentYear }}
      </p>
  </footer>
</template>

<style composed>
footer p {
    color: blue;
  }
</style>