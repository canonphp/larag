<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends BaseController
{
    //

    public function index()
    {

        return view('admin.admin.index');
    }

    public function create()
    {
        return view('admin.admin.create');

    }

    public function store()
    {

    }

    public function show()
    {
        return view('admin.admin.show');

    }

    public function edit()
    {

        return view('admin.admin.edit');
    }

    public function update()
    {

    }

    public function destroy()
    {

    }




    public function role()
    {
        return view('admin.admin.role');
    }


    public function rule()
    {
        return view('admin.admin.rule');
    }

    public function roleadd()
    {
        return view('admin.admin.roleadd');
    }

}
