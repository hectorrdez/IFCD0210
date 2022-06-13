<template>
    <img v-if="image" v-bind:src="image" alt="fondo">
    <!-- Fondo que oscurece toda la pantalla -->
    <div class="bg-dark css-selector"></div>
    <div class="indecision-container">
        <input type="text" placeholder="¿Qué quieres saber?" v-model="pregunta">
        <p>Recuerda terminar con un signo de interrogación (?).</p>
        <div>
            <h2>{{ pregunta }}</h2>
            <h1>{{answer}}</h1>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            pregunta: '',
            image: '',
            answer: '',
        }
    },
    watch: {
         pregunta(valor) {
            if (!valor.includes('?')) return
            this.obtenerRespuesta();
        }
    },
    methods: {
        async obtenerRespuesta() {
            this.answer = 'Pensando...';
            const { answer, image } = await fetch('https://yesno.wtf/api').then(respuesta => respuesta.json());
            if(answer == 'yes') this.answer = 'Si'
            else this.answer = 'No'
            this.image = image;
        }
    }
}
</script>
<style>
img,
.bg-dark {
    height: 100vh;
    left: 0px;
    max-height: 100%;
    max-width: 100%;
    position: fixed;
    top: 0px;
    width: 100vw;
}

.bg-dark {
    background-color: rgba(0, 0, 0, 0.4);
}

.indecision-container {
    position: relative;
    z-index: 99;
}

input {
    border-radius: 5px;
    border: none;
    padding: 10px 15px;
    width: 250px;
}

input:focus {
    outline: none;
}

p {
    color: white;
    font-size: 20px;
    margin-top: 0px;
}

h1,
h2 {
    color: white;
}

h2 {
    margin-top: 150px;
}
.css-selector {
    background: linear-gradient(224deg, #ff0000, #fffa00, #45ff00, #005fff, #a300ff, #e700ff, #ff0000, #ffee00, #45ff00, #0076ff, #8200ff, #fd00ff, #ff0000, #ffd800, #67ff00, #006bff, #ba00ff, #ff0000);
    background-size: 3600% 3600%;

    -webkit-animation: AnimationName 1s ease infinite;
    -moz-animation: AnimationName 1s ease infinite;
    animation: AnimationName 1s ease infinite;
}

@-webkit-keyframes AnimationName {
    0%{background-position:0% 94%}
    50%{background-position:100% 7%}
    100%{background-position:0% 94%}
}
@-moz-keyframes AnimationName {
    0%{background-position:0% 94%}
    50%{background-position:100% 7%}
    100%{background-position:0% 94%}
}
@keyframes AnimationName {
    0%{background-position:0% 94%}
    50%{background-position:100% 7%}
    100%{background-position:0% 94%}
}
</style>