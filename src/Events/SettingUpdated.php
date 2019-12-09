<?php

namespace WLDH\Voyager\Events;

use Illuminate\Queue\SerializesModels;
use WLDH\Voyager\Models\Setting;

class SettingUpdated
{
    use SerializesModels;

    public $setting;

    public function __construct(Setting $setting)
    {
        $this->setting = $setting;
    }
}
