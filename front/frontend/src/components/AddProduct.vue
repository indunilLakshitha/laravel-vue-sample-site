<template>
  <div class="container">

    <h1>Add Product</h1>
    <form @submit.prevent="submitForm">

      <div class="form-group row ">
        <label class="col-sm-2" for="name">Name</label>
        <div class="col-sm-10">
        <input type="name" class="form-control"
               id="name" aria-describedby="emailHelp" v-model="item.name">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2" for="quantity">Quantity</label>
        <div class="col-sm-10">
        <input type="quantity" class="form-control" v-model="item.quantity" id="quantity">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2" for="price">Price</label>
        <div class="col-sm-10">
          <input type="price" v-model="item.price" class="form-control" id="price">
        </div>
      </div>

      <div class="form-group" >
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
      </div>
      <button type="submit" v-show="item.price && item.price && item.quantity" class="btn btn-primary">Submit</button>

    </form>

  </div>
</template>

<script>

  export default {
  data(){
    return{
      item:{
        name:'',
        quantity:0,
        price:0
      }
    }

  },
    methods:{
      submitForm(){
        console.log("asdsadsa");
      }
    }
  }
  // import { minLength, required,maxLength,between } from 'vuelidate/lib/validators'
  //
  // export default {
  //   name:'FormValidation',
  //   data() {
  //     return {
  //       name: '',
  //       quantity: '',
  //       price: ''
  //     }
  //   },
  //   validations:{
  //     name:{
  //       required,
  //       minLength:minLength(3),
  //       maxLength:maxLength(12)
  //     },
  //     price:{
  //       required,
  //       minLength:minLength(1),
  //       maxLength:maxLength(12)
  //     },
  //     quantity:{
  //       required,
  //       minLength:minLength(3),
  //       maxLength:maxLength(12)
  //     }
  //
  //   }
  // }

</script>
