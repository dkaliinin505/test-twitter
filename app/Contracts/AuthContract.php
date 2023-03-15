<?php

namespace App\Contracts;

interface AuthContract
{
  public function authenticateUser() : bool;
}
