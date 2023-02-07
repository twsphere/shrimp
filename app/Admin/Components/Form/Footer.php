<?php

namespace App\Admin\Components\Form;

class Footer extends \Encore\Admin\Form\Footer
{
    /**
     * View for this form.
     *
     * @var string
     */
    protected $view = 'admin.extensions.formfooter';

    protected $extendButtons = [];

    public function addButton(string $html)
    {
        array_push($this->extendButtons, $html);
    }

    /**
     * Render footer.
     *
     * @return string
     */
    public function render()
    {
        $this->setupScript();

        $submitRedirects = [
            1 => 'continue_editing',
            2 => 'continue_creating',
            3 => 'view',
        ];

        $data = [
            'width'            => $this->builder->getWidth(),
            'buttons'          => $this->buttons,
            'checkboxes'       => $this->checkboxes,
            'submit_redirects' => $submitRedirects,
            'default_check'    => $this->defaultCheck,
            'extend_buttons'   => array_reverse($this->extendButtons),
        ];

        return view($this->view, $data)->render();
    }
}
