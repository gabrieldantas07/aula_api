<?php
    class Response{
        public static function resposta($status=200,$message='sucess', $data=null){
            //Aqui vai o corpo da resposta
            header('Content-Type: application/json');

            //Checar se a API está ativa ou não
            if(!API_IS_ACTIVE){
                return json_encode([
                    'status' => 400,
                    'mensagem' => 'Api is not running',
                    'api_version' => API_VERSION,
                    'time_respose' => time(),
                    'datetime_response' => date('d-m-Y H:i:s'),
                'dados' => $data,

                ],JSON_PRETY_PRINT);
            }


            //retorno da função
            return json_encode([
                'status' => $status,
                'mensagem' => $message,
                'api_version' => API_VERSION,
                'time_respose' => time(),
                'datetime_response' => date('d-m-Y H:i:s'),
                'dados' => $data,
            ],JSON_PRETTY_PRINT);
        }
    }

?>