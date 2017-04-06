<?php

namespace App\Presenters;

use Nette;


class LandingPagePresenter extends BasePresenter
{
    public function renderOne()
    {
        $this->template->bodyClass = "landing-one-page";
    }
    public function renderTwo()
    {
        $this->template->bodyClass = "landing-two-page";
    }
}
