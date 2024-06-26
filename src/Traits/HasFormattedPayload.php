<?php

namespace Patrickmwangi017\Kopokopo\Traits;

trait HasFormattedPayload
{
    protected static function success(array|string $data): array
    {
        return [
            'status' => 'success',
            'data' => $data,
        ];
    }

    protected static function postSuccess($data): array
    {
        return [
            'status' => 'success',
            'location' => $data->getHeaders()['location'][0],
        ];
    }

    protected static function error(array|string $data): array
    {
        return [
            'status' => 'error',
            'data' => $data,
        ];
    }
}
