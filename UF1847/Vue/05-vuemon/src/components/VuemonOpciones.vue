<template>
  <div class="vuopciones-container">
    <ul>
      <li v-for="opcion in listaOpciones" :key="opcion.id" @click="$emit('respuesta', opcion.id)">
        {{ opcion.name }}
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  props: {
    listaOpciones: {
      type: Array,
    },
  }
};
</script>

<style scoped>
ul {
  list-style-type: none;
}

li {
  background-color: white;
  border-radius: 5px;
  border: 1px solid rgba(0, 0, 0, 0.2);
  cursor: pointer;
  margin-bottom: 10px;
  width: 250px;
  padding: .5em;
  user-select: none;
}

li:hover {
  background-color: rgba(0, 0, 0, 0.05);
}

.vuopciones-container {
  display: flex;
  justify-content: center;
}
</style>