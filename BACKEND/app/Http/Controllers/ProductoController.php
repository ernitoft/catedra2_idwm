<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    public function index()
    {
        return Producto::all();
    }

    public function show($id)
    {
        return Producto::find($id);
    }

    public function store(Request $request)
    {   
        try{
            $validatedData = $request->validate([
                'nombre' => 'required|string',
                'descripcion' => 'required|string',
                'precio' => 'required|integer',
                'imagen' => 'required|string',
            ]);
            
        }
        catch(\Exception $e){
            return response()->json([
                'message' => 'Error al crear el producto',
                'error' => $e->getMessage()
            ], 400);
        }

        return Producto::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        try {
            $producto = Producto::where('id', $request->id)->update([
                'id' => $request->id,
                'nombre' => $request->nombre,
                'precio' =>  $request->precio,
                'imagen' =>  $request->imagen,
            ]);
            return response()->json($producto);
        } catch (\Exception $exception) {
            return response()->json([
                'message' => 'Error al actualizar el producto',
                'error' => $exception->getMessage()
            ], 400);
        }
    }

    public function delete(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return response()->noContent();
        return 204;
    }
}
