<?php

namespace App\Traits;

use App\Utils\AppConstant;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

trait ApiResponse
{
    protected $meta;
    protected $data;
    protected $paginate;
    protected $response;

    public function setMeta($key, $value)
    {
        return $this->meta[$key] = $value;
    }

    public function setData($key, $value)
    {
        return $this->data[$key] = $value;
    }

    protected function setPaginate($value)
    {
        $this->paginate = $value;
    }

    protected function setResponse()
    {
        $this->response['meta'] = $this->meta;
        if ($this->data !== null) {
            $this->response['data'] = $this->data;
        }
        if ($this->paginate !== null) {
            $this->response['paginate'] = $this->paginate;
        }
        $this->meta = array();
        $this->data = array();
        $this->paginate = array();
        return $this->response;
    }

    protected function setQueryExceptionResponse($message = '', $status = '')
    {
        if ($message === '')
            $message = __('auth.server_error');
        if ($status === '')
            $status = AppConstant::STATUS_FAIL;
        $this->meta = array();
        $this->data = array();
        $this->paginate = array();
        $this->meta['status'] = $status;
        $this->meta['message'] = $message;
        $this->response['meta'] = $this->meta;
        $this->meta = array();
        $this->data = array();
        $this->paginate = array();
        return $this->response;
    }

    protected function JWTauth($token)
    {
        $token_details = [
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ];
        return $token_details;
    }
}
