<template>
  <div v-if="!idvuemon">Espere porfavor</div>
  <div v-else>
    <h1>¿Qué Vuemon es?</h1>
    <VuemonImg :vuemon-id="idvuemon" :respuesta="hayRespuesta" />
    <VuemonOpciones @respuesta="activarRespuesta" :lista-opciones="array" />
    <div v-if="enseyar">
      <div v-if="correcto">Correcto</div>
      <div v-else>Fallaste</div>
    </div>
  </div>
</template>

<script>
import VuemonOpciones from "@/components/VuemonOpciones.vue";
import VuemonImg from "@/components/VuemonImg.vue";
import getPokemonsOptions from "@/helpers/vuemonsUtilidades.js";

export default {
  components: {
    VuemonOpciones,
    VuemonImg,
  },
  data() {
    return {
      idvuemon: null,
      array: null,
      hayRespuesta: false,
      msg: '',
      correcto: null,
      enseyar: false
    }
  },
  methods: {
    activarRespuesta(dato) {
      this.hayRespuesta = true;
      // this.comprobarRespuesta(dato);
      if (dato === this.idvuemon) {
        this.correcto = true;
      } else {
        this.correcto = false;
      }
      this.enseyar = true;
      console.log('le has dado al ' + dato);
    },
    async cargar() {
      this.array = await getPokemonsOptions();
      this.idvuemon = await this.array[Math.floor(Math.random() * 4)].id;
      console.log('el id del pokemon es: ' + this.idvuemon);
    }
  },

  mounted() {
    this.cargar();
  }
};
</script>

<style>
</style>