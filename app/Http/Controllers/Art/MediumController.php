<?php

namespace App\Http\Controllers\Art;

use App\Http\Requests\ArtComponentRequest;
use App\Http\Controllers\Controller;
use App\Model\Art\Medium;
use Illuminate\Http\Request;

class MediumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(
            [
                'role_or_permission:Super-admin|read util|create util|delete util'
            ]
        );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Medium::all();

        return view('admin.art_component.medium', compact('data'));
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
    public function store(ArtComponentRequest $request)
    {
        Medium::create($request->all());

        flash($request->name . ' medium created successfully.')->success();

        return redirect()->route('art.medium.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\ArtUtilities\Medium  $medium
     * @return \Illuminate\Http\Response
     */
    public function show(Medium $medium)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\ArtUtilities\Medium  $medium
     * @return \Illuminate\Http\Response
     */
    public function edit(Medium $medium)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\ArtUtilities\Medium  $medium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medium $medium)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ArtUtilities\Medium  $medium
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medium $medium)
    {
        $medium->delete();

        //Flash Message
        flash($medium->name . ' deleted successfully.')->success();

        return redirect()->route('art.medium.index');
    }
}
