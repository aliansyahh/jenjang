<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $fillable = [];
    public $timestamps = true;

    public function Edulevel()
    {
        return $this->belongsTo(Edulevel::class);
    }
}