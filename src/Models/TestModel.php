<?php

namespace Toolkito\Larabase\Models;

use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
    protected $table = 'lara_base_test';
    protected $fillable = ['key','value'];
}
