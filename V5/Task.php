<?php

require_once 'User.php';

class Task
{
  private string $description;
  private DateTime $dateCreated;
  private DateTime $dateUpdated;
  private $dateDone;
  private int $priority;
  private bool $isDone;
  private User $user;

  public function __construct(string $description, User $user)
  {
    $this->description = $description;
    $this->dateCreated = new DateTime();
    $this->isDone = false;
    $this->user = $user;
  }

  public function getDescription():string
  {
    return $this -> description;
  }

  public function setDescription($description):void
  {
    $this->description = $description;
    $this->dateUpdated = new DateTime();
  }

  public function setPriority($priority):void
  {
    $this->priority = $priority;
  }

  public function getPriority():int
  {
    return $this->priority;
  }

  public function setDone():void
  {
    $this->isDone = true;
    $this->dateDone = new DateTime();
  }
  
  public function getDone():string
  {
    if($this->isDone) {
      return 'Задача выполнена';
    } else {
      return 'Задача ещё активна';
    }
  }

  public function getDateCreated():string
  {
    return $this->dateCreated->format('Y-m-d H:i:s');
  }

  public function getDateUpdate():string
  {
    return $this->dateUpdated->format('Y-m-d H:i:s');
  }

  public function getDateDone():string
  {
    if (isset($this->dateDone)) {
      return $this->dateDone->format('Y-m-d H:i:s');
    } else {
      return 'Задача ещё активна';
    }
  }
}