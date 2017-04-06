<?php

namespace App\Presenters;

use Nette;
use Nette\Application\UI\Form;
use Latte;
use Nette\Mail\Message;
use Nette\Mail\SendmailMailer;
use Nette\Utils\Validators;


abstract class BasePresenter extends Nette\Application\UI\Presenter
{

    public function startup()
    {
        $this->template->title = "GetNecktie";
        $this->template->description = "";
        parent::startup();
    }

    function createComponentContactForm()
    {
        $form = new Form;
        $form->addText('name','Name');
        $form->addText('email','E-mail*')->setRequired();
        $form->addText('message','Message');
        $form->addSubmit('send');
        $form->onSuccess[] = [$this, 'contactFormSucceeded'];
        return $form;
    }

    public function contactFormSucceeded(Form $form) {
        $values = $form->getValues();
        $latte = new Latte\Engine;
        $date = date("d.m.Y H:i:s");


        if(!Validators::isEmail($values->email)){
            $this->flashMessage('Filled email is not proper email format.', 'error');
            $this->redirect($this->getAction());
            return;
        }

        $params = array(
            'name' => $values->name,
            'email' => $values->email,
            'message' => $values->message,
            'datetime'=>$date
        );
        $mailer = new SendmailMailer;
        $mail = new Message;
        $mail->setFrom('Automat GetNecktie.com <automat@getnecktie.com>')
            ->addTo('martin.drozdek@gmail.com')
            ->setSubject('New request from getnecktie.com '.$date)
            ->setHtmlBody($latte->renderToString('../app/presenters/templates/email.latte', $params));

        try{
            $mailer->send($mail);
        }catch (Nette\Neon\Exception $e){
            $this->flashMessage('Error form is not sent. Please try it later.', 'error');
        }

        $this->redirect("ThankYou:");
    }
}
