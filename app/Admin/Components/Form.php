<?php

namespace App\Admin\Components;

use Closure;
use App\Admin\Components\Form\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class Form extends \Encore\Admin\Form
{
    protected $cache = null;

    /**
     * Create a new form instance.
     *
     * @param $model
     * @param \Closure $callback
     */
    public function __construct($model, Closure $callback = null)
    {
        $this->model = $model;

        $this->builder = new Builder($this);

        $this->initLayout();

        if ($callback instanceof Closure) {
            $callback($this);
        }

        $this->isSoftDeletes = in_array(SoftDeletes::class, class_uses_deep($this->model), true);

        $this->callInitCallbacks();
    }

    public function setCacheData(string $key, $data = null)
    {
        $this->cache[$key] = $data;
    }

    public function getCacheData(string $key)
    {
        return $this->cache[$key] ?? null;
    }
}
