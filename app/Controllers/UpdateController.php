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

    private  $userId;

    private $updates;

    private $editUpdateId;

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

    public function doUpdate() {
        $this->updateRepository->update($this->params[0]);
        header('Location: /');
    }

    private function createPage(){
        return $this->view("updates/add.html");
    }

    public function editPage(){
        $editUpdateId= $this->params[0];
        if($editUpdateId)
            $update= $this->updateRepository->getUpdateById($editUpdateId);
        return $this->view("updates/edit.html",['update' => $update]);
    }

    private function createUpdate(){
        $errros =[];

        if(isset($_POST['save-submit'])) {
            $validAdd =true;

            if(!isset($_POST['applicationName']) || $_POST['applicationName'] == ''){
                $errors[] = "An application name must be introduced!";
                $validAdd =false;
            }

            if(!isset($_POST['every']) || $_POST['every']=='' ){
                $errors[] = "An every must be introduced!";
                $validAdd =false;
            }

            if(!isset($_POST['lastUpdate']) || $_POST['lastUpdate'] == ''){
                $errors[] = "A last update must be introduced!";
                $validAdd =false;
            }

            if($validAdd){
                $update = new Update(null, $_POST['applicationName'],$_POST['applicationName'], $_POST['lastUpdate'],0, $userId);
                $updates[] = $this->doCreate($update);
                $this->updatesPage();
                return $this->view("updates/add.html", ['errors'=>['Edit successfully!'],'updates' => $updates]);
            }

        }
        return $this->view("login/register.html", ['errors'=>['Edit failed!']]);
    }

    private function editUpdate(){
        $errros =[];

        if(isset($_POST['save-submit'])) {
            $validAdd =true;

            if(!isset($_POST['applicationName']) || $_POST['applicationName'] == ''){
                $errors[] = "An application name must be introduced!";
                $validAdd =false;
            }

            if(!isset($_POST['every']) || $_POST['every']=='' ){
                $errors[] = "An every must be introduced!";
                $validAdd =false;
            }

            if(!isset($_POST['lastUpdate']) || $_POST['lastUpdate'] == ''){
                $errors[] = "A last update must be introduced!";
                $validAdd =false;
            }

            if($validAdd){
                $update = new Update(null, $_POST['applicationName'],$_POST['applicationName'], $_POST['lastUpdate'],0, $userId);
                $updates[] = $this->doEdit($update);
                return $this->view("updates/add.html", ['errors'=>['Save successfully!'],'updates' => $updates]);
            }

        }
        return $this->view("login/register.html", ['errors'=>$errors]);
    }
    public function logoutAction(){
        session_unset();
        header('Location: /');
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
