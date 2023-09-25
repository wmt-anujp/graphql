<?php

namespace App\GraphQL\Mutations;

use App\Models\User;
use App\Traits\ApiResponse;
use App\Utils\AppConstant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

final class Login
{
    use ApiResponse;
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $user = User::where(['email' => $args['email']])->first();
        $token = Auth::attempt(['email' => $args['email'], 'password' => $args['password']]);
        if ($token) {
            $this->setMeta('status', AppConstant::STATUS_OK);
            $this->setMeta('message', 'Login Successful');
            $this->setData('access_token', $token);
            $this->setData('token_type', 'bearer');
            $this->setData('user', $user);
            return response()->json($this->setResponse(), AppConstant::OK);
        } else {
            return response(['status' => 'Fail']);
        }
    }
}
