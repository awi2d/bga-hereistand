<?php
namespace HIS\Managers;
use HIS\Core\Game;
use HIS\Managers\Tokens;
use HIS\Models\City;

/*
 * Cities: all utility functions concerning cities (just testing if pushing still works)
 */

class Cities {
	public static function getAll() {
		$cities = [];
		$tokens = Tokens::getAll();
		foreach (Game::get()->cities as $city_id => $city) {
			$cities[] = new City($city, $tokens);
		}
	}
}
