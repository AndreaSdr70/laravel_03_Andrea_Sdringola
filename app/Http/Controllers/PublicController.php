<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage () {
        $title = 'HACKADEMY 142';
        return view('welcome', ['titolo'=> $title]); //passaggio di dati alla vista
        //chiavi dell'array - NOME DELLA VARIABILE SULLA VISTA
        //valore - dato in sè
    }

    public function chiSiamo () {

        $arrayStudents = [
            ['id'=>1, 'name'=>'Leonardo', 'surname'=>'Di Napoli'],
            ['id'=>2, 'name'=>'Andrea', 'surname'=>'Asaro'],
            ['id'=>3, 'name'=>'Michele', 'surname'=>'Sette'],
            ['id'=>4, 'name'=>'Emanuele', 'surname'=>'Pelliccia'],
    
        ];
        return view('chiSiamo', ['students' => $arrayStudents]);
    }

public function dettaglio($id){

    $arrayStudents = [
        ['id'=>1, 'name'=>'Leonardo', 'surname'=>'Di Napoli'],
        ['id'=>2, 'name'=>'Andrea', 'surname'=>'Asaro'],
        ['id'=>3, 'name'=>'Michele', 'surname'=>'Sette'],
        ['id'=>4, 'name'=>'Emanuele', 'surname'=>'Pelliccia'],

    ];
        foreach($arrayStudents as $student){
            if($id == $student['id']){
                return view('student/detail', ['student'=> $student]); //occhio!!!
            }
        }
        
    }

}
