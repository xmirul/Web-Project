<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Project extends Model
{
protected $table = 'projects';
protected $primarykey = 'id';
protected $fillable = ['projectID', 'projectTitle', 'staffId', 'developer', 'startDate', 'endDate', 'pic','methodology','platform','deployment', 'Description', 'status'];


public function Developer(){
    return $this->hasMany(Developer::class);
}
public function LeadDevelopers(){
    return $this->hasOne(LeadDeveloper::class);
}
public function Manager(){
    return $this->hasOne(Manager::class);
}


use HasFactory;
use SoftDeletes;
}
