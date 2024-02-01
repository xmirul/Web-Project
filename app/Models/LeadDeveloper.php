<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class LeadDeveloper extends Model
{
    protected $table = 'lead_developers';
    protected $primarykey = 'id';
    protected $fillable = ['staffId', 'name', 'mail', 'project'];

     public function projects(){
         return $this->belongsToMany(project::class);
    }
    use HasFactory;
    use SoftDeletes;
}
