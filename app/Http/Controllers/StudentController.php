<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    public $students = [
    
        ['id' => 1, 'name' => 'Arianna', 'surname' => "D'Alessandro", 'age' => 18, 'subject' => 'JavaScript'],
        ['id' => 2, 'name' => 'Gabriele', 'surname' => 'Contino', 'age' => 19, 'subject' => 'PHP'],
        ['id' => 3, 'name' => 'Leonardo', 'surname' => 'Dal Maso', 'age' => 20 , 'subject' => 'CODING AI'],
        ['id' => 4, 'name' => 'Claudio', 'surname' => 'Lipari', 'age' => 21, 'subject' => 'Cybersec'],
    
    ];

    public function students(){

        //CREO UNA BASE DI DATI RELATIVA A UN TOT NUMERO DI STUDENTI
        // L'abbiamo messo a disposizione della rotta
    
        return view('chiSiamo', ['students' => $this->students ]);
    }

    public function detailStudent($id){

      

        foreach($this->students as $student){
            // se $id che mi passa l'utente al click sul bottone della card, è uguale all'id che trovo nella mia base di dati relativa a quello studente in $student['id'], allora dammi accesso a tutti i dati proprio di quello studente, sulla vista dettaglio Studente
            if($id == $student['id']){
                return view('dettaglioStudente', ['student' => $student]);
            }

        }
    
    }
}
