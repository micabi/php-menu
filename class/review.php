<?php

class Review{
  private $menuName;
  private $body;
  private $userName;

  public function __construct($menuName, $body, $userId){
    $this->menuName = $menuName;
    $this->body = $body;
    $this->userId = $userId;
  }

  public function getMenuName(){
    return $this->menuName;
  }

  public function getBody(){
    return $this->body;
  }

  // Class Userの存在を前提として
  // Class UserのuserとClass Reviewのuserを比較
  // 引数にはClass Userの配列を入れる
  public function getReviewer($users){
    foreach($users as $user){
      if($user->getUserId() == $this->userId){
        return $user; // Class User->getUserIdに返すため
      }
    }
  }
}