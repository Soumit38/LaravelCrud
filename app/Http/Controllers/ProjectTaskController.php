<?php

namespace App\Http\Controllers;
use App\Project;
use App\Task;
use Illuminate\Http\Request;

class ProjectTaskController extends Controller
{

    public function update(Task $task){
        $task->update([
            'completed' => request()->has('completed')
        ]);

        return back();
    }

    public function store(Project $project){

        $attributes = request()->validate(['description' => 'required']);
        $project->addTask($attributes);

//        $project->addTask(request('description'));

       /* //another way

        Task::create([
            'project_id' => $project->id,
            'description' => request('description')
        ]);*/

        return back();
    }


}
