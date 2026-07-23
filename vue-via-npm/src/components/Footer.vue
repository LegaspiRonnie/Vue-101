<script setup lang="ts">
import {ref} from 'vue'
  const currentYear = new Date().getFullYear();
  const href = ref("https://ronnie.dev");
  const target = ref("_blank");

  href.value = "https://ronnie.dev";
  target.value = "_blank";
</script>

<template>
    <footer>
      <p>
        <p>
          Learn more about me at 
          <a :href :target="target">
            ronnie.dev
          </a> &copy; {{ currentYear }}

        </p>
      </p>
  </footer>
</template>

<style composed>
footer p {
    color: blue;
  }
</style>