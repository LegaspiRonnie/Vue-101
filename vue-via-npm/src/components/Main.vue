<script setup lang="ts">
  import {ref} from 'vue'
  const h2s = ref([
    "first",
    "second",
    "third"
  ]);
  const paragraphs = ref([
    "P1",
    "P2",
    "P3"
  ])
  const hilights = ref([
    "1",
    "2",
    "3"
  ])

  const spanClass = ref("hilight");
</script> 

<template>
    
  <main>
      <section>
        <h2>{{h2s[0]}} <span :class="spanClass"> {{ hilights[0] }}</span></h2>
        <p>{{ paragraphs[0] }}</p>
      </section>
      <section>
        <h2>{{h2s[1]}}<span :class="spanClass"> {{ hilights[1] }} </span></h2>
        <p>{{ paragraphs[1] }}</p>
      </section>
      <section>
        <h2>{{h2s[2]}}<span :class="spanClass"> {{ hilights[2] }}</span></h2>
        <p>{{ paragraphs[2] }} </p>
      </section>
     
  </main>
</template>

<style composed>
</style>