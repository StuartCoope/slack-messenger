<?php

namespace spec\StuIo\SlackMessengerBundle\Model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use StuIo\SlackMessengerBundle\Model\Team;
use StuIo\SlackMessengerBundle\Model\Channel;
use StuIo\SlackMessengerBundle\Model\User;


class MessageSpec extends ObjectBehavior
{
	private $wrongDataSet = [
        [
            'team' => [
                'id' => 'teamId',
                'domain' => 'teamDomain'
            ],
            'channel' => [
                'id' => 'channelId',
                'name' => 'channelName'
            ],
            'user' => [
                'id' => 'userId',
                'name' => 'userName'
            ],
            'token' => "XXXXXXXXXXXXXXXXXX",
            'timestamp' => "1355517523.000005",
            'text' => [],
            'triggerWord' => "googlebot:",
            'message' => 'The message text should be a String'
        ], [
            'team' => [
                'id' => 'teamId',
                'domain' => 'teamDomain'
            ],
            'channel' => [
                'id' => 'channelId',
                'name' => 'channelName'
            ],
            'user' => [
                'id' => 'userId',
                'name' => 'userName'
            ],
            'token' => "XXXXXXXXXXXXXXXXXX",
            'timestamp' => "1355517523.000005",
            'text' => "googlebot: What is the air-speed velocity of an unladen swallow?",
            'triggerWord' => [],
            'message' => 'The trigger word should be a String'
        ]
	];

	function it_is_initializable()
	{
		$team = new Team('teamId', 'team');
		$channel = new Channel('channelId', 'channel');
		$user = new User('id', 'Stu');

		$this->beConstructedWith(
		  $team,
		  $channel,
		  $user,
		  $token = "XXXXXXXXXXXXXXXXXX",
		  $timestamp = "1355517523.000005",
		  $text = "googlebot: What is the air-speed velocity of an unladen swallow?",
		  $triggerWord = "googlebot:"
		);

		$this->shouldHaveType('StuIo\SlackMessengerBundle\Model\Message');
		$this->getTeam()->shouldHaveType('StuIo\SlackMessengerBundle\Model\Team');
	}

    function it_is_not_initializable_with_wrong_data()
    {

        foreach($this->wrongDataSet as $dataSet){

            $team = new Team($dataSet['team']['id'], $dataSet['team']['domain']);
            $user = new User($dataSet['user']['id'], $dataSet['user']['name']);
            $channel = new Channel($dataSet['channel']['id'], $dataSet['channel']['name']);

            $this->shouldThrow(new \InvalidArgumentException($dataSet['message']))
                ->during('__construct', [
                    $team, $channel, $user, $dataSet['token'], $dataSet['timestamp'], $dataSet['text'], $dataSet['triggerWord']
                ]);
        }
    }
}
