<?php

namespace WLDH\Voyager\Database\Types\Postgresql;

use WLDH\Voyager\Database\Types\Common\DoubleType;

class DoublePrecisionType extends DoubleType
{
    const NAME = 'double precision';
    const DBTYPE = 'float8';
}
