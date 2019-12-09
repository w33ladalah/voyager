<?php

namespace WLDH\Voyager\Database\Types\Postgresql;

use WLDH\Voyager\Database\Types\Common\CharType;

class CharacterType extends CharType
{
    const NAME = 'character';
    const DBTYPE = 'bpchar';
}
