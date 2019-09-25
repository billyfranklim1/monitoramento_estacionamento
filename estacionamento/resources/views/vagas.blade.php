<?php //echo ($vagas);







 ?>
 @extends('layout')

 @section('content')
 <style>
   .uper {
     margin-top: 40px;
   }
 </style>

 <script>

function timer(){

window.location.reload();

}

// setTimeout("timer()",5000);

</script>
<div id="app">

 <div class="uper">
   @if(session()->get('success'))
     <div class="alert alert-success">
       {{ session()->get('success') }}
     </div><br />
   @endif
</div>


   <h1  align="center" class=" badge-warning" styler="aliner:center">ESTACIONAMENTO</h1>

 <table class="table table-striped" >
   <thead>
       <tr>
         <td>VAGA</td>
         <td>STATUS</td>
       </tr>
   </thead>
   <tbody >
      <tr>
          <td class=" badge-info">Vaga 1</td>
          <td   class="btn-success">Livre</td>
          <!-- <td class="btn-danger">Ocupada</td> -->

      </tr>
      <tr>
          <td class=" badge-info">Vaga 2</td>
          <td   class="btn-success">Livre</td>
          <!-- <td class="btn-danger">Ocupada</td> -->

      </tr>
      <tr>
          <td class=" badge-info">Vaga 3</td>
          <!-- <td   class="btn-success">Livre</td> -->
          <td class="btn-danger">Ocupada</td>

      </tr>
      <tr>
          <td class=" badge-info">Vaga 4</td>
          <!-- <td   class="btn-success">Livre</td> -->
          <td class="btn-danger">Ocupada</td>

      </tr>
      <tr>
          <td class=" badge-info">Vaga 5</td>
          <td   class="btn-success">Livre</td>
          <!-- <td class="btn-danger">Ocupada</td> -->

      </tr>


    <tbody>
   <!-- <tbody  v-for="vaga in vagas" >
       <td class=" badge-info">@{
       {
       vaga.vaga}}</td>
       <td  v-if="vaga.
       bolsituacao == 0" class="btn-success">Livre</td>
       <td  v-if="vaga.bo
       lsituacao == 1" class="btn-danger">Ocupada</td>



    <tbody> -->
 </table>
</div>
<!-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue-resource@1.5.1"></script> -->
 <!-- // vagass       : ?=//json_encode($vagas) ?>, -->
<!-- <script type="text/javascript">

 var app = new Vue({
   el: '#app',
   data: {
     message: ['Hello Vue!','çkgçlkhg','çihflufolu'],
     // vagass : []
     vagas:'',
     urlBase    : "{{url('')}}",
 },
 // http :   {
 //     headers: {
 //         'X-CSRF-Token': $('meta[name=_token]').attr('content')
 //     }
 // },

 methods:{

     getVagas : function(){
                url = this.urlBase+ "/getvagas";
                console.log(url);
                this.$http.get(url)
                .then((response) => {
                    this.vagas = response.body;
                    // console.log(this.vaga);
                    // if (this.qtdProcesso != 0) {
                    //     this.urlProcesso = urlBase+"/publicacoes/3";
                    // }else {
                    //     this.urlProcesso = urlBase+"/publicacoes";
                    // }
                    // this.loading = false;
                });
            },

 }, created : function() {

        //     setInterval(() => {
    	// 	this.getVagas()
    	// }, 500)
        }
 })
 </script> -->
