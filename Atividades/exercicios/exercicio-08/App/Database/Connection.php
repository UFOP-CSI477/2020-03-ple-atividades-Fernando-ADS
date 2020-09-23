<?php

namespace App\Database;
use App\Database\AdapterInterface;

class Connection{
  private $adapter;

  public function __construct(AdapterInterface $adapter){
    $this->adapter = $adapter;

  }

  public function getAdapter(){
    return $this->adapter;

  }

}
