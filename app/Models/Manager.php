<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Manager extends Model{

protected $table = 'managers';
protected $primarykey = 'id';
protected $fillable = ['staffId', 'name', 'mail', 'status'];
use HasFactory;
use SoftDeletes;

public function projects(){
    return $this->hasMany(project::class);
}
}


