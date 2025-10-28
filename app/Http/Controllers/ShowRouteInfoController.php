<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ShowRouteInfoController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        $route = $request->route();

        $routeInfo = [
            'uri' => $route->uri(),
            'name' => $route->getName(),
            'action' => $route->getActionName(), // Контролер і метод
            'method' => $request->getMethod(), // HTTP-метод
        ];

        return response()->json($routeInfo);
    }
}
