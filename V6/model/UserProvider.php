<?php
require_once 'User.php';

class UserProvider
{
  private array $accounts = [
    'test' => '123'
  ];

  public function getByUsernameAndPassword(string $username, string $password)
  {
    $expectedPassword = $this->accounts[$username] ?? null;
    if ($expectedPassword === $password) {
      return new User($username);
    }
    return null;
  }
}