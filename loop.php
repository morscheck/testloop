<?php
/*
 * Proxy Crawler + Auto Check + Auto Save Live Proxy
 *
 * Created by rafinetiz
 */
class Proxy {
	function __construct() {
	}
	function looping() {
		$colors = array("red", "green", "blue", "yellow");
		$i = 0;
		foreach ($colors as $value) {
			echo "\e[44m#> Memeriksa ".$value."\e[49m (".$i." of 50) | \e[4mCreated by rafinetiz\e[0m\r";
			$i++;
			if($value == 'red'){
				echo "\033[K#> \e[32mLive\e[0m => ". $value . PHP_EOL;
			}else{
				echo "\033[K#> \e[31mDie\e[0m  => ". $value . PHP_EOL;	
			}
		}
	}
}
$crawler = new Proxy();
$crawler->looping();
