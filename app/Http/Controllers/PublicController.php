<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\passport;
use App\Role;
use App\Country;
use App\Textblog;
use App\video;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //one to one
        // $employee = Employee::find(1)->passport;
        // return view('welcome',compact('employee'));

        //one to many
        // $employees = Employee::find(1)->mobiles;
        // return view('welcome',compact('employees'));

        //many to many
        // $roles= Employee::find(1)->roles;
        //return $roles
        //inverse many to many
        // $employees = Role::find(2)->employees;
        // return $employees;

        //hasManyThrough
        // $posts = Country::find(1)->posts;
        // return $posts;

        //polymorphic rellation:
        //for textblog-comment
        // $textblog = Textblog::first()->comments;
        // return $textblog;
        //for video-comment
        // $video = video::find(1)->comments; 
        // return $video ;

        //many to many morph
         $textblog = Textblog::first()->tags;
         return $textblog;
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
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
