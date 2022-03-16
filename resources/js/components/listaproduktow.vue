<template>
<div class='row mt-4'>
  <div class='col-2 filtr'>
  <div class="accordion" id="accordionPanelsStayOpenExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="panelsStayOpen-headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
          Typ
        </button>
      </h2>
      <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
        <div class="accordion-body">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            Promocje
          </label>
        </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class='col-3' v-for="lista in lista.data" :key='lista.id'>
      <div class="card" text-center  style="width: 18rem;">
        <img class="card-img-top" :src='"img/"+lista.img'>
        <div class="card-body text-center">
          <h5 class="card-title">{{lista.marka}}</h5>
          <p class="card-text">{{lista.cena}}</p>
          <a href="#" @click='wyslij(lista.id)' class="btn btn-dark">Kup teraz!</a>
        </div>
      </div>
      </div>
      <Pagination :data="lista" @pagination-change-page="getResults" />
</div>
</template>
<script>
import LaravelVuePagination from 'laravel-vue-pagination';
export default {
components: {
       'Pagination': LaravelVuePagination
   },
   data(){
         return{
          lista:{}
         }
         },
mounted() {
        // Fetch initial results
        this.getResults();
    },

    methods: {
        async getResults(page = 1) {
            await axios.get('lista/filtr?page=' + page)
                .then(response => {
                    this.lista = response.data;
                });
        },
              wyslij(w_id){
                axios.get('koszyk',{params: {value:w_id}})
                .then(response=>{
                  console.log(response.data);
                });
              }
      },
  watch:{
  '$route'(to,from){
  this.getResults();
  }
  }

}
</script>
