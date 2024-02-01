<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\LeadDeveloper;
use App\Models\Project;
use Illuminate\Support\Facades\Redirect;
use illuminate\View\View;

class LeadDeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $lead_developers = LeadDeveloper::all();
        return view ('LeadDeveloper.index')->with('LeadDeveloper', $lead_developers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view ('LeadDeveloper.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        LeadDeveloper::create($input);
        return redirect('LeadDeveloper')->with('flash message', 'Lead Developers Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $lead_developers = LeadDeveloper::find($id);
        return view('LeadDeveloper.show')->with('LeadDeveloper', $lead_developers);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $lead_developers = LeadDeveloper::find($id);
        return view('LeadDeveloper.edit')->with('LeadDeveloper', $lead_developers);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $lead_developers = LeadDeveloper::find($id);
        $input = $request->all();
        $lead_developers->update($input);
        return redirect('LeadDeveloper')->with('flash_message', 'LeadDevelopers Status Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        LeadDeveloper::destroy($id);
        return redirect('LeadDeveloper')->with('flash_message', 'LeadDevelopers Info deleted!');  
    }
}
