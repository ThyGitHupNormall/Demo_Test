<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeHeading extends Model
{
    use HasFactory;
    protected $table = 'home_heading';
    protected $primarykey = 'id';
    protected $fillable = [
        'label',
        'title',
        'description',
        'bg_img',
    ];
}
