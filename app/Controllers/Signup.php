<?php

namespace App\Controllers;

class Signup extends BaseController
{

    public function getIndex()
    {
        return view("Signup/new");
    }

    public function getNew()
    {
        return view("Signup/new");
    }

    public function postCreate()
    {
        $user = new \App\Entities\User($this->request->getPost());

        $model = new \App\Models\UserModel;

        $user->startActivation();

        if ($model->insert($user)) {

            $this->sendActivationEmail($user);

            return redirect()->to("/signup/success");

        } else {

            return redirect()->back()
                             ->with('errors', $model->errors())
                             ->with('warning', lang('App.messages.invalid'))
                             ->withInput();

        }

    }

    public function getSuccess()
    {
        return view('Signup/success');
    }

    public function getActivate($token)
    {
        $model = new \App\Models\UserModel;

        $model->activateByToken($token);

        return view('Signup/activated');
    }

    private function sendActivationEmail($user)
    {
        $email = service('email');

        $email->setTo($user->email);
    
        $email->setSubject('Account Activation');
    
        $message = view('Signup/activation_email', [
            'token' => $user->token
        ]);

        $email->setMessage($message);
    
        $email->send();
    }
}