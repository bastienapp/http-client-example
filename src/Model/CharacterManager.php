<?php

namespace App\Model;

use Symfony\Component\HttpClient\HttpClient;

class CharacterManager
{
    public function getAll(): array
    {
        $client = HttpClient::create();
        $response = $client->request('GET', 'http://hp-api.herokuapp.com/api/characters');

        return $response->toArray();
    }

    public function getAllByHouse(string $house): array // $house: Griffindor
    {
        $client = HttpClient::create();
        $response = $client->request('GET', "http://hp-api.herokuapp.com/api/characters/house/$house");

        return $response->toArray();
    }
}
