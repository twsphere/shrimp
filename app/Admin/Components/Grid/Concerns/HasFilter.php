<?php

namespace App\Admin\Components\Grid\Concerns;

use App\Admin\Components\Grid\Filter;

trait HasFilter
{
    use \Encore\Admin\Grid\Concerns\HasFilter;

    /**
     * Setup grid filter.
     *
     * @return $this
     */
    protected function initFilter()
    {
        $this->filter = new Filter($this->model());

        return $this;
    }
}
