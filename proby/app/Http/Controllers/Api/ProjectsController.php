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
}
