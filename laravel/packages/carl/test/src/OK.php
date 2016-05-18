<?php namespace carl\test;

class OK
{
	private $name;


	public function __construct($name)
    {
        $this->name = $name;
    }

    public function printOKname()
    {
        return $this->name;
    }
}