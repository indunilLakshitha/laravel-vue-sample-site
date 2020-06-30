<template>
  <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">PRODUCT BASKET</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item ">
            <router-link to="/" class="nav-link">Home </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/add" class="nav-link">
            Add Product
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/list" class="nav-link">
            Product Basket
            </router-link>
          </li>
        </ul>
        <ul class="form-inline my-2 my-lg-0">

          <li class="nav-item">
            <router-link to="/about" class="nav-link">
            About
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/contact" class="nav-link">
              Contact
            </router-link>
          </li>
        </ul>
      </div>
    </nav>

  </div>
</template>

<script>
  export  default {

  }

</script>
