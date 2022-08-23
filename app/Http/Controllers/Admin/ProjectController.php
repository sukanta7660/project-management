<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\User;
use Helper;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;
use Throwable;

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
        $managers = User::whereRole('manager')->get();
        $staffs = User::whereRole('staff')->get();
        return view('admin.project.create', compact('managers', 'staffs'));
    }

    public function store(Request $request) :RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required | min:3',
            'project_leader' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'team_members' => 'required'
        ]);

        $startDate = Helper::dateFormatAlt($request->start_date, 'Y-m-d');
        $endDate = Helper::dateFormatAlt($request->end_date, 'Y-m-d');

        try {

            $project = Project::create([
                'name' => $request->name,
                'description' => $request->description,
                'manager_id' => $request->project_leader,
                'start_date' => $startDate,
                'end_date' => $endDate,
                'status' => $request->status
            ]);

            $project->team()->sync($request->team_members);

        }catch (Throwable $e) {
            $e->getMessage();
            Alert::error('OPPs!', 'Something Went Wrong');
            return redirect()->back()->with('errorMessage', 'Something Went Wrong');
        }
        Alert::success('Success!', 'Successfully created');
        return redirect()->route('admin.projects.index');
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
