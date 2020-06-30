<template>
  <div id="app">

  <navbar></navbar>
    <router-view></router-view>
  </div>


</template>

<script>
import navbar from './components/Navbar.vue'

  export default {
  components:{
    'navbar':navbar
  }
  }
</script>

<style>



</style>
