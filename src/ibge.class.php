<?php

namespace Search; # Verificar se esse nome esta correto

class Ibge{
    private $url = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados/';

    public function getUf($estado): array{
        $estado = preg_replace("/[^0-9]/im","",$estado);
        $config = array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
            ),
        );

        $content = stream_context_create($config);
        $result = file_get_contents($this->url . $estado . "/mesorregioes", false, $content);

        return (array) json_decode($result);
    }
}