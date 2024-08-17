<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function docenti () {
        $arrayTeachers = [
            ['name'=> 'Nicola', 'surname'=> 'Gasparro', 'subject'=>'HTML, CSS, Bootstrap' ],
            ['name'=> 'Fabrizio', 'surname'=> 'Biancaniello', 'subject'=> 'Javascript' ],
            ['name'=> 'Emilia', 'surname'=> 'Salvo', 'subject'=>'PHP' ],
            ['name'=> 'Annalisa', 'surname'=> 'Caldarulo', 'subject'=> 'Laravel'],
            ['name'=> 'Luca', 'surname'=>'Venturi', 'subject'=>'Laravel'],
            ];
            return view('docenti', ['teachers'=> $arrayTeachers]);
}
    public function dettaglio ($name){
        // dd($name);
        $arrayTeachers = [
            ['name'=> 'Nicola', 'surname'=> 'Gasparro', 'subject'=>'HTML, CSS, Bootstrap' ],
            ['name'=> 'Fabrizio', 'surname'=> 'Biancaniello', 'subject'=> 'Javascript' ],
            ['name'=> 'Emilia', 'surname'=> 'Salvo', 'subject'=>'PHP' ],
            ['name'=> 'Annalisa', 'surname'=> 'Caldarulo', 'subject'=> 'Laravel'],
            ['name'=> 'Luca', 'surname'=>'Venturi', 'subject'=>'Laravel'],

            ];
            foreach($arrayTeachers as $teacher){
                if($name == $teacher['name']){
                   return view('teacher/dettaglioDocente', ['teacher'=> $teacher]);
                }
            }
        }
}
