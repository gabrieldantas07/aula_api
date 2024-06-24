<?php
     //AQUI VAI SER A NOSSA APLICAÇÃO
     require_once __DIR__ . '/../../api/config.php';
     require_once __DIR__ . '/../../api/response.php';

     $data = require_once __DIR__ . '/../../api/data.php';

     $nomes = [];
     foreach($data as $item){
      $nomes[] = $item['nome'];
     }

    // if(API_IS_ACTIVE){
     //   echo Response::resposta(200, 'sucess', [
      //      'versao_api' => API_VERSION,
      //      'status' => 'ativa',
        //]);
     //}else{
       // echo Response::resposta(200, 'sucess', [
      //      'versao_api' => API_VERSION,
       //     'status' => 'manutenção',
       // ]);
    // }

   // echo Response:: resposta(200,'sucess',[
   //     'version' => API_VERSION,
   //     'status' => 'maintenance'
   // ]);

   echo Response::resposta(200,'sucess', $nomes);
?>