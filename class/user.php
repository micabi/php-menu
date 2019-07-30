<?php

class User{
  private $user;
  private $gender;
  private $id;
  private static $count = 0;

  public function __construct($user, $gender){
    $this->user = $user;
    $this->gender = $gender;
    self::$count++;
    $this->id = self::$count;
  }

  public function getUserName(){
    return $this->user;
  }

  public function getGender(){
    return $this->gender;
  }

  public function getUserId(){
    return $this->id;
  }
}