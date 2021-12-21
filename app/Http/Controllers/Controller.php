<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public const ERROR_VALIDATION_CODE = 201;
    public const ERROR_SERVICE_UNAVAILABLE = 503;
    public const ERROR_NOT_FOUND = 404;
    public const ERROR_MESSAGE_NOT_FOUND = 'ID NOT FOUND';
    public const ERROR_FAILED_TO_INSERT = 'FAILED TO CREATE DATA';
    public const SUCCESS_MESSAGE_UPDATE = 'SUCCESS TO UPDATE DATA';
    public const ERROR_MESSAGE_WHEN_SAVE = 'ERROR TO UPDATE DATA';
    public const SUCCESS_DELETE_DATA = 'SUCCESS TO DELETE DATA';
    public const ERROR_DELETE_DATA = 'ERROR TO DELETE DATA';
    protected const VIDEO_MIME= ['mp4','flv','m3u8','ts','3gp','mov','avi','wmv'];
    protected const IMAGE_MIME= ['jpeg','JPEG','jpg','JPG','png','PNG'];

    protected function successResponse($data = null, $message = "success", $code = 200)
    {
        return response()->json([
            'status'=> 'success',
            'message' => $message,
            'code' => $code,
            'data' => $data
        ], $code);
    }

    protected function errorResponse($message, $code)
    {
        return response()->json([
            'status'=>'error',
            'message' => $message,
            'code' => $code,
            'data' => null
        ], 200);
    }

    protected function now(){
        return date('Y-m-d H:i:s');
    }
}
