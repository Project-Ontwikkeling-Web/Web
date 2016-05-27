<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class InspraakVraag extends Model
{

    protected $table = 'inspraakvraag';

    protected $primaryKey = "id";

    function antwoorden(){
      return $this->hasMany('App\InspraakVraagAntwoord', 'inspraakvraag_id');
    }

    public function getRandomVragen($aantal){

      return $this->with('antwoorden')
              ->orderBy(DB::raw('RAND()'))
              ->take($aantal)
              ->get();
    }
<<<<<<< HEAD
    
    public function getByFase($id){
      return DB::table('inspraakvraag')
      ->where('fase_id', $id)
      ->get();
=======

    public function getQuestions($project_id){
      return $this->with('antwoorden')
              ->where('fase_id', $project_id)
              ->get();
>>>>>>> 8e98ab14e5cb33234b9ac5d43081ab0e1584d86d
    }
}
