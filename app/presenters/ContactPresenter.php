<?php

namespace App\Presenters;

use Nette;


class ContactPresenter extends BasePresenter
{
    public function renderDefault()
    {
        $this->template->bodyClass = "contact-page";
    }
}
