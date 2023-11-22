<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internets extends Model
{
    use HasFactory;

    protected $table = 'productse';
    protected $primaryKey = 'id_product';
    protected $fillable = ['product_name', 'product_price','product_desc'];

    public function post()
    {
        return $this->belongsTo(Categories::class);
    }
}
