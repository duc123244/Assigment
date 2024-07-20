<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'public_company',
        'author_id',
        'image',
        'quantity',
        'price',
        'is_active',
        'category_id',
    ];
    protected $casts =[
        'is_active' => 'boolean'
    ];
    public function author(){
        return 
        $this->belongsTo(Author::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
