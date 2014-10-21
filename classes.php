<?php

class RaceCar implements RaceCarInterface
{
	private $vMax;
	private $accel;
	
	public function getVMax()
	{
		return $this->vMax;
	}
	
	public function getAcceleration()
	{
		return $this->accel;
	}
}

class Engine implements EngineInterface
{
	private $engine;
	
	public function __construct()
	{
		$this->engine = new Engine();
	}
	
	public function getHP()
	{
	
	}
}