<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    use HasFactory;
    protected $table = 'dossiers';
    protected $primaryKey = 'id';//nom_proprietaire nom_dossier  etat_dossier
    protected $fillable = ['nom_proprietaire', 'nom_dossier', 'etat_dossier'];
}
