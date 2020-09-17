<?php

namespace App\Http\Controllers\Art;

use App\Http\Requests\ArtComponentRequest;
use App\Http\Controllers\Controller;
use App\Model\Art\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
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
        $data = Subject::all();

        return view('admin.art_component.subject', compact('data'));
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
        Subject::create($request->all());

        flash($request->name . ' subject created successfully.')->success();

        return redirect()->route('art.subject.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\ArtUtilities\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\ArtUtilities\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\ArtUtilities\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ArtUtilities\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();

        //Flash Message
        flash($subject->name . ' deleted successfully.')->success();

        return redirect()->route('art.subject.index');
    }
}
