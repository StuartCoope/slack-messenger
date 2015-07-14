<?php

namespace spec\StuIo\SlackMessengerBundle\Model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith(
          $userId = "U2147483697",
          $userName = "Steve"
        );
        $this->shouldHaveType('StuIo\SlackMessengerBundle\Model\User');
    }
}
