<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{
    private $objUser;
    private $objProject;

    public function __construct()
    {
        $this->objUser = new User();
        $this->objProject = new Project();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $allProjects = $this->objProject->all()->sortBy('start_date');
            return view('dashboard', compact('allProjects'));
        } else {
            return view('welcome');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectRequest $request)
    {  
        $newProj=$this->objProject->create([
            'name' => $request->name,
            'start_date' => $request->start_date,
            'status' => $request->status,
            'description' => $request->description,
            'created_by' => Auth::id()
        ]);

        if ($newProj) {
            return redirect()->route('dashboard')->with('success', 'Projeto criado com sucesso!');
        } else {
            return redirect()->back()->with('error', 'Falha ao inserir o projeto, tente novamente.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $project=$this->objProject->find($id);
        return view('show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

  
}
