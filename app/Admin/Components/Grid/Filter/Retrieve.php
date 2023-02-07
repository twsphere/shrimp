<?php

namespace App\Admin\Components\Grid\Filter;

use Closure;
use Illuminate\Support\Arr;

class Retrieve extends \Encore\Admin\Grid\Filter\AbstractFilter
{
    protected $calculator = null;

    public function __construct($column, $label = '', Closure $calculator)
    {
        $this->calculator = $calculator;

        parent::__construct($column, $label);
    }
    /**
     * Get condition of this filter.
     *
     * @param array $inputs
     *
     * @return array|mixed|void
     */
    public function condition($inputs)
    {
        $value = Arr::get($inputs, $this->column);

        if (is_array($value)) {
            $value = array_filter($value);
        }

        if (is_null($value) || $value === '') {
            return;
        }

        $results = ($this->calculator)($value);

        if (!isset($results['value']) || is_null($results['value']) || $results['value'] === '') {
            return;
        }

        $this->value = $value;

        return $this->buildCondition($this->column, $results['operator'], $results['value']);
    }
}
