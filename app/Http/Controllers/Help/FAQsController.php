<?php

namespace App\Http\Controllers\Help;

use App\Http\Controllers\Controller;
use App\Model\FAQs;
use Illuminate\Http\Request;

class FAQsController extends Controller
{

    public function index()
    {
        $data = FAQs::select(['title', 'description'])->get();

        return view('help.faq.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('help.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\FAQs  $fAQs
     * @return \Illuminate\Http\Response
     */
    public function show(FAQs $fAQs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\FAQs  $fAQs
     * @return \Illuminate\Http\Response
     */
    public function edit(FAQs $fAQs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\FAQs  $fAQs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FAQs $fAQs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\FAQs  $fAQs
     * @return \Illuminate\Http\Response
     */
    public function destroy(FAQs $fAQs)
    {
        //
    }
}
