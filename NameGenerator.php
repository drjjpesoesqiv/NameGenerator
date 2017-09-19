<?php

class NameGenerator
{
  public function __construct()
  {
    $this->first_male   = $this->getData('first_male');
    $this->first_female = $this->getData('first_female');
    $this->last         = $this->getData('last');
  }

  protected function getData($type)
  {
    return explode("\n", file_get_contents(BASE_PATH . "/data/$type.txt"));
  }

  public function generate($gender)
  {
    return [
      'first' => $this->getFirst($gender),
      'last'  => $this->getLast()
    ];
  }

  public function getFirst($gender)
  {
    $index = rand(0, count($this->{"first_$gender"}));
    return $this->{"first_$gender"}[$index];
  }

  public function getLast()
  {
    return $this->last[rand(0, count($this->last))];
  }
}
