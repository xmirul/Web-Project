<?php

namespace App\Http\Controllers;

use App\Models\LeadDeveloper;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Project;
use illuminate\View\View;
use illuminate\Support\Facades\Gate;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $projects = Project::all();
        return view ('projects.index')->with('projects', $projects);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        {
         return view('projects.create');
     
   } 
}

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {

        $input = $request->all();
        Project::create($input);
        return redirect('projects')->with('flash message', 'Managers Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $projects  = Project::find($id);
        return view('projects.show')->with('projects', $projects);
  
   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $projects = Project::find($id);
        return view('projects.edit')->with('projects', $projects);
  
   }
   
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $projects = Project::find($id);
        $input = $request->all();
        $projects->update($input);
        return redirect('projects')->with('flash_message', 'Project Status Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Project::destroy($id);
        return redirect('projects')->with('flash_message', 'Projects List deleted!');
  
    }


}