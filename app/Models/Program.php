<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'edulevel_id', 'studen_price', 'student_max', 'info'];
    public $timestamps = true;

    public function Edulevel()
    {
        return $this->belongsTo(Edulevel::class);
    }
}