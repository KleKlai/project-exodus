<?php

namespace App\Http\Controllers\Help;

use App\Http\Controllers\Controller;
use App\Model\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::first();

        return view('help.about.index', compact('about'));
    }

    public function edit(About $about)
    {
        return view('help.about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        // Validate Data
        $request->validate([
            'about' => 'required'
        ]);

        $about->update($request->all());

        //Throw success message
        flash('About page update successfully')->success();

        return redirect('/about');
    }
}
