<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profile;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($username)
    {
        try
        {
            $user = User::whereUsername($username)->firstOrFail();
        }
        catch (ModelNotFoundException $e)
        {
            flash()->error('User is not found');
            return redirect('/');
        }
        return view('profile.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($username)
    {
        try
        {
            $user = User::whereUsername($username)->firstOrFail();
        }
        catch (ModelNotFoundException $e)
        {
            flash()->error('User is not found');
            return redirect('/');
        }
        return view('profile.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update($username , ProfileRequest $request)
    {
        $user = User::whereUsername($username)->firstOrFail();

        $user->profile->fill($request->all())->save();

        return redirect('/');
    }
}
