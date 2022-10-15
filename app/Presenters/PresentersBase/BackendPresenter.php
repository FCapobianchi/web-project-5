<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;

class BackendPresenter extends Nette\Application\UI\Presenter {

    public $authorizator;
    private $cookies;

    public function __construct( ) { }
    
    protected function startup(): void {
        parent::startup();
        if(!$this->getUser()->isLoggedIn()){
            $this->redirect('Homepage:default');
        }

        $this->getUser()->setAuthorizator($this->authorizator);
        if(!$this->getUser()->isAllowed($this->name,$this->action))
            $this->error("forbidden",403);

        $this->template->appname = APPNAME;
        $this->template->section = strtolower($this->name);
        $this->template->page = ($this->action!="default")?$this->action:"";
        $this->cookies = $cookies = $this->getHttpRequest()->getCookies();

        bdump($this->template->section);
        bdump($this->template->page);
    }

    protected function beforeRender(): void {
        $this->setLayout(__DIR__.'/templates/@backend.latte');
    }

}
