<?php

namespace App\GraphQL\Mutations;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

final class UploadProfilePhoto
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        // $authUser = Auth::guard('api')->user();
        $user = User::find($args['id']);
        $file = $args['profile_photo'];
        $file_name = $file->getClientOriginalName();
        $folder = 'user/' . $user->id;
        $user->update([
            'profile_photo' => $file_name
        ]);
        $file->storeAs($folder, $file_name, env('DISK'));
        $user->refresh();
        return $user;
    }
}
