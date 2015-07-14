<?php

namespace StuIo\SlackMessengerBundle\Model;

class Team
{

    protected $id;
    protected $domain;

    public function __construct($id, $domain)
    {
          $this->setId($id);
          $this->setDomain($domain);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        if(!is_string($id)) {
          throw new \InvalidArgumentException('The team ID should be an String');
        }
        $this->id = $id;
    }

    public function getDomain()
    {
        return $this->domain;
    }

    public function setDomain($domain)
    {
        if(!is_string($domain)) {
          throw new \InvalidArgumentException('The team domain should be a String');
        }
        $this->domain = $domain;
    }

}
