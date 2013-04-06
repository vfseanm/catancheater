<?php


class player
{
	public $name = "player1";
    function callOut()
    {
        echo $this->name; 
    }
}

$p = new player;
$p->callOut();



?>