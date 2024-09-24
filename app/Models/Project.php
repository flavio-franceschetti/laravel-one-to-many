<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // fillable serve per definire quali attributi possono essere assegnati in massa al modello, l assegnazione di massa avviene quando utilizzi metodi come create() o fill() e passi un array di dati per popolare il modello
    protected $fillable = [
        'name',
        'description',
        'status',
        'github',
        'slug'
    ];
    
    //La proprietà $casts consente di definire come gli attributi devono essere automaticamente convertiti quando vengono letti o salvati nel database e viene salvata automaticamente quando si usa fill() nel controller
    protected $casts = [
        'status' => 'boolean',
    ];
    
}
