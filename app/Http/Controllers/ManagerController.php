<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Manager;
use App\Models\Project;
use Illuminate\Support\Facades\Redirect;
use illuminate\View\View;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $managers = Manager::all();
        return view ('managers.index')->with('managers', $managers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view ('managers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {

        $input = $request->all();
        Manager::create($input);
        return redirect('managers')->with('flash message', 'Managers Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $managers = Manager::find($id);
        return view('managers.show')->with('managers', $managers);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $managers = Manager::find($id);
        return view('managers.edit')->with('managers', $managers);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $managers = Manager::find($id);
        $input = $request->all();
        $managers->update($input);
        return redirect('managers')->with('flash_message', 'Managers Status Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Manager::destroy($id);
        return redirect('managers')->with('flash_message', 'Managers Info deleted!');  
    }
}
