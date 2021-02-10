<?php


namespace Controllers;

use Core\Database\Connection;
use Core\Validation\Validator;
use Core\App;
use Core\Database\PhotoUploader;
use Core\Database\QueryBuilder;
use Model\Member;

class UsersController
{
    public function index()
    {
        // GET method select all members from main_form table
        $member = new Member(Connection::$pdo, $parameters = null);
        $allMembers = $member->selectAll('main_form');
        $defaultPath = '../public/assets/default/default.png';
        return view('all', compact('allMembers', 'defaultPath'));
    }

    public function add() //post method insert members to database used QueryBuilder
    {
        //check hidden input name="form" value="firstForm / or secondForm" to understand
        //which button was use
        if ($_POST['form'] === 'firstForm') {
            $member = new Member(Connection::$pdo, $parameters = null);
            //prepare input fields trim, htmlspecialchars
            $fields = extractFields($_POST, ['firstname', 'lastname', 'birthdate', 'reportSubject', 'country', 'phone', 'email']);
            $emails = $member->selectEmail('main_form');
                   
            $validator = new Validator($fields, $emails);
            $checkEror = $validator->allFirstFormValid();
    
            if (empty($checkEror['message']) && $checkEror['status'] === true) {
                
                //add members in database with prepare PDO insert({tableName}, array $params)
                $member->insert('main_form', $fields);
                $id_member = $member->lastId();
                Validator::$response['id_member'] = $id_member;
                  
                echo json_encode(Validator::$response);
            } else {
                echo json_encode(Validator::$response);
            }
        }

        //check if the second button was click
        if ($_POST['form'] === 'secondForm') {
            $member = new Member(Connection::$pdo, $parameters = null);
            //prepare input fields trim, htmlspecialchars
            $fields = extractFields($_POST, ['company', 'position', 'aboutMember']);

            // if(empty($checkEror['message']) && $checkEror['status'] === true) {
            if (!empty($_FILES['photo']['tmp_name'])) {

                // Rename and upload photo to default tmp directory if validation = true and errors = null
                PhotoUploader::photoUpload();
                $response = Validator::validPhoto();
                $pathImg = PhotoUploader::$path;

                $id_member = $_COOKIE['id_member'];

                $member->updateMember($id_member, $pathImg, ['photo' => $pathImg, 'id_member' => $id_member]);
                echo json_encode($response);
            } else {
                $pathImg = PhotoUploader::$path;
                
                $id_member = $_COOKIE['id_member'];
                
                $member->updateMember($id_member, $pathImg, [
                    'company' => $fields['company'], 'position' => $fields['position'], 'aboutMember' => $fields['aboutMember'],
                    'photo' => $pathImg, 'id_member' => $id_member]);

                $response = [
                    'status' => true
                ];
                echo json_encode($response);
            }
        }
    }
}
