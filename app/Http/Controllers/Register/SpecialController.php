<?php

namespace App\Http\Controllers\Register;

use App\Http\Requests\RegisterComponent;
use App\Http\Controllers\Controller;
use App\Model\Register\Special;
use Illuminate\Http\Request;

class SpecialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Special::all('id', 'name', 'description');

        return view('admin.register_component.special', compact('data'));
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
        Special::create($request->all());

        flash($request->name . ' added successfully.')->success();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Register\Special  $special
     * @return \Illuminate\Http\Response
     */
    public function show(Special $special)
    {
        dd($special);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Register\Special  $special
     * @return \Illuminate\Http\Response
     */
    public function edit(Special $special)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Register\Special  $special
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Special $special)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Register\Special  $special
     * @return \Illuminate\Http\Response
     */
    public function destroy(Special $special)
    {
        $special->delete();

        flash($special->name . ' successfully deleted.')->success();

        return redirect()->back();
    }
}
