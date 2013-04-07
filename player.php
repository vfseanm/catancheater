<?php


class player
{
	public $name = "player1";
    function callOut()
    {
        echo $this->name; 
    }
}

global $p = new player();

?>