<?php

namespace Zoe;

abstract class QuovoAbstract
{
    protected function get(QuovoApp $app, QuovoClient $qClient, $path, $options = [])
    {
        return $this->send($app, $qClient, $path, $options);
    }

    protected function post(QuovoApp $app, QuovoClient $qClient, $path, $options = [])
    {
        return $this->send($app, $qClient, $path, $options, 'POST');
    }

    protected function put(QuovoApp $app, QuovoClient $qClient, $path, $options = [])
    {
        return $this->send($app, $qClient, $path, $options, 'PUT');
    }

    protected function delete(QuovoApp $app, QuovoClient $qClient, $path, $options = [])
    {
        return $this->send($app, $qClient, $path, $options, 'DELETE');
    }

    private function send(QuovoApp $app, QuovoClient $qClient, $path, $options = [], $method = 'GET')
    {
        $client = $qClient->getClient();
        $token = $app->getAccessToken()->getValue();

        $defaultOptions = [
            'headers' => [
                'Authorization' => 'Bearer ' . $token->access_token->token
            ]
        ];

        $response = $client->request($method, $path, array_merge($defaultOptions, $options));

        return json_decode($response->getBody()->getContents());
    }
}