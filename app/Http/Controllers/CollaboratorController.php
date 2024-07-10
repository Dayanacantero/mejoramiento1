<?php

namespace App\Http\Controllers;

use App\Models\collaborator;
use Illuminate\Http\Request;

class CollaboratorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     
        $collaborators = Collaborator::orderBy('id', 'name')->get();
        return view('collaborator.listar', compact('collaborators'));
        //return  $cursos;
    }

    public function create()
    {
        return view('collaborator.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $collaborator= new Collaborator();
        $collaborator->name=$request->name;
        $collaborator->save();
        return $collaborator;
    }

    /**
     * Display the specified resource.
     */
    public function show(collaborator $collaborator)
    {
        return view('collaborator.show', compact('collaborator'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(collaborator $collaborator)
    {
    
        return view('collaborator.edit',compact('collaborator'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, collaborator $collaborator)
    {
        $collaborator->name = $request->name;
        $collaborator->save();
        return redirect()->route('collaborator.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(collaborator $collaborator)
    {
        $collaborator->delete();
        return redirect()->route('collaborator.index');
    }
}
