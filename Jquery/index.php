<htlml>
    <haed>

        <meta charset="UTF-8">
        <script src="js/jquery.min.js"></script>
        <link rel="stylesheet" href="principal.css">

        <script>
          
          $(document).ready(function (){
            $("#abas ul li").click(function (){
              $("#abas ul li").removeClass("selecionado");
              $(this).addClass("selecionado");
              $(".conteudo").hide();
              //Guarda o id de quem eu cliquei
              var id = $(this).attr("id");
              $("."+id).show();
            });
          });

        </script>

</haed>
<body>

 <section id="cetral">
     <div id="abas">

         <ul>
             <li id="aba1" class="selecionado aba1"> 1 Tab </li>
         </ul>
         <ul>
             <li id="aba2" class="selecionado aba2"> 2 Tab </li>
         </ul>
         <ul>
             <li id="aba3" class="selecionado aba3"> 3 Tab </li>
         </ul>

     </div>
   <div id="conteudo1"    class="conteudo aba1">
       Conteúdo da 1 Aba
   </div>

     <div id="conteudo2"  class="conteudo aba2">
       Conteúdo da 2 Aba
   </div>

     <div id="conteudo3"  class="conteudo aba3">
       Conteúdo da 3 Aba
   </div>

 </section>

</body>
</htlml>








<?php
/*
  if (isset($_GET['acao'])){
      $acao = $_GET['acao'];
  }else{
      $acao = 'index';
  }

Switch ($acao){
    case 'index':
}

 include 'app/visoes';
 breack;*/