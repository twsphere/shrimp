<?php

namespace App\Admin\Components;

class Grid extends \Encore\Admin\Grid
{
    use Grid\Concerns\HasFilter;

    protected $createButtonHTML = null;

    public function setCreateButton($createButton = null)
    {
        $this->createButtonHTML = $createButton
                                    ? (
                                        is_string($createButton)
                                        ? $createButton
                                        : (
                                            is_object($createButton)
                                            ? $createButton->render()
                                            : ''
                                        )
                                    )
                                    : '';

        return $this;
    }

    public function renderCreateButton()
    {
        return empty($this->createButtonHTML) ? parent::renderCreateButton() : $this->createButtonHTML;
    }
}
