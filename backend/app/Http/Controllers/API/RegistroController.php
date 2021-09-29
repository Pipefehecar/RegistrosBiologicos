<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\RegistroBiologico;
Use Log;

class RegistroController extends Controller
{
    
        // https://carbon.now.sh/
        public function getAll(){
          $data = RegistroBiologico::get();
          return response()->json($data, 200);
        }
    
        public function create(Request $request){
          // return response( $request);
          RegistroBiologico::create($request->all());
          // $data['especie'] = $request['especie'];
          // $data['familia'] = $request['familia'];
          // $data['nombre_comun'] = $request['nombre_comun'];
          // $data['proyecto'] = $request['proyecto'];
          // $data['base del registro'] = $request['base del registro'];
          // $data['identificacion_year'] = $request['email'];
          // $data['departamento'] = $request['departamento'];
          // $data['municipio'] = $request['municipio'];
          // $data['localidad'] = $request['localidad'];
          // $data['latitud'] = $request['latitud'];
          // $data['longitud'] = $request['longitud'];
          // $data['autor'] = $request['autor'];
          // $data['fecha_captura'] = $request['fecha_captura'];
          // $data['ecoregion'] = $request['ecoregion'];
          // RegistroBiologico::create($data);
          return response()->json([
              'message' => "Successfully created",
              'success' => true
          ], 200);
          
        }
    
        public function delete($id){
          $res = RegistroBiologico::find($id)->delete();
          return response()->json([
              'message' => "Successfully deleted",
              'success' => true
          ], 200);
        }
    
        public function get($id){
          $data = RegistroBiologico::find($id);
          return response()->json($data, 200);
        }
    
        public function update(Request $request,$id){
          $data['familia'] = $request['familia'];
          $data['nombre_comun'] = $request['nombre_comun'];
          $data['proyecto'] = $request['proyecto'];
          $data['base del registro'] = $request['base del registro'];
          $data['identificacion_year'] = $request['email'];
          $data['departamento'] = $request['departamento'];
          $data['municipio'] = $request['municipio'];
          $data['localidad'] = $request['localidad'];
          $data['latitud'] = $request['latitud'];
          $data['longitud'] = $request['longitud'];
          $data['autor'] = $request['autor'];
          $data['fecha_captura'] = $request['fecha_captura'];
          $data['ecoregion'] = $request['ecoregion'];
          RegistroBiologico::find($id)->update($data);
          return response()->json([
              'message' => "Successfully updated",
              'success' => true
          ], 200);
        }
}
