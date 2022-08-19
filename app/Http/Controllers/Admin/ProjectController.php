<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProjectController extends Controller
{
    public function index() :View
    {
        $projects = Project::with(['manager', 'team'])
            ->orderByDesc('created_at')
            ->get()
        ;
        return view('admin.project.index', compact('projects'));
    }

    public function create() :View
    {
        return view('admin.project.create');
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
