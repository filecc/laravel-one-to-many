<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.dashboard', compact('projects'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => ['required', 'max:255', 'min:5'],
            'image' => ['required'],
            'content' => ['required', 'min:10'],
            'status' => ['required'],
        ]);

        $data = $request->all();

        $newProject = new Project();
        $newProject->fill($data);
        $newProject->save();

        return redirect()->route('projects.show', $newProject);
    }

    public function update(Request $request, Project $project)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'max:255', 'min:5'],
            'image' => ['required'],
            'content' => ['required', 'min:10'],
            'status' => ['required'],
        ]);

        $data = $request->all();
        $project->update($data);
        return redirect()->route('projects.show', $project)->with('message', "Project '{$project->title}' (id: {$project->id}) modificato.");
    }


}
