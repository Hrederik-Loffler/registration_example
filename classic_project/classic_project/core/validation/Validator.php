<?php

namespace Core\Validation;

class Validator
{
    public static $errors = [];
    public static $response = [];

    public function __construct(array $value, array $emails)
    {
        $this->value = $value;
        $this->emails = $emails;
    }

    private function isValidName()
    {
        if ($this->value['firstname'] === '') {
            self::$errors['firstname'] = 'Name can not be blank!';
        } elseif (!preg_match('/^[A-Za-z\‘-”À-ÿ_ -]+$/', $this->value['firstname'])) {
            self::$errors['firstname'] = 'Should contain only letters!';
        }

        return self::$errors;
    }

    private function isValidLastname()
    {
        if ($this->value['lastname'] === '') {
            self::$errors['lastname'] = 'Lastname can not be blank!';
        } elseif (!preg_match('/^[A-Za-z\‘-”À-ÿ_ -]+$/', $this->value['lastname'])) {
            self::$errors['lastname'] = 'Should contain only letters!';
        }

        return self::$errors;
    }

    public function isValidEmail()
    {
        if ($this->value['email'] === '') {
            self::$errors['email'] = 'Email can not be blank!';
        } elseif (filter_var($this->value['email'], FILTER_VALIDATE_EMAIL) != $this->value['email']) {
            self::$errors['email'] = 'Provide correct email!';
        }

        foreach ($this->emails as $email) {
            if (in_array($this->value['email'], $email)) {
                self::$errors['email'] = 'Email is already taken!';
            }
        }

        return self::$errors;
    }

    private function isValidBirthdate()
    {
        if ($this->value['birthdate'] === '') {
            self::$errors['birthdate'] = 'Area birthdate can not be blank!';
        } elseif (!preg_match('/^(\d{4})\/(\d{2})\/(\d{2})$/', $this->value['birthdate'])) {
            self::$errors['birthdate'] = 'Provide correct date!';
        } elseif ($this->value['birthdate'] > date("Y/m/d")) {
            self::$errors['birthdate'] = 'Provide correct date!';
        }

        return self::$errors;
    }

    private function isValidCountry()
    {
        $len = strlen($this->value['country']);

        if ($this->value['country'] === '') {
            self::$errors['country'] = 'Area country can not be blank!';
        }
    }

    private function isValidReportSubject()
    {
        $len = strlen($this->value['reportSubject']);

        if ($this->value['reportSubject'] === '') {
            self::$errors['reportSubject'] = 'Report subject can not be blank!';
        } elseif (!preg_match('/^[!-ÿ]+/', $this->value['reportSubject'])) {
            self::$errors['reportSubject'] = 'Should contain only letters!';
        } elseif ($len < 2) {
            self::$errors['reportSubject'] = 'Must have 2 or more letters!';
        }


        return self::$errors;
    }

    private function isValidPhone()
    {
        $len = strlen($this->value['phone']);

        if ($this->value['phone'] === '') {
            self::$errors['phone'] = 'Phone can not be blank!';
        } elseif ($len < 13) {
            self::$errors['phone'] = 'Too short phone number';
        }

        return self::$errors;
    }

    public function allFirstFormValid()
    {
        $err = self::getErrors();

        if (!empty($this->isValidName($err))) {
            self::$response = [
                'status' => false,
                'message' => self::$errors
            ];
        }
        if (!empty($this->isValidLastname($err))) {
            self::$response = [
                'status' => false,
                'message' => self::$errors
            ];
        }
        if (!empty($this->isValidEmail($err))) {
            self::$response = [
                'status' => false,
                'message' => self::$errors
            ];
        }
        if (!empty($this->isValidBirthdate($err))) {
            self::$response = [
                'status' => false,
                'message' => self::$errors
            ];
        }
        if (!empty($this->isValidCountry($err))) {
            self::$response = [
                'status' => false,
                'message' => self::$errors
            ];
        }
        if (!empty($this->isValidPhone($err))) {
            self::$response = [
                'status' => false,
                'message' => self::$errors
            ];
        }
        if (!empty($this->isValidReportSubject($err))) {
            self::$response = [
                'status' => false,
                'message' => self::$errors
            ];
        }



        if (empty(self::$errors)) {
            return self::$response = [
                'status' => true
            ];
        } else {
            return self::$response;
        }
    }

    public static function validPhoto()
    {
        if (empty(self::getErrors())) {
            return self::$response = [
                'status' => true,
            ];
        } else {
            return self::$response = [
                'status' => false,
                'message' => self::$errors
            ];
        }
    }

    public static function getErrors()
    {
        return self::$errors;
    }
}
