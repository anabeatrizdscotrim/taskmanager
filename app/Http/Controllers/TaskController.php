<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskEntity;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        // Obtendo os parâmetros de paginação e ordenação da solicitação
        $perPage = $request->query('per_page', 10);
        $sortField = $request->query('sort', 'id');
        $sortDirection = $request->query('sort_direction', 'asc');

        // Construindo a consulta com a ordenação
        $query = TaskEntity::orderBy($sortField, $sortDirection);

        // Obtendo os registros paginados
        $tasks = $query->paginate($perPage);

        return response()->json($tasks);
    }

    public function store(Request $request)
    {
        // Definindo as regras de validação
        $rules = [
            'title'=>'required',
            'description'=>'required',
            'status' => ['required', Rule::in(['Concluída', 'Não concluída'])],
        ];

        // Realizando a validação
        $validator = Validator::make($request->all(), $rules);

        // Verificando se a validação falhou
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $tasks = new TaskEntity;
        $tasks->title = $request->input('title');
        $tasks->description = $request->input('description');
        $tasks->status = $request->input('status');
        $tasks->save();

        return response()->json($tasks, 201);
    }

    public function show($id)
    {
        $tasks = TaskEntity::find($id);

        if (!$tasks) {
            return response()->json(['message' => 'Task não encontrada'], 404);
        }

        return response()->json($tasks);
    }

    public function update(Request $request, $id)
    {
        $tasks = TaskEntity::find($id);

        if (!$tasks) {
            return response()->json(['message' => 'Task não encontrada'], 404);
        }

         // Definindo as regras de validação
         $rules = [
            'title'=>'required',
            'description'=>'required',
            'status' => ['required', Rule::in(['Concluída', 'Não concluída'])],
        ];

        // Realizando a validação
        $validator = Validator::make($request->all(), $rules);

        // Verificando se a validação falhou
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $tasks->title = $request->input('title');
        $tasks->description = $request->input('description');
        $tasks->status = $request->input('status');
        
        $tasks->save();

        return response()->json($tasks);
    }

    public function destroy($id)
    {
        $tasks = TaskEntity::find($id);

        if (!$tasks) {
            return response()->json(['message' => 'Task não encontrada'], 404);
        }

        $tasks->delete();

        return response()->json(['message' => 'Task removida com sucesso']);
    }
}
