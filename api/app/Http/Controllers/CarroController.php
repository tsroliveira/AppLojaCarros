<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;
use Illuminate\Support\Facades\Log;
use Exception;  
use Illuminate\Support\Facades\File;

class CarroController extends Controller
{
    //public function index()
    //{
    //    $carros = Carro::all();
    //    return response()->json($carros);
    //}

    public function index(Request $request)
    {
        $query = Carro::query();

        if ($request->has('marcas') && !empty($request->input('marcas'))) {
            $marcas = explode(',', $request->input('marcas'));
            $query->whereIn('marca', $marcas);
        }

        if ($request->has('anos') && !empty($request->input('anos'))) {
            $anos = explode(',', $request->input('anos'));
            $query->whereIn('ano', $anos);
        }

        if ($request->has('precoMinimo')) {
            $query->where('preco', '>=', $request->input('precoMinimo'));
        }

        if ($request->has('precoMaximo')) {
            $query->where('preco', '<=', $request->input('precoMaximo'));
        }

        if ($request->has('modelo')) {
            $query->where('modelo', 'like', '%' . $request->input('modelo') . '%');
        }
    
        $carros = $query->get();

        return response()->json($carros);
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'ano' => 'required|integer',
            'preco' => 'required|numeric',
            'quilometragem' => 'required|integer',
            'imagem' => 'nullable|string',
        ]);
    
        try {
            $carro = Carro::create($request->all());
    
            if ($request->has('imagem')) {
                $carro->imagem = $request->imagem;
                $carro->save();
            }    

            Log::info('Carro criado com sucesso:', ['carro' => $carro]);
            return response()->json($carro, 201);
        } 
        catch (Exception $e) {
            Log::error('Erro ao criar carro: ' . $e->getMessage());
            return response()->json(['error' => 'Erro ao criar carro'], 500);
        }
    }

    public function show($id)
    {
        $carro = Carro::findOrFail($id);
        return response()->json($carro);
    }

    public function update(Request $request, $id)
    {
        $carro = Carro::findOrFail($id);

        $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'ano' => 'required|integer',
            'preco' => 'required|numeric',
            'quilometragem' => 'required|integer',
            'imagem' => 'nullable|string',        
        ]);

        $carro->fill($request->all());
    
        if ($request->has('imagem')) {
            $carro->imagem = $request->imagem;
        }
        $carro->save();
        return response()->json($carro);    
    }

    public function destroy($id)
    {
        $carro = Carro::findOrFail($id);
        $carro->delete();
        return response()->json(null, 204);
    }

    public function uploadImagem(Request $request)
    {
        if ($request->hasFile('imagem')) {
            $file = $request->file('imagem');
            $filename = 'carro_' . time() . '.' . $file->getClientOriginalExtension();
    
            $tempPath = $file->storeAs('public/tmp', $filename);  
            $finalPath = base_path('../web/src/img/cars/' . $filename);    
            File::move(storage_path('app/public/tmp/' . $filename), $finalPath);
    
            return response()->json(['success' => true, 'filename' => $filename]);
        }
    
        return response()->json(['success' => false, 'message' => 'No file uploaded.']);
    }
}
