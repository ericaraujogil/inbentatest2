<?php
    $headers = [
    'x-inbenta-key' => 'nyUl7wzXoKtgoHnd2fB0uRrAv0dDyLC+b4Y6xngpJDY=',
    'Content-Type' => 'application/json'
    ];
    $body = [
    'secret' => 'eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJwcm9qZWN0IjoieW9kYV9jaGF0Ym
        90X2VuIn0.anf_eerFhoNq6J8b36_qbD4VqngX79-yyBKWih_eA1-
        HyaMe2skiJXkRNpyWxpjmpySYWzPGncwvlwz5ZRE7eg'
    ];
    $response = $req->post('https://api.inbenta.io/v1/auth', $headers, $body);
    $response = json_decode($response);
    $accessToken = $response->accessToken;
    $expiration = $response->expiration;
?>