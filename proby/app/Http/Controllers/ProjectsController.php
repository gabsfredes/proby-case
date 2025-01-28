<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    public function index(Request $request)
    {
        if (Auth::check()) {
            $allProjects = $this->objProject->paginate(5);
            if ($request->page > $allProjects->lastPage()) {
                return redirect()->route('dashboard', ['page' => 1]);
            }
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
        $project=$this->objProject->find($id);
        return view('create', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectRequest $request, string $id)
    {
        $upProject=$this->objProject->where(['id'=>$id])->update([
            'name' => $request->name,
            'start_date' => $request->start_date,
            'status' => $request->status,
            'description' => $request->description,
        ]);

        if ($upProject) {
            return redirect()->route('dashboard')->with('success', 'Projeto atualizado com sucesso!');
        } else {
            return redirect()->back()->with('error', 'Falha ao atualizar o projeto, tente novamente.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delProject=$this->objProject->destroy($id);

        return($delProject) ? "sim":"nao";
    }

  
}
