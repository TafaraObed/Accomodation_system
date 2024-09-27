<?php
// Student.php

require_once 'Model.php';

class Student extends Model {
    public $firstName;
    public $lastName;
    public $regNumber;
    public $program;
    public $phoneNumber;
    public $emailAddress;
    public $physicalAddress;
    public $assessorId;
    public $supervisorId;

    public function __construct(
        $firstName,
        $lastName,
        $regNumber,
        $program,
        $phoneNumber,
        $emailAddress,
        $physicalAddress,
        $assessorId,
        $supervisorId
    ) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->regNumber = $regNumber;
        $this->program = $program;
        $this->phoneNumber = $phoneNumber;
        $this->emailAddress = $emailAddress;
        $this->physicalAddress = $physicalAddress;
        $this->assessorId = $assessorId;
        $this->supervisorId = $supervisorId;
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
