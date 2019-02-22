<?php

namespace Spatie\Permission\Models;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

class PermissionTitle extends Model
{

    public $guarded = ['id'];

    public function permissions()
    {
        return $this->hasMany(config('permission.models.permission'), 'title_id');
    }

}
