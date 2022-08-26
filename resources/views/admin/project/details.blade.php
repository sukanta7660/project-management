@extends('layouts.master')
@section('title', 'Project Details')
@section('content')
    <section class="content">
        @if(session()->has('warning'))
            <div class="alert alert-warning">
                {{ session()->get('warning') }}
            </div>
        @endif
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Project Detail</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Tasks</h3>
                                        <div class="card-tools">
                                            <a
                                                data-toggle="modal"
                                                data-target="#taskModal"
                                                href="#"
                                                class="btn btn-sm btn-info btn-flat">
                                                <i class="fas fa-plus"></i>
                                                Add Task
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body p-1 table-responsive text-nowrap">
                                        <table class="table table-striped projects" id="myTable">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Task</th>
                                                <th>Description</th>
                                                <th>Assigned</th>
                                                <th class="text-center">Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse($project->tasks as $index => $row)
                                            <tr>
                                                <td>{{ $index+1 }}</td>
                                                <td>{{ $row->task }}</td>
                                                <td>{{ $row->description }}</td>
                                                <td>{{ $row->staff->name }}</td>
                                                <td class="project-state">
                                                    <span class="badge badge-secondary">{{ $row->status }}</span>
                                                </td>
                                                <td class="project-actions text-right">
                                                    <a
                                                        class="btn btn-info btn-sm"
                                                        href="#">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <a class="btn btn-danger btn-sm" href="#">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>No Data available</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">Discuss Here</h3>
                                    </div>
                                    <form
                                        action="{{ route('admin.projects.discussion.store') }}"
                                        method="post"
                                        enctype="multipart/form-data">
                                        <input type="hidden" value="{{ $project->id }}" name="id">
                                        @csrf
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="inputTask">Task</label>
                                                        <select
                                                            name="task" id="inputTask"
                                                            class="form-control custom-select" required>
                                                            <option selected="" disabled="">Select one</option>
                                                            @foreach($project->tasks as $key => $value)
                                                                <option value="{{ $value->id }}">{{ $value->task }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="inputSubject">Subject</label>
                                                        <input
                                                            type="text"
                                                            id="inputSubject"
                                                            class="form-control"
                                                            placeholder="subject"
                                                            name="subject"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputComment">Comment</label>
                                                <textarea
                                                    id="inputComment"
                                                    class="form-control"
                                                    rows="2"
                                                    cols="4"
                                                    required
                                                    name="comment"></textarea>
                                            </div>
                                        </div>

                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-info btn-sm btn-flat float-right">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="col-12">
                                <h4>Recent Activity</h4>
                                @forelse($project->discussion as $key => $discussion)
                                    <div class="post {{ ($key+1)%2 == 0 ? 'clearfix' : '' }}">
                                        <div class="user-block">
                                            <img class="img-circle img-bordered-sm" src="{{ asset('asset') }}/dist/img/avatar.png" alt="user image">
                                            <span class="username">
                                            <a href="#">{{ $discussion->user->name }}</a>
                                        </span>
                                            <span class="description">{{ $discussion->subject }} - {{ Helper::dateFormatAlt($discussion->created_at) }}</span>
                                        </div>

                                        <p>
                                            {{ $discussion->comment }}
                                        </p>
                                    </div>
                                @empty
                                    <h5>No discussion here</h5>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                        <h3 class="text-primary">
                            <i class="fas fa-paint-brush"></i>
                            {{ $project->name }}
                        </h3>
                        <p class="text-muted">
                            {{ $project->description }}
                        </p>
                        <br>
                        @php
                            $alert = "";
                            if ($project->status == 'pending') {
                              $alert = "warning";
                            }elseif ($project->status == 'in-progress') {
                              $alert = "info";
                            }else {
                              $alert = "success";
                            }
                        @endphp
                        <div class="text-muted">
                            <p class="text-sm">Start Date
                                <b class="d-block">{{ Helper::dateFormatAlt($project->start_date) }}</b>
                            </p>
                            <p class="text-sm">End Date
                                <b class="d-block">{{ Helper::dateFormatAlt($project->end_date) }}</b>
                            </p>
                            <p class="text-sm">Project Status
                                <b class="d-block">
                                    <span class="badge badge-{{ $alert }}">{{ $project->status }}</span>
                                </b>
                            </p>
                            <p class="text-sm">Project Manager
                                <b class="d-block">{{ $project->manager->name }}</b>
                            </p>
                        </div>
                        <h5 class="mt-5 text-muted">Team Members</h5>
                        <ul class="list-unstyled">
                            @forelse($project->team as $key => $value)
                                <li class="mb-2">
                                    <a href="" class="btn-link text-secondary">
                                        <img style="border-radius: 50%;" width="30" height="30" alt="Avatar" class="table-avatar " src="{{ asset('asset') }}/dist/img/avatar.png">
                                        &nbsp; {{ $value->name }}
                                    </a>
                                </li>
                            @empty
                                <li>
                                    No member added
                                </li>
                            @endforelse
                        </ul>
                        <div class=" mt-5 mb-3">
                            <a href="{{ route('admin.projects.index') }}" class="btn btn-sm btn-danger">Back</a>
                        </div>
                    </div>
                </div>
            </div>

            @include('admin.project.task-model')

        </div>

    </section>
@endsection
