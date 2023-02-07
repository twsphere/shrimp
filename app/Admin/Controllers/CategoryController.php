<?php

namespace App\Admin\Controllers;

use App\Admin\Controllers\BaseController;
use App\Models\Category;
use Encore\Admin\Grid;
use Encore\Admin\Form\Tools;
use App\Admin\Components\Form;

class CategoryController extends BaseController
{
    protected $title = '類別';

    protected $m = 'App\\Models\\Category';

    protected const STATES = [
        'on'  => ['value' => '1', 'text' => '顯示', 'color' => 'primary'],
        'off' => ['value' => '0', 'text' => '隱藏', 'color' => 'default'],
    ];

    protected function grid()
    {
        $this->grid->disableExport();
        $this->grid->disableFilter();
        $this->grid->disableRowSelector();

        $this->grid->column('id', 'ID');
        $this->grid->column('name', '名稱');

        $this->grid->actions(function (Grid\Displayers\Actions $actions) {
            $actions->disableView();
        });

        return $this->grid;
    }

    public function form($id = 0)
    {
        $this->form->tools(function (Tools $tools) {
            $tools->disableView();
        });

        $this->form->text('name', '名稱');

        return $this->form;
    }
}
