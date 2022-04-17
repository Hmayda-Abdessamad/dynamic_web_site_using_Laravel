<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    use HasFactory;
    protected $table = 'professeurs';
    protected $primaryKey = 'id';
    protected $fillable = ['nom', 'prenom', 'email', 'cin', 'image', 'telephone', 'date_recrutement', 'date_naissance', 'specialite', 'appartenant_a_ENSAJ', 'Dossier_scientifique', 'Dossier_Pedagogique', 'Dossier_administratif'];
}
