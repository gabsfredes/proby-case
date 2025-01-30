<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;


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

    public function show(Project $id): JsonResponse {

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

    public function store(ProjectRequest $request): JsonResponse {
        DB::beginTransaction();
        try {
            Project::create([
                'name' => $request->name,
                'start_date' => $request->start_date,
                'status' => $request->status,
                'description' => $request->description,
                'created_by' => Auth::id()
            ]);

            DB::commit();

            return response()->json([
                'status' => true, 
                'message' => 'Projeto cadastrado com sucesso'
            ], 201);

        } catch (Exception $e){
            DB::rollBack();

            return response()->json([
                'status' => false, 
                'message' => 'Ocorreu um erro ao cadastrar projeto'
            ], 400);
        }
    }

    public function update(ProjectRequest $request, Project $id): JsonResponse {
        DB::beginTransaction();
        try {
                $id->update([
                    'name' => $request->name,
                    'start_date' => $request->start_date,
                    'status' => $request->status,
                    'description' => $request->description
                ]);

                DB::commit();
 
                return response()->json([
                    'status' => true, 
                    'message' => 'Projeto atualizado com sucesso'
                ], 200);

        } catch (Exception $e){
            DB::rollBack();

            return response()->json([
                'status' => false, 
                'message' => 'Ocorreu um erro ao atualizar projeto'
            ], 400);
        }
    }

    public function destroy(Project $id): JsonResponse {
        try {
            $id->delete();

            return response()->json([
                'status' => true, 
                'message' => 'Projeto deletado com sucesso'
            ], 200);

        } catch (Exception $e){

            return response()->json([
                'status' => false, 
                'message' => 'Ocorreu um erro ao deletar projeto'
            ], 400);
        }
    }
}
