<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function getAll()
    {
      return DB::table('project')->get();
    }

    public function createNew($naam, $beschrijving, $locatie){
      return DB::table('project')->insert([
        'naam' => $naam,
        'beschrijving' => $beschrijving,
        'locatie' => $locatie
      ]);
    }

    public function getById($id){
      return DB::table('project')
        ->where('id', $id)
        ->get();
    }

    public function updateProject($id, $project)
    {
      return DB::table('project')
      ->where('id', $id)
      ->update($project);
    }

    public function deleteProject($id)
    {
      return DB::table('project')
        ->where('id', $id)
        ->delete();
    }
}
