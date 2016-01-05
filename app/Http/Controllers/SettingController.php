<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingRequest;
use Illuminate\Http\Request;

use Auth;
use App\User;
use Image;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
        $user = Auth::user();

        return view('settings.baseInformation',compact('user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function changePassword()
    {
        $user = Auth::user();

        return view('settings.changePassword',compact('user'));
    }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function PostChangePassword(Request $request)
    {


        $this->validate($request, [
            'old_password' => 'required',
            'password'     => 'required|confirmed',
        ]);

        $credentials = $request->only(
            'old_password', 'password', 'password_confirmation'
        );
        $user = Auth::user();

        if ($user->password = bcrypt($credentials['old_password'])){

            $user->password = bcrypt($credentials['password']);
            $user->save();

            flash()->success('your password is change');
            return redirect('/');

        }else {

            flash()->warning('your password is not change');
            return redirect()->back();            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function deleteAccount()
    {
        $user = Auth::user();

        return view('settings.deleteAccount',compact('user'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request)
    {
        $user = Auth::user();
        $profile = $user->profile;

        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->save();

        $profile->location = $request->location;
        $profile->bio = $request->bio;
        $profile->job = $request->job;
        $profile->save();

        if($request->hasFile('avatar'))
        {
  
            $image = $request->file('avatar');
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('img/profiles/' . $filename);
 
                Image::make($image->getRealPath())->resize(200, 200)->save($path);

            $profile->img = $filename ;
            $profile->save();
        }

        return redirect()->back();
    }
}
