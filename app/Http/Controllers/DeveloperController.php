<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Developer;
use App\Models\Project;
use Illuminate\Support\Facades\Redirect;
use illuminate\View\View;

class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $developers = Developer::all();
        return view ('developers.index')->with('developers', $developers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view ('developers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Developer::create($input);
        return redirect('developers')->with('flash message', 'Developers Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $developers = Developer::find($id);
        return view('developers.show')->with('developers', $developers);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $developers = Developer::find($id);
        return view('developers.edit')->with('developers', $developers);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $developers = Developer::find($id);
        $input = $request->all();
        $developers->update($input);
        return redirect('developers')->with('flash_message', 'Developers Status Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Developer::destroy($id);
        return redirect('developers')->with('flash_message', 'Developers Info deleted!');  
    }
}
