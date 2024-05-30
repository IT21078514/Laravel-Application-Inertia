<template>
    
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <Link class="navbar-brand" :href="route('dashboard')">
        <img src="{{ asset('images/logo.png') }}" width="60" height="60" class="d-inline-block align-center" alt="">
        <b>Management</b></Link>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    
      <ul class="navbar-nav">
        <li class="nav-item active">
          <Link class="nav-link active" :href="route('student')" selected>Student Data </Link>
        </li>

        <li class="nav-item active">
          <a class="nav-link active" href="#">Features</a>
        </li>
      
      </ul>
   
  </nav>


</template>
<script >
import { Link } from '@inertiajs/vue3';
export default {
    components : {
        Link
    }
}

</script>

<style lang="css" scoped>


</style>