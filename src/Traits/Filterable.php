<?php

namespace Otas\Filterable\Traits;

use Otas\Filterable\Helpers\QueryFilter;

Trait Filterable
{
    use Searchable;

    public function scopeFilter($query, QueryFilter $filters)
    {
        return $filters->apply($query);
    }
}
