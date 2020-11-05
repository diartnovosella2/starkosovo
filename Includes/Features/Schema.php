<?php

namespace Modular\Child\Features;

use Modular\Child\Singletons\Config;
use Modular\Parent\Features\Schema as _Schema;

class Schema extends _Schema
{

    public function __construct()
    {

        $this->schema_templates = Config::self()->schemas();
    }
}