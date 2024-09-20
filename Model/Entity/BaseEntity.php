<?php

namespace Model\Entity;

abstract class BaseEntity{
    private $id;

public function getId(): mixed {
return $this->id;
}
public function setId($id):static{
    $this->id = $id;
    return $this;
}
}