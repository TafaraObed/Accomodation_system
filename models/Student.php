<?php
// Student.php

require_once 'Model.php';

class Student extends Model {
    public $id;
    public $firstName;
    public $lastName;
    public $regNumber;
    public $phoneNumber;
    public $emailAddress;

    public function __construct(
        $id,
        $firstName,
        $lastName,
        $regNumber,
        $phoneNumber,
        $emailAddress
    ) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->regNumber = $regNumber;
        $this->phoneNumber = $phoneNumber;
        $this->emailAddress = $emailAddress;

    }

    // // Optional: Method to convert the object to an array (if needed)
    // public function toArray() {
    //     return [
    //         'firstName' => $this->firstName,
    //         'lastName' => $this->lastName,
    //         'regNumber' => $this->regNumber,
    //         'program' => $this->program,
    //         'phoneNumber' => $this->phoneNumber,
    //         'emailAddress' => $this->emailAddress,
    //         'physicalAddress' => $this->physicalAddress,
    //         'assessorId' => $this->assessorId,
    //         'supervisorId' => $this->supervisorId,
    //     ];
    // }
}
?>
