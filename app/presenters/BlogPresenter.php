<?php

namespace App\Presenters;

use Nette;


class BlogPresenter extends BasePresenter
{
    public function renderDefault()
    {
        $this->template->bodyClass = "blog-page";
    }

    public function renderDetail()
    {
        $this->template->bodyClass = "blog-detail-page";
    }
}
