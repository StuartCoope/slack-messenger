<?php

namespace StuIo\SlackMessengerBundle\Model;

class User
{

    protected $id;
    protected $name;

    public function __construct($id, $name)
    {
        $this->setId($id);
        $this->setName($name);
    }


    private function getId()
    {
        return $this->id;
    }

    protected function setId($id)
    {
        if(!is_string($id)){
            throw new \InvalidArgumentException("User Id must be a String");
        }

        $this->id = $id;
    }

    private function getName()
    {
        return $this->name;
    }

    protected function setName($name)
    {
        if(!is_string($name)){
            throw new \InvalidArgumentException("User Name must be a String");
        }

        $this->name = $name;
    }

}
