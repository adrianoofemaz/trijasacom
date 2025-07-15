<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model

{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        "protect_id",
        "name",
        "phone_number",
        "brief",
        "budget",
        "email",
        "meeting_at"
    ];

    public function product(){
        return $this->belongsTo(Product::class,"product_id");
    }

}
