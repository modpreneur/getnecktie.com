<?php

namespace App\Presenters;

use Nette;


class ThankYouPresenter extends BasePresenter
{
    public function renderDefault()
    {
        $this->template->bodyClass = "thank-you-page";
    }
}
