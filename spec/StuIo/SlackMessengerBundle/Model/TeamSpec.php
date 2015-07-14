<?php

namespace spec\StuIo\SlackMessengerBundle\Model;

use Doctrine\DBAL\Schema\Index;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use StuIo\SlackMessengerBundle\Model\Team;

class TeamSpec extends ObjectBehavior
{
    private $wrongDataSet = [
        [
            'teamId' => 'Not an integer',
            'teamDomain' => [],
            'message' => 'The team domain should be a String'
        ], [
            'teamId' => 1,
            'teamDomain' => 'Domain',
            'message' => 'The team ID should be an String'
        ], [
            'teamId' => 'Not an Integer',
            'teamDomain' => 1,
            'message' => 'The team domain should be a String'
        ]
    ];
    
    function it_is_initializable()
    {
        $this->beConstructedWith(
          $teamId = "T0001",
          $teamDomain = "example"
        );

        $this->shouldHaveType('StuIo\SlackMessengerBundle\Model\Team');
        $this->getId()->shouldReturn($teamId);
        $this->getDomain()->shouldReturn($teamDomain);
    }

    function it_is_not_initializable_with_wrong_data()
    {

        foreach($this->wrongDataSet as $dataSet){

            $this->shouldThrow(new \InvalidArgumentException($dataSet['message']))
                    ->during('__construct', [
                        $dataSet['teamId'],
                        $dataSet['teamDomain']
                    ]);
        }
    }
}
