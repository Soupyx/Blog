<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'author',
        'date',
        'image',
        'category',
    ];

    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
            'date' => 'required',
            'image' => 'required',
        ];
    }
}
