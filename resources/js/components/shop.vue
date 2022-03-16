<template>
<div>
<ul class="navbar-nav  mb-2 mb-lg-0">
  <li class="nav-item">
    <a class='nav-link' v-on:mouseover="ishovered" v-on:mouseleave="mouseleave"><i class="bi bi-person-fill"></i></a>
  </li>
  <li class="nav item">
    <a class='nav-link'><i class="bi bi-cart3"></i></a>
  </li>
</ul>
<div class="shop text-center rounded row" v-on:mouseover="ishovered" v-on:mouseleave="mouseleave" :style="ishover ? styleShop:null">
<div class='el p-4' v-if="isAuth">
<a class='text-decoration-none'>Witamy cię {{isAuth.name}}</a>
<button type="button" @click='logout()' class="btn btn-dark mt-5">Wyloguj</button>
</div>
<div v-else class='el p-4'>
<a class='text-decoration-none' @click='clicke()'>Zaloguj się</a>
</div>
</div>
<div class='row cont' :style='clicked ? styleForm:null'>

<div class='w-75'>
<div class='icons p-1'>
<i @click='close()' class="bi bi-x-lg"></i>
</div>
<div class='forme'>
<form @submit.prevent="login">
  <div class="form-group p-4">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" v-model="email" aria-describedby="emailHelp">
  </div>
  <div class="form-group p-4">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" v-model="haslo" id="exampleInputPassword1">
  </div>
  <div class="form-group p-4 text-center">
  <button type="submit" class="btn btn-dark">Submit</button>
  </div>
</form>
</div>
</div>
</div>
</div>
</template>
<script>
export default {
   props:['isAuth','loginHome','logoutHome'],
   data()
    {
      return{
        email: null,
        haslo: null,
        ishover: false,
        clicked: true,
        styleShop:{
          display:"block"
        },
        styleForm:{
          display:"none"
        }
      }
    },
    methods:{
    ishovered(){
      this.ishover=true
    },
    mouseleave(){
    this.ishover=false
    },
    clicke(){
    this.clicked=false
    },
    close(){
    this.clicked=true
    },
    logout(){
    axios.post(this.logoutHome).then(response=>{
    location.reload();
    })
    .catch(error=>{
    console.log(error);
    })
    },
    login(){
    axios.post('/logowanie',{
    email: this.email,
    password: this.haslo
    }).then((response)=>{
    location.reload();
    })
    .catch(function(error){
     console.error(error);
    })
    }
    }
}
</script>
