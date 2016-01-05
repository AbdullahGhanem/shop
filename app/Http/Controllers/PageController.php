<?php

namespace App\Http\Controllers;


use App\Page;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\PageRequest;

use Illuminate\Http\Request;

class PageController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth', ['except' => ['show']]);
    //     $this->middleware('role:admin', ['except' => ['show']]);
    // }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $pages = Page::all();

        return view('back.page.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('back.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(PageRequest $request)
    {

        Page::create($request->all());

        flash()->success('your page is created');

        return redirect('admin/pages');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $page = Page::whereSlug($id)->firstOrFail();


        return view('page.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $page = Page::findOrFail($id);
        return view('back.page.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update($id , PageRequest $request)
    {
        $page = Page::findOrFail($id);

        $page->update($request->all());

        return redirect('admin/pages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $page = Page::find($id);
        $page->delete();

        return redirect()->back();
    }


    public function changeLang(Request $request)
    {
        if($request->input('lang') =='ar'){
            \Session::put('lang', $request->input('lang'));
        }elseif($request->input('lang') == 'en'){
            \Session::put('lang', $request->input('lang'));
        }
        return redirect()->back();
    }

    public function dashboard()
    {
        return view('back.page.dashboard');
    }
}
