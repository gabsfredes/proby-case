<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index() {
        return response()->json([
            'status' => true, 
            'message' => 'Listagem de projetos'], 200);
    }
}
