<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public $fillable=[
        'book_authorid',
        'book_title',
        'book_isbn',
        'book_pub_year',
        'book_available'
    ];
}
