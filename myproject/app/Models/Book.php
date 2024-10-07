<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author',
        'published_year',
    ];
}
composer create-project laravel/laravel myproject
cd myproject
php artisan serve
    php artisan make:model book
    php artisan make:migration create_books_table
    php artisan migrate
    php artisan make:seeder BookSeeder
    php artisan db:seed
    php artisan make:controller BookController --resource


    php artisan make:model book -m
    php artisan migrate:fresh
    
    
    
