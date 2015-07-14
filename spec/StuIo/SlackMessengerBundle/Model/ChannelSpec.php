<?php

namespace spec\StuIo\SlackMessengerBundle\Model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ChannelSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith(
          $channelId = "C2147483705",
          $channelName = "test"
        );

        $this->shouldHaveType('StuIo\SlackMessengerBundle\Model\Channel');
    }
}
