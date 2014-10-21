<?php

class RaceCar implements RaceCarInterface
{
	private $vMax;
	private $accel;
	private $engine;
	
	public function __construct()
	{
		$this->engine = new Engine();
	}
	
	
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
	private $hp;
	
	public function getHP()
	{
		return $this->hp;
	}
}