<?php
class Validator {
    public function isEmail($testValue) {
        if (preg_match('/[\w\.\_\-\+]+@[\w\-]+(\.\w{2,4})+/', $testValue)) {
            return true;
        }
        return false;
    }

    public function getEmail($testValue) {
        preg_match('/[\w\.\_\-\+]+@[\w\-]+(\.\w{2,4})+/', $testValue, $matches);
        if ($matches[0]) {
            return $matches[0];
        }
        return false;
    }

    public function isPhone($testValue) {
        if (preg_match('/(\s*)?((\+)?\d*)?(\s*)?(\()?(\s*)?(\d{3})(\s*)?(\)|\-|\.)?(\s*)?(\d{3})(\s*)?(\)|\-|\.)?(\s*)?(\d{4})(\s*)?/', $testValue)) {
            return true;
        }
        return false;
    }
 
     public function getPhone($testValue) {
        preg_match('/(\s*)?((\+)?\d*)?(\s*)?(\()?(\s*)?(\d{3})(\s*)?(\)|\-|\.)?(\s*)?(\d{3})(\s*)?(\)|\-|\.)?(\s*)?(\d{4})(\s*)?/', $testValue, $matches);
        if ($matches[0]) {
            return $matches[0];
        }
        return false;
    }

    public function isName($testValue) {
        if ($testValue) {
            return true;
        }
        return false;
    }
}