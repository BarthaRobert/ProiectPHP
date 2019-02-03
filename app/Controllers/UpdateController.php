<?php
namespace App\Controllers;

use App\Repository\UpdateRepository;

use Framework\Controller;
use App\Models\Update;

/**
 * Class UpdateController
 */
class UpdateController extends Controller
{
    
    private $updateRepository;

    public function __construct(){
        parent::__construct();
        $this->updateRepository = new UpdateRepository();
    }

    public function updatesPage(){
        $userId=$_SESSION['logged'];
        $updates = $this->getUpdatesByUserId($userId);
        return $this->view("updates/updates.html",['updates' => $updates]);
    }

    public function showUpdatesAction() {   
        $errors =[];

            if(isset($_POST['login-submit'])) {
            $validLogin =true;

            if(!isset($_POST['email']) || $_POST['email']=='' ){
                $errors[] = "An e-mail must be introduced!";
                $validLogin =false;
            }
                   
            if(!isset($_POST['password']) || $_POST['password'] == ''){
                $errors[] = "A password must be introduced!";
                $validLogin =false;
            }

            if($validLogin){
                $userId=$this->doLogin($_POST['email'],$_POST['password']);
                if($userId){
                    $_SESSION['logged'] =$userId;
                    header('Location: /');
                }else{
                    $errors[] ="The email or password introduced does not exists!";
                }
            }

        }
        return $this->view("login/login.html", ['errors'=>$errors]);
    }

    
    public function logoutAction(){
        session_unset();
        header('Location: /');
    }

    private function doUpdate($update) {
        $this->updateRepository->update($update);
    }
 
    private function doCreate($update) {
        $this->updateRepository->create($update);
    }

    private function doEdit($update) {
        $this->updateRepository->edit($update);
    }
     
    private function doDeleted($update){
        $this->updateRepository->delete($update);
    }

    private function getUpdatesByUserId($userId){
        return $this->updateRepository->getUpdateByUserId($userId);
    }
}
