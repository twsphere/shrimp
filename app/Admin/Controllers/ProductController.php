<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Models\Product;
use Encore\Admin\Grid;
use Encore\Admin\Form\Tools;
use App\Admin\Components\Form;
use App\Admin\Controllers\BaseController;

class ProductController extends BaseController
{
    protected $title = '商品種類';

    protected $m = 'App\\Models\\Product';

    protected const STATES = [
        'on'  => ['value' => '1', 'text' => '顯示', 'color' => 'primary'],
        'off' => ['value' => '0', 'text' => '隱藏', 'color' => 'default'],
    ];

    protected function grid()
    {
        $this->grid->model()->orderBy('sort', 'asc');

        $this->grid->model()->with('category');
        $this->grid->disableExport();
        $this->grid->disableFilter();
        $this->grid->disableRowSelector();

        $this->grid->column('id', 'ID');
        $this->grid->column('cate', '類別')->display(function(){
            return $this->category->name;
        });
        $this->grid->column('name', '名稱');
        $this->grid->column('size', '尺寸');
        $this->grid->column('price', '價格');
        $this->grid->column('description', '描述');
        $this->grid->column('image', '圖片')->image();
        $this->grid->column('status', '狀態')->switch($this::STATES);

        $this->grid->sort('排序')->sortableColumn(Product::class);

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

        $this->form->select('category_id', '類別')
            ->options(
                ['' => ' '] + Category::all()
                    ->pluck('name', 'id')
                    ->toArray()
            )
            ->required();
        $this->form->text('name', '名稱');
        $this->form->text('size', '尺寸');
        $this->form->number('price', '價格');
        $this->form->textarea('description', '描述');
        $this->form->switch('status', '狀態')->states($this::STATES)->default(0);
        $this->form->image('image', '圖片');

        return $this->form;
    }
}
