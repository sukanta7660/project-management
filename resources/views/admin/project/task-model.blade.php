<div class="modal fade" id="taskModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form
                action="{{ route('admin.projects.task.store') }}"
                method="post"
                enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="project_id" value="{{ $project->id }}">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputName">Task</label>
                        <input
                            type="text"
                            id="inputName"
                            placeholder="Task Name"
                            class="form-control"
                            name="name">
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Description</label>
                        <textarea
                            placeholder="write here"
                            id="inputDescription"
                            class="form-control"
                            rows="4"
                            name="description"></textarea>
                    </div>
                    @php
                    $statuses = config('sites.task_statuses');
                    @endphp
                    <div class="form-group">
                        <label for="inputStatus">Status</label>
                        <select
                            id="inputStatus"
                            class="form-control custom-select"
                            name="status"
                        >
                            <option selected="" disabled="">Select one</option>
                            @foreach($statuses as $item)
                            <option value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputProjectLeader">Assign To</label>
                        <select
                            name="staff" id=""
                            class="form-control custom-select" required>
                            <option selected="" disabled="">Select one</option>
                            @foreach($project->team as $key => $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm btn-flat" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info btn-sm btn-flat">Add Task</button>
                </div>
            </form>
        </div>
    </div>
</div>
