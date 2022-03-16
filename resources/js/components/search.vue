<template>

<div class="divsearch">
<form class="d-flex">
  <input class="form-control rounded-pill"  @click="clicked()" type="search" placeholder="Szukaj butów..." v-model="value" aria-label="Search">
</form>
<div class="search" :style="activ ? styleSearch: null">
<ul class='list-unstyled' v-if="results.length > 0">
<li v-for="result in results" :key="result.id"><a>{{result.marka}}</a></li>
</ul>
<ul class='list-unstyled' v-else>
<li><a>Nie znaleziono</a></li>
</ul>
</div>
</div>
</template>
<script>
export default {
   data()
    {
      return{
        value: null,
        results:[],
        activ:false,
        styleSearch:{
        display:"block"
        }
      }
      },
      watch: {
      value(after, before){
      this.fetch();
      }
      },
      methods :{
      fetch(){
      axios.get('/search',{params: {value:this.value}})
      .then(response=>this.results = response.data)
      .catch(error=>{});
      },
      clicked(){
      this.activ=!this.activ
      }
      }
 }
</script>
