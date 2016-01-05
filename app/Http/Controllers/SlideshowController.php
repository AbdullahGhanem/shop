<?php

namespace App\Http\Controllers;


use App\Slideshow;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\SlideshowRequest;

use Illuminate\Http\Request;

class SlideshowController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
        $this->middleware('role:admin', ['except' => ['show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $slideshows = Slideshow::paginate(8);

        return view('admin.slideshow.index', compact('slideshows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.slideshow.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(SlideshowRequest $request)
    {

        Slideshow::create($request->all());

        flash()->success('your slideshow is created');

        return redirect('admin/slideshows');
    }


    public function show($id)
    {
        $slideshow = Slideshow::find($id);

        return view('admin.slideshow.show',compact('slideshow'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $slideshow = Slideshow::findOrFail($id);
        return view('admin.slideshow.edit', compact('slideshow'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update($id , SlideshowRequest $request)
    {
        $slideshow = Slideshow::findOrFail($id);

        $slideshow->update($request->all());

        return redirect('admin/slideshows');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $slid = Slideshow::find($id);
        $slid->delete();

        return redirect()->back();
    }
}
