<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Subject;
use App\Http\Requests\SubjectStoreRequest;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Subjects=Subject::with('department')->orderBy('id','desc')->get();
        return view('admin.subject.show',compact('Subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Departments=Department::orderBy('id','desc')->get();
        return view('admin.subject.create',compact('Departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubjectStoreRequest $request)
    {
        $request->validated();
        Subject::create($request->except('_token'));
        return redirect('/admin-subject')->with('message','Subject Add Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Subject=Subject::find($id);
        $Departments=Department::orderBy('id','desc')->get();
        return view('admin.subject.edit',compact('Departments','Subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubjectStoreRequest $request, $id)
    {
        $request->validated();
        Subject::where('id',$id)->update($request->except('_token','_method'));
        return redirect('/admin-subject')->with('message','Subject Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
