<?php

namespace App\Http\Controllers;

use App\Models\Respuesta;
use App\Models\Pregunta;
use App\Models\Examenpreguntas;
use Illuminate\Http\Request;

class ExamenpreguntasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generarExamen(){
        $pregunta = Pregunta::all('cvePregunta','desPregunta');
        $respuesta = Respuesta::all('cvePregunta','desRespuesta','correcta');        
        if($pregunta('cvepregunta')==$respuesta('cvepregunta'))        
        {
        $examen = $pregunta->random(1);
        $examen2 = $respuesta->random(5);           
        }
        $examen = $pregunta->random(1);
        $examen2 = $respuesta->random(5);           
        return response()->json(['pregunta' => $examen,'Respuesta'=>$examen2], 200);        
    }
}
