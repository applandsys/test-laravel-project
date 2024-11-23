<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

abstract class BaseAction extends Controller
{

     /**
     * Return a Json response
     * @params mixed $data default value null , $config ,  $paginationConfig
     */
    public function responseDefault(mixed $data = null, mixed $config = null, mixed $paginationConfig = [], string $message = 'Request processed successfully', bool $success = true): JsonResponse
    {
        $response = [
            'success' => $success,
            'message' => $message
        ];

        if ($data || $data == []) {
            $response['data'] = $data;
        }

        if (! empty($config)) {
            $response['config'] = $config;
        }
        if ($paginationConfig) {
            foreach ($paginationConfig as $key => $paginationItem) {
                $response[$key] = $paginationItem;
            }
        }

        return response()->json($response, 200, [
            'Charset' => 'utf-8',
            'Content-Type' => 'application/json; charset=UTF-8'
        ]);
    }
}
