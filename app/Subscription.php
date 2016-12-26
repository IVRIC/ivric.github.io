<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Subscription
 * @package App
 *
 * @property string email
 */
class Subscription extends Model
{
    protected $guarded = [];
    protected $table = 'subs';
}
