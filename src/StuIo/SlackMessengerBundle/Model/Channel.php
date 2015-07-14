<?php

namespace StuIo\SlackMessengerBundle\Model;

class Channel
{
    protected $id;
    protected $name;

    public function __construct($id, $name)
    {
        $this->setId($id);
        $this->setName($name);
    }

    public function getId() {
        return $this->id;
    }

    protected function setId($id) {
        if(!is_string($id)) {
          throw new \InvalidArgumentException('The Channel ID should be a String');
        }

        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    protected function setName($name) {
        if(!is_string($name)) {
          throw new \InvalidArgumentException('The Channel name should be a String');
        }

        $this->name = $name;
    }

}
