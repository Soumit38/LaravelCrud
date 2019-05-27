<?php

namespace App\Http\Controllers;

use App\Project;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){

        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function create(){

        return view('projects.create');
    }


    public function store(){

        $attributes = request()->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:3'
        ]);

        Project::create($attributes);

/*      // another fucking way
        request()->validate([
           'title' => 'required|min:3',
            'description' => 'required|min:3'
        ]);
        Project::create(request(['title', 'description']));
*/

/*      //another way
        Project::create([
           'title' => request('title'),
           'description' => request('description')
        ]);
        */
/*      // one way
        $project = new Project();
        $project->title = request('title');
        $project->description = request('description');
        $project->save();*/

        return redirect('/projects');
    }

    /*
     * example.com/projects/1/edit
    */
    public function edit(Project $project){

        return view('projects.edit', compact('project'));
    }

    public function update(Project $project){

        $project->update( request(['title', 'description']) );
/*      //another way
        $project->title = request('title');
        $project->description = request('description');
        $project->save();
*/
        return redirect('/projects');
    }

    /*
     * example.com/projects/1/delete
     */
    public function destroy(Project $project){

//        Project::findOrFail($id)->delete();
        $project->delete();

        return redirect('/projects');
    }

    public function show(Project $project){

//        $project = Project::findOrFail($id);

        return view('projects.show', compact('project'));
    }




}
















