<?php
namespace App\Controllers;

namespace App\Controllers;
use Framework\Controller;


/**
 * Class LoginController
 */
class LoginController extends Controller
{
    public function loginAction()
    {
        return $this->view("pages/login.html");
    }

}