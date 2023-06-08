<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
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


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.index')->with('message', "Project '{$project->title}' (id: {$project->id}) cancellato.");
    }
}
