<?php

namespace App\Admin\Components\Form;

use App\Admin\Components\Form\Footer;
use Encore\Admin\Form\Tools;

class Builder extends \Encore\Admin\Form\Builder
{
    public function init()
    {
        $this->tools = new Tools($this);
        $this->footer = new Footer($this);

        $this->formClass = 'model-form-'.uniqid();
    }
}
