

<template>
  <div class="wrapper">
    <h1>Todo App</h1>

    <div class="input-row">
      <input type="text" placeholder="Add a new task" v-model="newTask" />
      <button @click="addTask" >Add</button>
    </div>
    <ul class="task-list">
      <li v-for="task in tasks" :key="task.id" :class="{ done: task.completed }">
        <button @click="removeTask(task.id)">X</button>
        <input type="checkbox" v-model="task.completed" />
        <span>{{ task.text}}</span>
      </li>
    </ul>
  </div>
</template>

<script setup>
import { ref } from 'vue';
  const newTask = ref('');
  const tasks = ref([]);

  function addTask() {
    const text = newTask.value.trim();
     
    if (!text) return;

    tasks.value.push({
      id: Date.now(),
      text: text,
      completed: false,
      favorite: false
    })

    newTask.value = '';
  }

  function removeTask(id) {
    tasks.value = tasks.value.filter(task => task.id !== id);
  }
</script>

<style scoped>
  .tasklist {
    list-style: none;
    padding: 0;
  }
  .done span {
    text-decoration: line-through;
    list-style: none;
  }
</style>
