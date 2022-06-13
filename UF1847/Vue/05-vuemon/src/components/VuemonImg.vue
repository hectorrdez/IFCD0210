<template>
  <div class="vuokemon-container">
    <img class="fade-in" :src="obtenerImagen" v-if="respuesta" />
    <img class="fade-in hidden-vuokemon" :src="obtenerImagen" v-else />
  </div>
</template>

<script>
export default {
  props: {
    vuemonId: {
      type: Number,
      required: true,
    },
    respuesta: {
      type: Boolean,
      default: false,
    }
  },
  computed: {
    obtenerImagen: function () {
      return `https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/dream-world/${this.vuemonId}.svg`;
    }

  },
};
</script>

<style scoped>
.vuokemon-container {
  height: 200px;
}

img {
  height: 200px;
  user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -webkit-user-drag: none;
  -webkit-user-select: none;
}

.hidden-vuokemon {
  filter: brightness(0);
}
</style>