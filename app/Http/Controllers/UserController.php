<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function changeAvatar(Request $request){
        if($request->userAvatar != null){
            $path = Storage::putFile('public/usersAvatar', $request->file('userAvatar'));
            $user = User::where('id', auth()->user()->getAuthIdentifier())->first();
            $user->img = str_replace('public', 'storage', $path);
            $user->save();
        }
        return redirect('/profile');
    }
    public function changeUserData(Request $request){
        $name = $request->name;
        $about = $request->about;
        $user = User::where('id', auth()->user()->getAuthIdentifier())->first();
        if(!empty($name)) {$user->name = $name;}
        if(!empty($about)) {$user->about = $about;}
        $user->save();
        return json_encode(['result'=>'success']);
    }
}
