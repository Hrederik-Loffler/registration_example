<?php
namespace Core\Database;

use \RuntimeException;
use \finfo;
use Core\Validation\Validator;

class PhotoUploader
{
    public static $path;

    public static function photoUpload()
    {
        try {
            self::$path = '../public/assets/default/' . time() . $_FILES['photo']['name'];
            // Undefined | Multiple Files | $_FILES Corruption Attack
            // If this request falls under any of them, treat it invalid.

            if (!isset($_FILES['photo']['error']) || is_array($_FILES['photo']['error'])) {
                throw new RuntimeException('Invalid parameters.');
            }

            // Check $_FILES['upfile']['error'] value.
            switch ($_FILES['photo']['error']) {
                case UPLOAD_ERR_OK:
                    break;
                case UPLOAD_ERR_NO_FILE:
                    throw new RuntimeException('No file sent.');
                case UPLOAD_ERR_INI_SIZE:
                case UPLOAD_ERR_FORM_SIZE:
                    throw new RuntimeException('Exceeded filesize limit.');
                default:
                    throw new RuntimeException('Unknown errors.');
            }

            // You should also check filesize here.
            if ($_FILES['photo']['size'] > 3000000) {
                throw new RuntimeException('Exceeded filesize limit.');
            }

            // DO NOT TRUST $_FILES['upfile']['mime'] VALUE !!
            // Check MIME Type by yourself.
            $finfo = new finfo(FILEINFO_MIME_TYPE);
            if (false === $ext = array_search(
                $finfo->file($_FILES['photo']['tmp_name']),
                array(
                    'jpeg' => 'image/jpeg',
                    'jpg' => 'image/jpg',
                    'png' => 'image/png',
                    'gif' => 'image/gif',
                ),
                true
            )) {
                // throw new RuntimeException('Invalid file format.');
                $err = Validator::$errors['photo'] = 'Invalid file format';
                Validator::$response['status'] = false;
                Validator::$response['message'] = $err;
                return Validator::$response;
            }

            // You should name it uniquely.
            // DO NOT USE $_FILES['upfile']['name'] WITHOUT ANY VALIDATION !!
            // On this example, obtain safe unique name from its binary data.
            if (!move_uploaded_file($_FILES['photo']['tmp_name'], sprintf(self::$path, sha1_file($_FILES['photo']['tmp_name']), $ext))) {
                throw new RuntimeException('Failed to move uploaded file.');
            }
            return Validator::$response['status'] = true;
            echo 'File is uploaded successfully.';
        } catch (RuntimeException $e) {
            die($e->getMessage());
        }
    }
}
