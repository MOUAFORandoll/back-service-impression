<?php

namespace App\Services;

use GuzzleHttp\Client;


class SocketService
{
    public $host_serveur_socket;


    private $client;

    const
        PAGINATION = 14;
    public function __construct(

        Client $client


    ) {

        $this->host_serveur_socket
            =
            "http://51.75.160.83:4001";
        //  "http://192.168.1.101:3000";
        $this->client =
            $client;
    }

    public function emitForRendezVousPrestataire($prestataireId, $rdv)
    {

        $this->Socekt_Emit('prestataire_rendez_vous', [
            'recepteur' => $prestataireId,
            'data'
            =>
            $rdv

        ]);
    }


    public function emitForRendezVousUser($userId, $rdv)
    {

        $this->Socekt_Emit('user_rendez_vous', [
            'recepteur' => $userId,
            'data'
            =>
            $rdv

        ]);
    }


    public function Socekt_Emit($canal, $data)
    {



        $first =   $this->client->request('GET',   $this->host_serveur_socket . "/socket.io/?EIO=4&transport=polling&t=N8hyd6w");
        $content =
            $first->getBody()->getContents();
        $index = strpos($content, 0);
        $res = json_decode(substr($content, $index + 1), true);
        $sid = $res['sid'];
        $this->client->request('POST',  $this->host_serveur_socket . "/socket.io/?EIO=4&transport=polling&sid={$sid}", [
            'body' => '40'
        ]);

        $dataEmit = [$canal, json_encode($data)];

        // $this->client->request('POST',  $this->host_serveur_socket ."/socket.io/?EIO=4&transport=polling&sid={$sid}", [
        //     'body' => sprintf('42["%s", %s]', $userID, json_encode($dataEmit))
        // ]);
        // $this->client->request('POST',  $this->host_serveur_socket ."/socket.io/?EIO=4&transport=polling&sid={$sid}", [
        //     'body' => sprintf('42%s',  json_encode($dataSign))
        // ]);
        $this->client->request('POST',  $this->host_serveur_socket . "/socket.io/?EIO=4&transport=polling&sid={$sid}", [
            'body' => sprintf('42%s',  json_encode($dataEmit))
        ]);
    }
}
