<?php

namespace WLDH\Voyager\Database\Types\Postgresql;

use WLDH\Voyager\Database\Types\Common\VarCharType;

class CharacterVaryingType extends VarCharType
{
    const NAME = 'character varying';
    const DBTYPE = 'varchar';
}
