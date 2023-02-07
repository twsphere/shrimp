<?php

namespace App\Admin\Controllers;

use App\Admin\Components\Form as CustomForm;
use App\Admin\Components\Grid as CustomGrid;
use Encore\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class BaseController extends Controller
{
    protected $m;

    protected $grid;
    protected $form;

    public function index(Content $content)
    {
        $this->grid = new CustomGrid(new $this->m);
        $this->grid->expandFilter();

        return $content
            ->title(trans($this->title))
            ->description(trans('admin.list'))
            ->body($this->grid());
    }

    protected function createForm()
    {
        $this->form = new CustomForm(new $this->m);

        $this->form->footer(function ($footer) {
            $footer->disableReset();
            $footer->disableEditingCheck();
            $footer->disableCreatingCheck();
            $footer->disableViewCheck();
        });
    }

    public function create(Content $content)
    {
        $this->createForm();

        return $content
            ->title(trans($this->title))
            ->description(trans('admin.create'))
            ->body($this->form());
    }

    public function edit($id, Content $content)
    {
        $this->createForm();

        return $content
            ->title(trans($this->title))
            ->description(trans('admin.edit'))
            ->body($this->form($id)->edit($id));
    }

    public function show($id, Content $content)
    {
        return $content
            ->title(trans($this->title))
            ->description(trans('admin.show'))
            ->body($this->detail($id));
    }

    public function update($id)
    {
        $this->createForm();

        return $this->form($id)->update($id);
    }

    public function store()
    {
        $this->createForm();

        return $this->form()->store();
    }

    public function form()
    {
        return $this->form;
    }

    protected function grid() {}

    protected function detail($id) {}

    public function destroy($id)
    {
        $this->createForm();

        return $this->form($id)->destroy($id);
    }
}
