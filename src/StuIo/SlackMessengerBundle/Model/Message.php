<?php

namespace StuIo\SlackMessengerBundle\Model;

class Message
{

	protected $team;
	protected $channel;
	protected $user;
	protected $token;
	protected $timestamp;
	protected $text;
	protected $triggerWord;

	public function __construct(Team $team, Channel $channel, User $user, $token, $timestamp, $text, $triggerWord)
	{
		$this->setTeam($team);
		$this->setChannel($channel);
		$this->setUser($user);
		$this->setToken($token);
		$this->setTimestamp($timestamp);
		$this->setText($text);
		$this->setTriggerWord($triggerWord);
	}

	public function getTeam()
	{
		return $this->team;
	}

	public function getChannel()
	{
		return $this->channel;
	}

	public function getUser()
	{
		return $this->user;
	}

	public function getToken()
	{
		return $this->token;
	}

	public function getTimestamp()
	{
		return $this->timestamp;
	}

	public function getText()
	{
		return $this->text;
	}

	public function getTriggerWord()
	{
		return $this->triggerWord;
	}

	public function setTeam($team)
	{
		$this->team = $team;
	}

	public function setChannel($channel)
	{
		$this->channel = $channel;
	}

	public function setUser($user)
	{
		$this->user = $user;
	}

	public function setToken($token)
	{
		$this->token = $token;
	}

	public function setTimestamp($timestamp)
	{
		$this->timestamp = $timestamp;
	}

	public function setText($text)
	{
        if(!is_string($text)) {
            throw new \InvalidArgumentException('The message text should be a String');
        }
		$this->text = $text;
	}

	public function setTriggerWord($triggerWord)
	{
        if(!is_string($triggerWord)) {
            throw new \InvalidArgumentException('The trigger word should be a String');
        }

		$this->triggerWord = $triggerWord;
	}

}
