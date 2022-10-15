<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;

class FrontendPresenter extends Nette\Application\UI\Presenter {

    public function __construct( ) { }
    
    protected function startup(): void {
        parent::startup();
        $this->template->appname = APPNAME;
    }

    protected function beforeRender(): void {
        $this->setLayout(__DIR__.'/templates/@frontend.latte');
    }

}
