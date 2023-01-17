<?php

namespace App\Traits;

trait HttpResponses {

    protected function success(mixed $data, ?string $message = null, int $code = 200) {

        return response()->json([
            'status' => 'La solicitud fue exitosa',
            'message' => $message,
            'data' => $data
        ], $code);

    }

    protected function error(mixed $data, ?string $message = null, int $code) {

        return response()->json([
            'status' => 'Ha ocurrido un error...',
            'message' => $message,
            'data' => $data
        ], $code);

    }

}
