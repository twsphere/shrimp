<?php

namespace App\Admin\Components\Grid\Actions;

use Encore\Admin\Admin;

class Open
{
    public function __construct($id)
    {
        $this->id = $id;
    }

    protected function script()
    {
        return <<<SCRIPT

$('.grid-check-row').on('click', function () {

    // Your code.
    console.log($(this).data('id'));

});

SCRIPT;
    }

    protected function render()
    {
        // Admin::script($this->script());

        return "<a data-id=\"{$this->id}\"><i class=\"fa fa-eye\"></i></a>";
    }

    public function __toString()
    {
        return $this->render();
    }
}
