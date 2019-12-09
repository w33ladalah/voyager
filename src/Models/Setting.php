<?php

namespace WLDH\Voyager\Models;

use Illuminate\Database\Eloquent\Model;
use WLDH\Voyager\Events\SettingUpdated;

class Setting extends Model
{
    protected $table = 'settings';

    protected $guarded = [];

    public $timestamps = false;

    protected $dispatchesEvents = [
        'updating' => SettingUpdated::class,
    ];
}
