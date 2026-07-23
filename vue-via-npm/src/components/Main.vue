<script setup lang="ts">
  import {ref} from 'vue'
  const titleClass = ref("title");
  const descriptionClass = ref("description");
  const pathToImages = ref("/images/");
  
  const posts = ref([{
    image: `${pathToImages.value}image1.png`,
    title: "This is a title 1",
    description: "This is a description 1"
  },
  {
    image: `${pathToImages.value}image2.png`,
    title: "This is a title 2",
    description : "This is a description 2"
  }, 
  {
    image: `${pathToImages.value}image3.png`,
    title: "This is a title 3",
    description: "This is a description 3"
  }])
</script> 

<template>
    
  <main>
    
      <section v-for="post in posts">
        <img :src=" post.image " alt="error loading image" />
        <h2 :class="titleClass">{{ post.title }}</h2>
        <p :class="descriptionClass">{{ post.description }}</p>
      </section>
      
     
  </main>
</template>

<style composed>
</style>