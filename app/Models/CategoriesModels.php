<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class CategoriesModels extends Model
{
    use HasFactory,HasUuids;

    protected $table = 'categories';
    protected $fillable = [
        'name',
    ];

    public function listBooks()
    {
        return $this->hasMany(BooksModels::class, 'category_id');
    }
}
