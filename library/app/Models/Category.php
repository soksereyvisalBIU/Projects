<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'field_id',
    ];

    public function field(){
        return $this->belongsTo(Field::class, 'field_id' , 'id');
    }
    
}
