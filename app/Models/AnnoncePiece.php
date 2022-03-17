<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnoncePiece extends Model
{
    use HasFactory;
    protected $table = 'annonces_pieces';
    protected $guarded = [];
    public $timestamps = false;
}
