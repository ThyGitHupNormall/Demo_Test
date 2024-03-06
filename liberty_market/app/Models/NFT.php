<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NFT extends Model
{
    use HasFactory;
    protected $table = 'nft';
    protected $primarykey = 'id';
    protected $fillable = [
        'label',
        'title',
        'description',
        'bg_img'
    ];
}
