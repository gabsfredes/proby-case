<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;


class ProjectsController extends Controller
{
    public function index() {

        $projects=Project::paginate(5);

        return response()->json([
            'status' => true, 
            'message' => 'Listagem de projetos, 5 resultados por página',
            'data' => $projects
        ], 200);
    }

    public function show(Project $id) {

        $project=Project::find($id);

        if($project){
            return response()->json([
                'status' => true, 
                'message' => 'Projeto encontrado',
                'data' => $project
            ], 200);
        }else{
            return response()->json([
                'status' => false, 
                'message' => 'Projeto não encontrado'
            ], 404);
        }
    }

    public function store(Request $request) {

        $project = new Project();
        $project->name = $request->name;
        $project->description = $request->description;
        $project->start_date = $request->start_date;
        $project->status = $request->status;
        $project->save();

        return response()->json([
            'status' => true, 
            'message' => 'Projeto criado com sucesso',
            'data' => $project
        ], 201);
    }
}
