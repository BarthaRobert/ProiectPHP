<?php
namespace App\Controllers;

namespace App\Controllers;
use Framework\Controller;


/**
 * Class RegisterController
 */
class RegisterController extends Controller
{
    public function registerAction()
    {
        return $this->view("pages/register.html");
    }

}