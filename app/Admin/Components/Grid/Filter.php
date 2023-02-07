<?php

namespace App\Admin\Components\Grid;

class Filter extends \Encore\Admin\Grid\Filter
{
    protected static $customSupports = [
        'retrieve' => Filter\Retrieve::class,
    ];

    public function __construct(\Encore\Admin\Grid\Model $model)
    {
        self::$supports += self::$customSupports;

        parent::__construct($model);
    }
}
