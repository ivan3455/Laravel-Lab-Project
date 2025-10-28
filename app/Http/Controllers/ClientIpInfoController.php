<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ClientIpInfoController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        $clientIp = $request->ip();

        $allIps = $request->ips();

        $data = [
            'status' => 'success',
            'client_ip' => $clientIp,
            'all_client_ips_forwarded' => $allIps,
            'info' => 'JSON format.'
        ];

        // Повертаємо відповідь JSONP із власним заголовком
        return response()
            ->json($data)
            ->withCallback('callback') // Загортаємо в JSONP
            ->header('Content-Language', 'uk'); // Додаємо заголовок
    }
}
