<?php
     //AQUI VAI SER A NOSSA APLICAÇÃO
     require_once __DIR__ . '/../../api/config.php';
     require_once __DIR__ . '/../../api/response.php';

     $data = require_once __DIR__ . '/../../api/data.php';

     //verificar se url veio de alguma identificação do cliente

     if(isset($_GET['id'])){
      $id = $_GET['id'];

     }else{
      echo Response::resposta(400,'error','Necessário informar o id');
      exit;
     }

     if($id < 0 || $id > count($data) -1){
      echo Response::resposta(400, 'error', 'Cliente não encontrado');
      exit;
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

   echo Response::resposta(200,'sucess', $data[$id]);
?>