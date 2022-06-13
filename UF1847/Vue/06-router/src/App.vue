<template>
  <nav>
    <router-link to="/">Lista</router-link>|
    <router-link to="/:articulo">Articulos</router-link>|
    <router-link to="/acerca">Acerca</router-link>
  </nav>
  <router-view></router-view>
</template>

<script>

export default {
  name: 'App',
  components: {
  },
  props: {
    id: {
      type: Number,
      required: true
    }
  }
}
</script>

<style>
nav a {
  padding: 1em;
  color: #2c3e50;
  text-decoration: none;
}
.router-link-exact-active {
  color: rgb(207, 37, 241);
  text-decoration: underline;
}
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
