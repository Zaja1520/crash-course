<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserControllerApi extends Controller
{
    public function userlistings(Request $request){
        $users = User::all();
        return response()->json($users);
    }

    public function userProfile(Request $request, $id){
        $user = User::where('id', $id)->first();
        return response()->json($user);
    }
    public function updateUser(StorePostRequest $request, Post $post)
    {
        $post->update($request->all());
        
        return new PostResource($post);
    }
}
