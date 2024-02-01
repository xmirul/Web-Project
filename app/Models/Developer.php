<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Developer extends Model
{
    protected $table = 'developer';
    protected $primarykey = 'id';
    protected $fillable = ['staffId', 'name', 'mail', 'LeadDeveloper', 'project'];

    use HasFactory;
    use softDeletes;
}
