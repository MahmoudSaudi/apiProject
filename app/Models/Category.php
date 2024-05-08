<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['organization_id','name', 'image', 'description'];


    public function organization()
    {

       return $this->belongsTo(Organization::class,'organization_id','id');

    }
}