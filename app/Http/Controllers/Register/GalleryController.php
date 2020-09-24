<?php

namespace App\Http\Controllers\Register;

use App\Http\Requests\RegisterComponent;
use App\Http\Controllers\Controller;
use App\Model\Register\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Gallery::all('id', 'name', 'description');

        return view('admin.register_component.gallery', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterComponent $request)
    {
        Gallery::create($request->all());

        flash($request->name . ' added successfully.')->success();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Register\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        dd($gallery);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Register\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Register\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Register\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();

        flash($gallery->name . ' successfully deleted.')->success();

        return redirect()->back();
    }
}
