<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tokoh extends Model
{
    use HasFactory;

    //metode php artisan tinker utk mengisi database secara bersamaan
    //bole isi semua yg tertulis di dlm kurung utk diisi
    protected $fillable = ['name', 'image', 'excerpt', 'description'];

    // tidak membiarkan kolom tertulis di dlm utk diisi
    //protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
