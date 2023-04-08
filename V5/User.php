<?php
class User
{
  private string $username;
  private string $email;
  private string $sex;
  private ?int $age;
  private bool $isActive = true;
  private DateTime $dateCreated;

  public function __construct(string $username, string $email, ?int $age = null)
  {
    $this -> username = $username;
    $this -> email = $email;
    $this -> age = $age;
    $this -> dateCreated = new DateTime();
  }

  public function getUsername(): string
  {
    return $this -> username ?? 'unknown';
  }

  public function getEmail(): string
  {
    return $this -> email ?? 'unknow';
  }

  public function setSex($sex):void
  {
    $this -> sex = $sex;
  }

  public function getSex():?string
  {
    return $this -> sex ?? 'unknow';
  }

  public function getAge():int
  {
    return $this->age;
  }

  public function activated():void
  {
    $this -> isActive = true;
  }

  public function disactivated():void
  {
    $this-> isActive = false;
  }

  public function online():string
  {
    if ($this->isActive) {
      return 'Пользователь онлайн';
    } else {
      return 'Пользователь не в сети';
    }
  }

  public function getTime() {
    return $this->dateCreated->format('Y-m-d H:i:s');
  }
}