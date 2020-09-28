<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelAccounts extends Model
{
    protected $table = 'mst_accounts';

    protected $fillable = [
        'username', 'password', 'role'
    ];
}
