import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);

import  AddProduct from './components/AddProduct.vue'
import  About from './components/About.vue'
import  ProductBasket from './components/ProductBasket.vue'
import Contact from  './components/Contact.vue'
import Home from './components/Home'
import List from './components/List'


const router =new VueRouter({

  mode:"history",

  routes:[
    {
      path:"/add",
      component:AddProduct
    },
    {path: "/about",
    component: About
    },
    {
      path: "/productbasket",
      component: ProductBasket
    },
    {
      path: "/contact",
      component: Contact
    },
    {
      path: "/list",
      component: List
    },
    {
      path: "/",
      component: Home
    }
  ]
});


export default router

