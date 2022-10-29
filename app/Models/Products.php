<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $primaryKey = 'id';

    protected $fillable = ['DS_NAME', 'DS_DESCRIPTION', 'DS_BRAND', 'NM_BAR_CODE', 'NM_TENSION', 'NM_VALUE', 'FL_STATUS'];
}
