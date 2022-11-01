<?php

namespace App\Services\Traits;

use Illuminate\Support\Facades\Http;

class ConsumeExternalService
{
    public function headers(array $headers = [])
    {
        array_push($headers, [
            'Accept' => 'application/json'
        ]);
        return Http::withHeaders($headers);
    }

    public function request(
        string $method,
        string $endPoint,
        array  $formParams = [],
        array  $headers = []
    )
    {
        $this->headers($headers)
            ->$method($this->url . $endPoint, $formParams);
    }
}
