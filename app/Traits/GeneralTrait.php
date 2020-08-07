<?php

namespace App\Traits;

trait GeneralTrait
{


    public function getData($data = null, $status = true, $code = 200, $message = null, $options = null)
    {
        return response()->json([

            'data' => $data,
            'status' => $status,
            'code'  => $code, 
            'message' => $message,
            'options' => $options,

        ]);
    }


}
