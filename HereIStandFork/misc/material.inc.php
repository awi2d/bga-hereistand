<?php
/**
 *------
 * BGA framework: © Gregory Isabelli <gisabelli@boardgamearena.com> & Emmanuel Colin <ecolin@boardgamearena.com>
 * hereistandfork implementation : © CONTRIBUTORS
 *
 * This code has been produced on the BGA studio platform for use on http://boardgamearena.com.
 * See http://en.boardgamearena.com/#!doc/Studio for more information.
 * -----
 *
 * material.inc.php
 *
 * hereistandfork game material description
 *
 * Here, you can describe the material of your game with PHP variables.
 *
 * This file is loaded in your game logic class constructor, ie these variables
 * are available everywhere in your game logic code.
 *
 */

require_once 'modules/php/constants.inc.php';

$this->cities = [
CityIds::WITTENBERG => [
"x" => 3247,
"y" => 731,
"name" => "Wittenberg",
"home_power" => powers::PROTESTANT,
"language" => LanguageZones::GERMAN,
"connections" => [
CityIds::BRANDENBURG,
CityIds::MAGDEBURG,
CityIds::LEIPZIG,
CityIds::PRAGUE,
CityIds::BRESLAU
],
"id" => CityIds::WITTENBERG,
"passes" => [

],
"seazones" => [

]
],
CityIds::BRANDENBURG => [
"x" => 3196,
"y" => 590,
"name" => "Brandenburg",
"home_power" => powers::PROTESTANT,
"language" => LanguageZones::GERMAN,
"connections" => [
CityIds::WITTENBERG,
CityIds::MAGDEBURG,
CityIds::BRESLAU,
CityIds::LUBECK,
CityIds::STETTIN
],
"id" => CityIds::BRANDENBURG,
"passes" => [

],
"seazones" => [

]
],
CityIds::MAINZ => [
"x" => 2783,
"y" => 992,
"name" => "Mainz",
"home_power" => powers::PROTESTANT,
"language" => LanguageZones::GERMAN,
"connections" => [
CityIds::KASSEL,
CityIds::NUREMBERG,
CityIds::COLOGNE,
CityIds::TRIER,
CityIds::WORMS
],
"id" => CityIds::MAINZ,
"passes" => [

],
"seazones" => [

]
],
CityIds::COLOGNE => [
"x" => 2617,
"y" => 848,
"name" => "Cologne",
"home_power" => powers::PROTESTANT,
"language" => LanguageZones::GERMAN,
"connections" => [
CityIds::MAINZ,
CityIds::MUNSTER,
CityIds::LIEGE
],
"id" => CityIds::COLOGNE,
"passes" => [

],
"seazones" => [

]
],
CityIds::TRIER => [
"x" => 2636,
"y" => 1018,
"name" => "Trier",
"home_power" => powers::PROTESTANT,
"language" => LanguageZones::GERMAN,
"connections" => [
CityIds::MAINZ,
CityIds::METZ,
CityIds::LIEGE
],
"id" => CityIds::TRIER,
"passes" => [

],
"seazones" => [

]
],
CityIds::AUGSBURG => [
"x" => 2981,
"y" => 1203,
"name" => "Augsburg",
"home_power" => powers::PROTESTANT,
"language" => LanguageZones::GERMAN,
"connections" => [
CityIds::REGENSBURG,
CityIds::NUREMBERG,
CityIds::SALZBURG,
CityIds::WORMS
],
"id" => CityIds::AUGSBURG,
"passes" => [
CityIds::INNSBRUCK
],
"seazones" => [

]
],
CityIds::STETTIN => [
"x" => 3332,
"y" => 436,
"name" => "Stettin",
"home_power" => powers::PROTESTANT,
"language" => LanguageZones::GERMAN,
"connections" => [
CityIds::BRANDENBURG,
CityIds::LUBECK
],
"id" => CityIds::STETTIN,
"passes" => [

],
"seazones" => [
SeaZoneIds::BALTIC_SEA
]
],
CityIds::LUBECK => [
"x" => 3103,
"y" => 382,
"name" => "Lübeck",
"home_power" => powers::PROTESTANT,
"language" => LanguageZones::GERMAN,
"connections" => [
CityIds::BRANDENBURG,
CityIds::STETTIN,
CityIds::MAGDEBURG,
CityIds::HAMBURG
],
"id" => CityIds::LUBECK,
"passes" => [

],
"seazones" => [
SeaZoneIds::BALTIC_SEA
]
],
CityIds::MAGDEBURG => [
"x" => 3052,
"y" => 660,
"name" => "Magdeburg",
"home_power" => powers::PROTESTANT,
"language" => LanguageZones::GERMAN,
"connections" => [
CityIds::WITTENBERG,
CityIds::BRANDENBURG,
CityIds::LUBECK,
CityIds::BRUNSWICK,
CityIds::ERFURT
],
"id" => CityIds::MAGDEBURG,
"passes" => [

],
"seazones" => [

]
],
CityIds::HAMBURG => [
"x" => 2877,
"y" => 471,
"name" => "Hamburg",
"home_power" => powers::PROTESTANT,
"language" => LanguageZones::GERMAN,
"connections" => [
CityIds::LUBECK,
CityIds::BRUNSWICK,
CityIds::BREMEN
],
"id" => CityIds::HAMBURG,
"passes" => [

],
"seazones" => [
SeaZoneIds::NORTH_SEA
]
],
CityIds::BRUNSWICK => [
"x" => 2842,
"y" => 692,
"name" => "Brunswick",
"home_power" => powers::PROTESTANT,
"language" => LanguageZones::GERMAN,
"connections" => [
CityIds::HAMBURG,
CityIds::MAGDEBURG,
CityIds::BREMEN,
CityIds::KASSEL
],
"id" => CityIds::BRUNSWICK,
"passes" => [

],
"seazones" => [

]
],
CityIds::BREMEN => [
"x" => 2714,
"y" => 547,
"name" => "Bremen",
"home_power" => powers::PROTESTANT,
"language" => LanguageZones::GERMAN,
"connections" => [
CityIds::HAMBURG,
CityIds::BRUNSWICK,
CityIds::MUNSTER
],
"id" => CityIds::BREMEN,
"passes" => [

],
"seazones" => [
SeaZoneIds::NORTH_SEA
]
],
CityIds::MUNSTER => [
"x" => 2620,
"y" => 662,
"name" => "Münster",
"home_power" => powers::PROTESTANT,
"language" => LanguageZones::GERMAN,
"connections" => [
CityIds::BREMEN,
CityIds::KASSEL,
CityIds::AMSTERDAM
],
"id" => CityIds::MUNSTER,
"passes" => [

],
"seazones" => [

]
],
CityIds::KASSEL => [
"x" => 2785,
"y" => 839,
"name" => "Kassel",
"home_power" => powers::PROTESTANT,
"language" => LanguageZones::GERMAN,
"connections" => [
CityIds::MAINZ,
CityIds::BRUNSWICK,
CityIds::MUNSTER,
CityIds::NUREMBERG,
CityIds::ERFURT
],
"id" => CityIds::KASSEL,
"passes" => [

],
"seazones" => [

]
],
CityIds::ERFURT => [
"x" => 2942,
"y" => 875,
"name" => "Erfurt",
"home_power" => powers::PROTESTANT,
"language" => LanguageZones::GERMAN,
"connections" => [
CityIds::KASSEL,
CityIds::MAGDEBURG,
CityIds::LEIPZIG
],
"id" => CityIds::ERFURT,
"passes" => [

],
"seazones" => [

]
],
CityIds::LEIPZIG => [
"x" => 3101,
"y" => 813,
"name" => "Leipzig",
"home_power" => powers::PROTESTANT,
"language" => LanguageZones::GERMAN,
"connections" => [
CityIds::WITTENBERG,
CityIds::NUREMBERG,
CityIds::ERFURT,
CityIds::PRAGUE
],
"id" => CityIds::LEIPZIG,
"passes" => [

],
"seazones" => [

]
],
CityIds::NUREMBERG => [
"x" => 2954,
"y" => 1049,
"name" => "Nuremberg",
"home_power" => powers::PROTESTANT,
"language" => LanguageZones::GERMAN,
"connections" => [
CityIds::KASSEL,
CityIds::REGENSBURG,
CityIds::LEIPZIG,
CityIds::AUGSBURG,
CityIds::WORMS
],
"id" => CityIds::NUREMBERG,
"passes" => [

],
"seazones" => [

]
],
CityIds::WORMS => [
"x" => 2823,
"y" => 1133,
"name" => "Worms",
"home_power" => powers::PROTESTANT,
"language" => LanguageZones::GERMAN,
"connections" => [
CityIds::MAINZ,
CityIds::NUREMBERG,
CityIds::AUGSBURG,
CityIds::STRASBURG
],
"id" => CityIds::WORMS,
"passes" => [

],
"seazones" => [

]
],
CityIds::REGENSBURG => [
"x" => 3152,
"y" => 1079,
"name" => "Regensburg",
"home_power" => powers::PROTESTANT,
"language" => LanguageZones::GERMAN,
"connections" => [
CityIds::SALZBURG,
CityIds::NUREMBERG,
CityIds::AUGSBURG,
CityIds::LINZ
],
"id" => CityIds::REGENSBURG,
"passes" => [

],
"seazones" => [

]
],
CityIds::STRASBURG => [
"x" => 2698,
"y" => 1194,
"name" => "Strasburg",
"home_power" => powers::PROTESTANT,
"language" => LanguageZones::GERMAN,
"connections" => [
CityIds::WORMS,
CityIds::METZ,
CityIds::BESANCON,
CityIds::BASEL
],
"id" => CityIds::STRASBURG,
"passes" => [

],
"seazones" => [

]
],
CityIds::SALZBURG => [
"x" => 3267,
"y" => 1233,
"name" => "Salzburg",
"home_power" => powers::PROTESTANT,
"language" => LanguageZones::GERMAN,
"connections" => [
CityIds::INNSBRUCK,
CityIds::REGENSBURG,
CityIds::AUGSBURG,
CityIds::LINZ
],
"id" => CityIds::SALZBURG,
"passes" => [
CityIds::GRAZ
],
"seazones" => [

]
],
CityIds::VIENNA => [
"x" => 3594,
"y" => 1144,
"name" => "Vienna",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::GERMAN,
"connections" => [
CityIds::LINZ,
CityIds::BRUNN,
CityIds::PRESSBURG,
CityIds::GRAZ
],
"id" => CityIds::VIENNA,
"passes" => [

],
"seazones" => [

]
],
CityIds::LINZ => [
"x" => 3406,
"y" => 1172,
"name" => "Linz",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::GERMAN,
"connections" => [
CityIds::VIENNA,
CityIds::REGENSBURG,
CityIds::SALZBURG,
CityIds::PRAGUE
],
"id" => CityIds::LINZ,
"passes" => [

],
"seazones" => [

]
],
CityIds::GRAZ => [
"x" => 3491,
"y" => 1331,
"name" => "Graz",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::GERMAN,
"connections" => [
CityIds::VIENNA,
CityIds::MOHACS,
CityIds::TRIESTE,
CityIds::AGRAM
],
"id" => CityIds::GRAZ,
"passes" => [
CityIds::SALZBURG
],
"seazones" => [

]
],
CityIds::INNSBRUCK => [
"x" => 3135,
"y" => 1295,
"name" => "Innsbruck",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::GERMAN,
"connections" => [
CityIds::SALZBURG,
CityIds::ZURICH
],
"id" => CityIds::INNSBRUCK,
"passes" => [
CityIds::AUGSBURG
],
"seazones" => [

]
],
CityIds::ZURICH => [
"x" => 2830,
"y" => 1342,
"name" => "Zürich",
"home_power" => powers::INDEPENDENT,
"language" => LanguageZones::GERMAN,
"connections" => [
CityIds::BASEL,
CityIds::INNSBRUCK
],
"id" => CityIds::ZURICH,
"passes" => [

],
"seazones" => [

]
],
CityIds::BASEL => [
"x" => 2675,
"y" => 1338,
"name" => "Basel",
"home_power" => powers::INDEPENDENT,
"language" => LanguageZones::GERMAN,
"connections" => [
CityIds::ZURICH,
CityIds::STRASBURG,
CityIds::GENEVA,
CityIds::BESANCON
],
"id" => CityIds::BASEL,
"passes" => [

],
"seazones" => [

]
],
CityIds::LONDON => [
"x" => 1904,
"y" => 830,
"name" => "London",
"home_power" => powers::ENGLAND,
"language" => LanguageZones::ENGLISH,
"connections" => [
CityIds::NORWICH,
CityIds::LINCOLN,
CityIds::SHREWSBURY,
CityIds::BRISTOL,
CityIds::PORTSMOUTH
],
"id" => CityIds::LONDON,
"passes" => [

],
"seazones" => [
SeaZoneIds::NORTH_SEA
]
],
CityIds::BRISTOL => [
"x" => 1674,
"y" => 812,
"name" => "Bristol",
"home_power" => powers::ENGLAND,
"language" => LanguageZones::ENGLISH,
"connections" => [
CityIds::LONDON,
CityIds::WALES,
CityIds::SHREWSBURY,
CityIds::PLYMOUTH,
CityIds::PORTSMOUTH
],
"id" => CityIds::BRISTOL,
"passes" => [

],
"seazones" => [
SeaZoneIds::IRISH_SEA
]
],
CityIds::YORK => [
"x" => 1715,
"y" => 499,
"name" => "York",
"home_power" => powers::ENGLAND,
"language" => LanguageZones::ENGLISH,
"connections" => [
CityIds::CARLISLE,
CityIds::LINCOLN,
CityIds::SHREWSBURY,
CityIds::BERWICK
],
"id" => CityIds::YORK,
"passes" => [

],
"seazones" => [

]
],
CityIds::NORWICH => [
"x" => 2016,
"y" => 663,
"name" => "Norwich",
"home_power" => powers::ENGLAND,
"language" => LanguageZones::ENGLISH,
"connections" => [
CityIds::LONDON
],
"id" => CityIds::NORWICH,
"passes" => [

],
"seazones" => [
SeaZoneIds::NORTH_SEA
]
],
CityIds::PORTSMOUTH => [
"x" => 1784,
"y" => 945,
"name" => "Portsmouth",
"home_power" => powers::ENGLAND,
"language" => LanguageZones::ENGLISH,
"connections" => [
CityIds::LONDON,
CityIds::BRISTOL,
CityIds::PLYMOUTH
],
"id" => CityIds::PORTSMOUTH,
"passes" => [

],
"seazones" => [
SeaZoneIds::ENGLISH_CHANNEL
]
],
CityIds::PLYMOUTH => [
"x" => 1517,
"y" => 1023,
"name" => "Plymouth",
"home_power" => powers::ENGLAND,
"language" => LanguageZones::ENGLISH,
"connections" => [
CityIds::BRISTOL,
CityIds::PLYMOUTH
],
"id" => CityIds::PLYMOUTH,
"passes" => [

],
"seazones" => [
SeaZoneIds::ENGLISH_CHANNEL
]
],
CityIds::LINCOLN => [
"x" => 1828,
"y" => 658,
"name" => "Lincoln",
"home_power" => powers::ENGLAND,
"language" => LanguageZones::ENGLISH,
"connections" => [
CityIds::LONDON,
CityIds::YORK
],
"id" => CityIds::LINCOLN,
"passes" => [

],
"seazones" => [

]
],
CityIds::WALES => [
"x" => 1518,
"y" => 758,
"name" => "Wales",
"home_power" => powers::ENGLAND,
"language" => LanguageZones::ENGLISH,
"connections" => [
CityIds::BRISTOL,
CityIds::SHREWSBURY
],
"id" => CityIds::WALES,
"passes" => [

],
"seazones" => [

]
],
CityIds::SHREWSBURY => [
"x" => 1657,
"y" => 646,
"name" => "Shrewsbury",
"home_power" => powers::ENGLAND,
"language" => LanguageZones::ENGLISH,
"connections" => [
CityIds::LONDON,
CityIds::WALES,
CityIds::BRISTOL,
CityIds::YORK,
CityIds::CARLISLE
],
"id" => CityIds::SHREWSBURY,
"passes" => [

],
"seazones" => [

]
],
CityIds::CARLISLE => [
"x" => 1569,
"y" => 404,
"name" => "Carlisle",
"home_power" => powers::ENGLAND,
"language" => LanguageZones::ENGLISH,
"connections" => [
CityIds::BERWICK,
CityIds::YORK,
CityIds::SHREWSBURY,
CityIds::GLASGOW
],
"id" => CityIds::CARLISLE,
"passes" => [

],
"seazones" => [

]
],
CityIds::BERWICK => [
"x" => 1692,
"y" => 308,
"name" => "Berwick",
"home_power" => powers::ENGLAND,
"language" => LanguageZones::ENGLISH,
"connections" => [
CityIds::CARLISLE,
CityIds::YORK,
CityIds::EDINBURGH
],
"id" => CityIds::BERWICK,
"passes" => [

],
"seazones" => [
SeaZoneIds::NORTH_SEA
]
],
CityIds::EDINBURGH => [
"x" => 1540,
"y" => 254,
"name" => "Edinburgh",
"home_power" => powers::MINOR_SCOTLAND,
"language" => LanguageZones::ENGLISH,
"connections" => [
CityIds::BERWICK,
CityIds::STIRLING,
CityIds::GLASGOW
],
"id" => CityIds::EDINBURGH,
"passes" => [

],
"seazones" => [
SeaZoneIds::NORTH_SEA
]
],
CityIds::STIRLING => [
"x" => 1382,
"y" => 204,
"name" => "Stirling",
"home_power" => powers::MINOR_SCOTLAND,
"language" => LanguageZones::ENGLISH,
"connections" => [
CityIds::EDINBURGH,
CityIds::GLASGOW
],
"id" => CityIds::STIRLING,
"passes" => [

],
"seazones" => [

]
],
CityIds::GLASGOW => [
"x" => 1403,
"y" => 362,
"name" => "Glasgow",
"home_power" => powers::MINOR_SCOTLAND,
"language" => LanguageZones::ENGLISH,
"connections" => [
CityIds::CARLISLE,
CityIds::STIRLING,
CityIds::EDINBURGH
],
"id" => CityIds::GLASGOW,
"passes" => [

],
"seazones" => [
SeaZoneIds::IRISH_SEA
]
],
CityIds::PARIS => [
"x" => 2128,
"y" => 1188,
"name" => "Paris",
"home_power" => powers::FRANCE,
"language" => LanguageZones::FRENCH,
"connections" => [
CityIds::ROUEN,
CityIds::BOULOGNE,
CityIds::ST_QUENTIN,
CityIds::ST_DIZIER,
CityIds::DIJON
],
"id" => CityIds::PARIS,
"passes" => [

],
"seazones" => [

]
],
CityIds::LYON => [
"x" => 2430,
"y" => 1567,
"name" => "Lyon",
"home_power" => powers::FRANCE,
"language" => LanguageZones::FRENCH,
"connections" => [
CityIds::GENEVA,
CityIds::ORLEANS,
CityIds::DIJON,
CityIds::LIMOGES,
CityIds::AVIGNON
],
"id" => CityIds::LYON,
"passes" => [

],
"seazones" => [

]
],
CityIds::ROUEN => [
"x" => 1926,
"y" => 1123,
"name" => "Rouen",
"home_power" => powers::FRANCE,
"language" => LanguageZones::FRENCH,
"connections" => [
CityIds::PARIS,
CityIds::BOULOGNE,
CityIds::TOURS,
CityIds::NANTES
],
"id" => CityIds::ROUEN,
"passes" => [

],
"seazones" => [
SeaZoneIds::ENGLISH_CHANNEL
]
],
CityIds::MARSEILLE => [
"x" => 2506,
"y" => 1905,
"name" => "Marseille",
"home_power" => powers::FRANCE,
"language" => LanguageZones::FRENCH,
"connections" => [
CityIds::AVIGNON,
CityIds::NICE
],
"id" => CityIds::MARSEILLE,
"passes" => [

],
"seazones" => [
SeaZoneIds::GULF_OF_LYON
]
],
CityIds::BORDEAUX => [
"x" => 1899,
"y" => 1690,
"name" => "Bordeaux",
"home_power" => powers::FRANCE,
"language" => LanguageZones::FRENCH,
"connections" => [
CityIds::NANTES,
CityIds::TOURS,
CityIds::LIMOGES,
CityIds::TOULOUSE
],
"id" => CityIds::BORDEAUX,
"passes" => [
CityIds::NAVARRE
],
"seazones" => [
SeaZoneIds::BAY_OF_BISCAY
]
],
CityIds::GRENOBLE => [
"x" => 2556,
"y" => 1716,
"name" => "Grenoble",
"home_power" => powers::FRANCE,
"language" => LanguageZones::FRENCH,
"connections" => [
CityIds::LYON,
CityIds::GENEVA
],
"id" => CityIds::GRENOBLE,
"passes" => [
CityIds::TURIN
],
"seazones" => [

]
],
CityIds::DIJON => [
"x" => 2321,
"y" => 1332,
"name" => "Dijon",
"home_power" => powers::FRANCE,
"language" => LanguageZones::FRENCH,
"connections" => [
CityIds::ORLEANS,
CityIds::LYON,
CityIds::BESANCON,
CityIds::PARIS,
CityIds::ST_DIZIER
],
"id" => CityIds::DIJON,
"passes" => [

],
"seazones" => [

]
],
CityIds::ST_DIZIER => [
"x" => 2322,
"y" => 1170,
"name" => "St. Dizier",
"home_power" => powers::FRANCE,
"language" => LanguageZones::FRENCH,
"connections" => [
CityIds::PARIS,
CityIds::ST_QUENTIN,
CityIds::BRUSSELS,
CityIds::METZ,
CityIds::DIJON
],
"id" => CityIds::ST_DIZIER,
"passes" => [

],
"seazones" => [

]
],
CityIds::ST_QUENTIN => [
"x" => 2211,
"y" => 1059,
"name" => "St. Quentin",
"home_power" => powers::FRANCE,
"language" => LanguageZones::FRENCH,
"connections" => [
CityIds::PARIS,
CityIds::BOULOGNE,
CityIds::BRUSSELS,
CityIds::ST_DIZIER
],
"id" => CityIds::ST_QUENTIN,
"passes" => [

],
"seazones" => [

]
],
CityIds::BOULOGNE => [
"x" => 2075,
"y" => 1005,
"name" => "Boulogne",
"home_power" => powers::FRANCE,
"language" => LanguageZones::FRENCH,
"connections" => [
CityIds::PARIS,
CityIds::ST_QUENTIN,
CityIds::ROUEN,
CityIds::CALAIS
],
"id" => CityIds::BOULOGNE,
"passes" => [

],
"seazones" => [
SeaZoneIds::ENGLISH_CHANNEL
]
],
CityIds::ORLEANS => [
"x" => 2138,
"y" => 1345,
"name" => "Orleans",
"home_power" => powers::FRANCE,
"language" => LanguageZones::FRENCH,
"connections" => [
CityIds::PARIS,
CityIds::TOURS,
CityIds::DIJON,
CityIds::LYON
],
"id" => CityIds::ORLEANS,
"passes" => [

],
"seazones" => [

]
],
CityIds::AVIGNON => [
"x" => 2410,
"y" => 1771,
"name" => "Avignon",
"home_power" => powers::FRANCE,
"language" => LanguageZones::FRENCH,
"connections" => [
CityIds::LYON,
CityIds::MARSEILLE,
CityIds::TOULOUSE
],
"id" => CityIds::AVIGNON,
"passes" => [
CityIds::BARCELONA
],
"seazones" => [

]
],
CityIds::TOULOUSE => [
"x" => 2110,
"y" => 1862,
"name" => "Toulouse",
"home_power" => powers::FRANCE,
"language" => LanguageZones::FRENCH,
"connections" => [
CityIds::BORDEAUX,
CityIds::AVIGNON
],
"id" => CityIds::TOULOUSE,
"passes" => [
CityIds::BARCELONA
],
"seazones" => [

]
],
CityIds::LIMOGES => [
"x" => 2094,
"y" => 1522,
"name" => "Limoges",
"home_power" => powers::FRANCE,
"language" => LanguageZones::FRENCH,
"connections" => [
CityIds::LYON,
CityIds::TOURS,
CityIds::BORDEAUX
],
"id" => CityIds::LIMOGES,
"passes" => [

],
"seazones" => [

]
],
CityIds::TOURS => [
"x" => 1969,
"y" => 1403,
"name" => "Tours",
"home_power" => powers::FRANCE,
"language" => LanguageZones::FRENCH,
"connections" => [
CityIds::ROUEN,
CityIds::ORLEANS,
CityIds::BORDEAUX,
CityIds::LIMOGES,
CityIds::NANTES
],
"id" => CityIds::TOURS,
"passes" => [

],
"seazones" => [

]
],
CityIds::NANTES => [
"x" => 1770,
"y" => 1434,
"name" => "Nantes",
"home_power" => powers::FRANCE,
"language" => LanguageZones::FRENCH,
"connections" => [
CityIds::ROUEN,
CityIds::TOURS,
CityIds::BORDEAUX,
CityIds::BREST
],
"id" => CityIds::NANTES,
"passes" => [

],
"seazones" => [
SeaZoneIds::BAY_OF_BISCAY
]
],
CityIds::BREST => [
"x" => 1528,
"y" => 1299,
"name" => "Brest",
"home_power" => powers::FRANCE,
"language" => LanguageZones::FRENCH,
"connections" => [
CityIds::NANTES
],
"id" => CityIds::BREST,
"passes" => [

],
"seazones" => [
SeaZoneIds::ENGLISH_CHANNEL
]
],
CityIds::BRUSSELS => [
"x" => 2320,
"y" => 947,
"name" => "Brussels",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::FRENCH,
"connections" => [
CityIds::CALAIS,
CityIds::ANTWERP,
CityIds::LIEGE,
CityIds::ST_QUENTIN,
CityIds::ST_DIZIER
],
"id" => CityIds::BRUSSELS,
"passes" => [

],
"seazones" => [

]
],
CityIds::BESANCON => [
"x" => 2510,
"y" => 1292,
"name" => "Besançon",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::FRENCH,
"connections" => [
CityIds::DIJON,
CityIds::BASEL,
CityIds::GENEVA,
CityIds::METZ,
CityIds::STRASBURG
],
"id" => CityIds::BESANCON,
"passes" => [

],
"seazones" => [

]
],
CityIds::CALAIS => [
"x" => 2142,
"y" => 869,
"name" => "Calais",
"home_power" => powers::ENGLAND,
"language" => LanguageZones::FRENCH,
"connections" => [
CityIds::BOULOGNE,
CityIds::ANTWERP,
CityIds::BRUSSELS
],
"id" => CityIds::CALAIS,
"passes" => [

],
"seazones" => [
SeaZoneIds::NORTH_SEA
]
],
CityIds::METZ => [
"x" => 2503,
"y" => 1118,
"name" => "Metz",
"home_power" => powers::INDEPENDENT,
"language" => LanguageZones::FRENCH,
"connections" => [
CityIds::TRIER,
CityIds::BESANCON,
CityIds::LIEGE,
CityIds::STRASBURG,
CityIds::ST_DIZIER
],
"id" => CityIds::METZ,
"passes" => [

],
"seazones" => [

]
],
CityIds::LIEGE => [
"x" => 2471,
"y" => 908,
"name" => "Liege",
"home_power" => powers::INDEPENDENT,
"language" => LanguageZones::FRENCH,
"connections" => [
CityIds::TRIER,
CityIds::ANTWERP,
CityIds::BRUSSELS,
CityIds::METZ,
CityIds::COLOGNE
],
"id" => CityIds::LIEGE,
"passes" => [

],
"seazones" => [

]
],
CityIds::GENEVA => [
"x" => 2593,
"y" => 1491,
"name" => "Geneva",
"home_power" => powers::INDEPENDENT,
"language" => LanguageZones::FRENCH,
"connections" => [
CityIds::LYON,
CityIds::BESANCON,
CityIds::BASEL,
CityIds::GRENOBLE
],
"id" => CityIds::GENEVA,
"passes" => [
CityIds::TURIN
],
"seazones" => [

]
],
CityIds::NICE => [
"x" => 2700,
"y" => 1858,
"name" => "Nice",
"home_power" => powers::INDEPENDENT,
"language" => LanguageZones::FRENCH,
"connections" => [
CityIds::MARSEILLE
],
"id" => CityIds::NICE,
"passes" => [
CityIds::GENOA
],
"seazones" => [
SeaZoneIds::GULF_OF_LYON
]
],
CityIds::ROME => [
"x" => 3241,
"y" => 2045,
"name" => "Rome",
"home_power" => powers::PAPACY,
"language" => LanguageZones::ITALIAN,
"connections" => [
CityIds::NAPLES,
CityIds::SIENA,
CityIds::ANCONA,
CityIds::CERIGNOLA
],
"id" => CityIds::ROME,
"passes" => [

],
"seazones" => [
SeaZoneIds::TYRRHENIAN_SEA
]
],
CityIds::RAVENNA => [
"x" => 3247,
"y" => 1720,
"name" => "Ravenna",
"home_power" => powers::PAPACY,
"language" => LanguageZones::ITALIAN,
"connections" => [
CityIds::ANCONA,
CityIds::VENICE,
CityIds::MODENA
],
"id" => CityIds::RAVENNA,
"passes" => [

],
"seazones" => [
SeaZoneIds::ADRIATIC_SEA
]
],
CityIds::ANCONA => [
"x" => 3357,
"y" => 1878,
"name" => "Ancona",
"home_power" => powers::PAPACY,
"language" => LanguageZones::ITALIAN,
"connections" => [
CityIds::RAVENNA,
CityIds::ROME,
CityIds::CERIGNOLA
],
"id" => CityIds::ANCONA,
"passes" => [

],
"seazones" => [
SeaZoneIds::ADRIATIC_SEA
]
],
CityIds::NAPLES => [
"x" => 3475,
"y" => 2213,
"name" => "Naples",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::ITALIAN,
"connections" => [
CityIds::TARANTO,
CityIds::ROME,
CityIds::MESSINA
],
"id" => CityIds::NAPLES,
"passes" => [

],
"seazones" => [
SeaZoneIds::TYRRHENIAN_SEA
]
],
CityIds::TRIESTE => [
"x" => 3375,
"y" => 1515,
"name" => "Trieste",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::ITALIAN,
"connections" => [
CityIds::VENICE,
CityIds::GRAZ,
CityIds::AGRAM,
CityIds::ZARA
],
"id" => CityIds::TRIESTE,
"passes" => [

],
"seazones" => [
SeaZoneIds::ADRIATIC_SEA
]
],
CityIds::CERIGNOLA => [
"x" => 3544,
"y" => 2042,
"name" => "Cerignola",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::ITALIAN,
"connections" => [
CityIds::ANCONA,
CityIds::ROME,
CityIds::TARANTO
],
"id" => CityIds::CERIGNOLA,
"passes" => [

],
"seazones" => [

]
],
CityIds::TARANTO => [
"x" => 3716,
"y" => 2205,
"name" => "Taranto",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::ITALIAN,
"connections" => [
CityIds::NAPLES,
CityIds::CERIGNOLA,
CityIds::MESSINA
],
"id" => CityIds::TARANTO,
"passes" => [

],
"seazones" => [
SeaZoneIds::IONIAN_SEA
]
],
CityIds::MESSINA => [
"x" => 3594,
"y" => 2553,
"name" => "Messina",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::ITALIAN,
"connections" => [
CityIds::NAPLES,
CityIds::PALERMO,
CityIds::TARANTO
],
"id" => CityIds::MESSINA,
"passes" => [

],
"seazones" => [
SeaZoneIds::TYRRHENIAN_SEA
]
],
CityIds::PALERMO => [
"x" => 3378,
"y" => 2546,
"name" => "Palermo",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::ITALIAN,
"connections" => [
CityIds::MESSINA
],
"id" => CityIds::PALERMO,
"passes" => [

],
"seazones" => [
SeaZoneIds::TYRRHENIAN_SEA
]
],
CityIds::GENOA => [
"x" => 2844,
"y" => 1750,
"name" => "Genoa",
"home_power" => powers::MINOR_GENOA,
"language" => LanguageZones::ITALIAN,
"connections" => [
CityIds::TURIN,
CityIds::PAVIA,
CityIds::FLORENCE,
CityIds::SIENA
],
"id" => CityIds::GENOA,
"passes" => [
CityIds::NICE
],
"seazones" => [
SeaZoneIds::GULF_OF_LYON
]
],
CityIds::VENICE => [
"x" => 3205,
"y" => 1524,
"name" => "Venice",
"home_power" => powers::MINOR_VENICE,
"language" => LanguageZones::ITALIAN,
"connections" => [
CityIds::TRENT,
CityIds::MODENA,
CityIds::RAVENNA,
CityIds::TRIESTE
],
"id" => CityIds::VENICE,
"passes" => [

],
"seazones" => [
SeaZoneIds::ADRIATIC_SEA
]
],
CityIds::MILAN => [
"x" => 2864,
"y" => 1495,
"name" => "Milan",
"home_power" => powers::INDEPENDENT,
"language" => LanguageZones::ITALIAN,
"connections" => [
CityIds::TRENT,
CityIds::MODENA,
CityIds::PAVIA,
CityIds::TURIN
],
"id" => CityIds::MILAN,
"passes" => [

],
"seazones" => [

]
],
CityIds::FLORENCE => [
"x" => 3094,
"y" => 1769,
"name" => "Florence",
"home_power" => powers::INDEPENDENT,
"language" => LanguageZones::ITALIAN,
"connections" => [
CityIds::MODENA,
CityIds::GENOA,
CityIds::SIENA
],
"id" => CityIds::FLORENCE,
"passes" => [

],
"seazones" => [

]
],
CityIds::TURIN => [
"x" => 2702,
"y" => 1655,
"name" => "Turin",
"home_power" => powers::INDEPENDENT,
"language" => LanguageZones::ITALIAN,
"connections" => [
CityIds::MILAN,
CityIds::PAVIA,
CityIds::GENOA
],
"id" => CityIds::TURIN,
"passes" => [
CityIds::GENEVA
],
"seazones" => [

]
],
CityIds::TRENT => [
"x" => 3051,
"y" => 1436,
"name" => "Trent",
"home_power" => powers::INDEPENDENT,
"language" => LanguageZones::ITALIAN,
"connections" => [
CityIds::MODENA,
CityIds::VENICE,
CityIds::MILAN
],
"id" => CityIds::TRENT,
"passes" => [
CityIds::INNSBRUCK
],
"seazones" => [

]
],
CityIds::MODENA => [
"x" => 3069,
"y" => 1613,
"name" => "Modena",
"home_power" => powers::INDEPENDENT,
"language" => LanguageZones::ITALIAN,
"connections" => [
CityIds::MILAN,
CityIds::VENICE,
CityIds::RAVENNA,
CityIds::PAVIA,
CityIds::FLORENCE
],
"id" => CityIds::MODENA,
"passes" => [

],
"seazones" => [

]
],
CityIds::PAVIA => [
"x" => 2917,
"y" => 1630,
"name" => "Pavia",
"home_power" => powers::INDEPENDENT,
"language" => LanguageZones::ITALIAN,
"connections" => [
CityIds::MILAN,
CityIds::MODENA,
CityIds::GENOA,
CityIds::TURIN
],
"id" => CityIds::PAVIA,
"passes" => [

],
"seazones" => [

]
],
CityIds::SIENA => [
"x" => 3106,
"y" => 1932,
"name" => "Siena",
"home_power" => powers::INDEPENDENT,
"language" => LanguageZones::ITALIAN,
"connections" => [
CityIds::FLORENCE,
CityIds::ROME,
CityIds::GENOA
],
"id" => CityIds::SIENA,
"passes" => [

],
"seazones" => [

]
],
CityIds::VALLADOLID => [
"x" => 1514,
"y" => 2180,
"name" => "Valladolid",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::SPANISH,
"connections" => [
CityIds::MADRID,
CityIds::BILBAO,
CityIds::CORUNNA
],
"id" => CityIds::VALLADOLID,
"passes" => [

],
"seazones" => [

]
],
CityIds::NAVARRE => [
"x" => 1822,
"y" => 1939,
"name" => "Navarre",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::SPANISH,
"connections" => [
CityIds::BILBAO,
CityIds::ZARAGOZA
],
"id" => CityIds::NAVARRE,
"passes" => [
CityIds::BORDEAUX
],
"seazones" => [

]
],
CityIds::BARCELONA => [
"x" => 2227,
"y" => 2186,
"name" => "Barcelona",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::SPANISH,
"connections" => [
CityIds::ZARAGOZA,
CityIds::VALENCIA
],
"id" => CityIds::BARCELONA,
"passes" => [
CityIds::TOULOUSE
],
"seazones" => [
SeaZoneIds::GULF_OF_LYON
]
],
CityIds::SEVILLE => [
"x" => 1442,
"y" => 2766,
"name" => "Seville",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::SPANISH,
"connections" => [
CityIds::CORDOBA,
CityIds::GIBRALTAR
],
"id" => CityIds::SEVILLE,
"passes" => [

],
"seazones" => [
SeaZoneIds::ATLANTIC_OCEAN
]
],
CityIds::GIBRALTAR => [
"x" => 1494,
"y" => 2945,
"name" => "Gibraltar",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::SPANISH,
"connections" => [
CityIds::SEVILLE,
CityIds::GRANADA
],
"id" => CityIds::GIBRALTAR,
"passes" => [

],
"seazones" => [
SeaZoneIds::ATLANTIC_OCEAN
]
],
CityIds::CORUNNA => [
"x" => 1136,
"y" => 1996,
"name" => "Corunna",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::SPANISH,
"connections" => [
CityIds::BILBAO,
CityIds::VALLADOLID
],
"id" => CityIds::CORUNNA,
"passes" => [

],
"seazones" => [
SeaZoneIds::BAY_OF_BISCAY
]
],
CityIds::BILBAO => [
"x" => 1653,
"y" => 1950,
"name" => "Bilbao",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::SPANISH,
"connections" => [
CityIds::CORUNNA,
CityIds::VALLADOLID,
CityIds::NAVARRE,
CityIds::ZARAGOZA
],
"id" => CityIds::BILBAO,
"passes" => [

],
"seazones" => [

]
],
CityIds::ZARAGOZA => [
"x" => 1897,
"y" => 2150,
"name" => "Zaragoza",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::SPANISH,
"connections" => [
CityIds::BILBAO,
CityIds::MADRID,
CityIds::NAVARRE,
CityIds::BARCELONA
],
"id" => CityIds::ZARAGOZA,
"passes" => [

],
"seazones" => [

]
],
CityIds::MADRID => [
"x" => 1670,
"y" => 2358,
"name" => "Madrid",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::SPANISH,
"connections" => [
CityIds::VALLADOLID,
CityIds::ZARAGOZA,
CityIds::VALENCIA,
CityIds::CORDOBA
],
"id" => CityIds::MADRID,
"passes" => [

],
"seazones" => [

]
],
CityIds::VALENCIA => [
"x" => 1992,
"y" => 2457,
"name" => "Valencia",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::SPANISH,
"connections" => [
CityIds::MADRID,
CityIds::BARCELONA,
CityIds::CARTAGENA
],
"id" => CityIds::VALENCIA,
"passes" => [

],
"seazones" => [
SeaZoneIds::GULF_OF_LYON
]
],
CityIds::PALMA => [
"x" => 2341,
"y" => 2392,
"name" => "Palma",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::SPANISH,
"connections" => [

],
"id" => CityIds::PALMA,
"passes" => [

],
"seazones" => [
SeaZoneIds::GULF_OF_LYON
]
],
CityIds::CORDOBA => [
"x" => 1566,
"y" => 2654,
"name" => "Cordoba",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::SPANISH,
"connections" => [
CityIds::SEVILLE,
CityIds::GRANADA,
CityIds::MADRID
],
"id" => CityIds::CORDOBA,
"passes" => [

],
"seazones" => [

]
],
CityIds::GRANADA => [
"x" => 1676,
"y" => 2781,
"name" => "Granada",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::SPANISH,
"connections" => [
CityIds::CORDOBA,
CityIds::GIBRALTAR,
CityIds::CARTAGENA
],
"id" => CityIds::GRANADA,
"passes" => [

],
"seazones" => [

]
],
CityIds::CARTAGENA => [
"x" => 1949,
"y" => 2716,
"name" => "Cartagena",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::SPANISH,
"connections" => [
CityIds::VALENCIA,
CityIds::GRANADA
],
"id" => CityIds::CARTAGENA,
"passes" => [

],
"seazones" => [
SeaZoneIds::GULF_OF_LYON
]
],
CityIds::ISTANBUL => [
"x" => 4892,
"y" => 2014,
"name" => "Istanbul",
"home_power" => powers::OTTOMAN,
"language" => LanguageZones::OTHER,
"connections" => [
CityIds::EDIRNE,
CityIds::VARNA
],
"id" => CityIds::ISTANBUL,
"passes" => [

],
"seazones" => [
SeaZoneIds::BLACK_SEA
]
],
CityIds::EDIRNE => [
"x" => 4651,
"y" => 1964,
"name" => "Edirne",
"home_power" => powers::OTTOMAN,
"language" => LanguageZones::OTHER,
"connections" => [
CityIds::ISTANBUL,
CityIds::VARNA,
CityIds::SOFIA,
CityIds::SALONIKA
],
"id" => CityIds::EDIRNE,
"passes" => [

],
"seazones" => [

]
],
CityIds::SALONIKA => [
"x" => 4283,
"y" => 2134,
"name" => "Salonika",
"home_power" => powers::OTTOMAN,
"language" => LanguageZones::OTHER,
"connections" => [
CityIds::EDIRNE,
CityIds::LARISSA
],
"id" => CityIds::SALONIKA,
"passes" => [
CityIds::SOFIA
],
"seazones" => [
SeaZoneIds::AEGEAN_SEA
]
],
CityIds::ATHENS => [
"x" => 4404,
"y" => 2470,
"name" => "Athens",
"home_power" => powers::OTTOMAN,
"language" => LanguageZones::OTHER,
"connections" => [
CityIds::LARISSA,
CityIds::LEPANTO,
CityIds::CORON
],
"id" => CityIds::ATHENS,
"passes" => [

],
"seazones" => [
SeaZoneIds::AEGEAN_SEA
]
],
CityIds::SCUTARI => [
"x" => 3937,
"y" => 1984,
"name" => "Scutari",
"home_power" => powers::OTTOMAN,
"language" => LanguageZones::OTHER,
"connections" => [
CityIds::DURAZZO,
CityIds::RAGUSA
],
"id" => CityIds::SCUTARI,
"passes" => [
CityIds::NEZH
],
"seazones" => [
SeaZoneIds::ADRIATIC_SEA
]
],
CityIds::VARNA => [
"x" => 4772,
"y" => 1747,
"name" => "Varna",
"home_power" => powers::OTTOMAN,
"language" => LanguageZones::OTHER,
"connections" => [
CityIds::BUCHAREST,
CityIds::EDIRNE,
CityIds::ISTANBUL
],
"id" => CityIds::VARNA,
"passes" => [

],
"seazones" => [
SeaZoneIds::BLACK_SEA
]
],
CityIds::BUCHAREST => [
"x" => 4576,
"y" => 1552,
"name" => "Bucharest",
"home_power" => powers::OTTOMAN,
"language" => LanguageZones::OTHER,
"connections" => [
CityIds::NICOPOLIS,
CityIds::VARNA
],
"id" => CityIds::BUCHAREST,
"passes" => [

],
"seazones" => [

]
],
CityIds::NICOPOLIS => [
"x" => 4454,
"y" => 1694,
"name" => "Nicopolis",
"home_power" => powers::OTTOMAN,
"language" => LanguageZones::OTHER,
"connections" => [
CityIds::BUCHAREST,
CityIds::BELGRADE
],
"id" => CityIds::NICOPOLIS,
"passes" => [
CityIds::SOFIA
],
"seazones" => [

]
],
CityIds::SOFIA => [
"x" => 4392,
"y" => 1890,
"name" => "Sofia",
"home_power" => powers::OTTOMAN,
"language" => LanguageZones::OTHER,
"connections" => [
CityIds::EDIRNE,
CityIds::NEZH
],
"id" => CityIds::SOFIA,
"passes" => [
CityIds::NICOPOLIS
],
"seazones" => [

]
],
CityIds::LARISSA => [
"x" => 4249,
"y" => 2307,
"name" => "Larissa",
"home_power" => powers::OTTOMAN,
"language" => LanguageZones::OTHER,
"connections" => [
CityIds::SALONIKA,
CityIds::LEPANTO,
CityIds::ATHENS
],
"id" => CityIds::LARISSA,
"passes" => [
CityIds::DURAZZO
],
"seazones" => [

]
],
CityIds::LEPANTO => [
"x" => 4177,
"y" => 2446,
"name" => "Lepanto",
"home_power" => powers::OTTOMAN,
"language" => LanguageZones::OTHER,
"connections" => [
CityIds::LARISSA,
CityIds::ATHENS
],
"id" => CityIds::LEPANTO,
"passes" => [

],
"seazones" => [
SeaZoneIds::IONIAN_SEA
]
],
CityIds::CORON => [
"x" => 4264,
"y" => 2634,
"name" => "Coron",
"home_power" => powers::OTTOMAN,
"language" => LanguageZones::OTHER,
"connections" => [
CityIds::ATHENS
],
"id" => CityIds::CORON,
"passes" => [

],
"seazones" => [
SeaZoneIds::IONIAN_SEA
]
],
CityIds::NEZH => [
"x" => 4188,
"y" => 1777,
"name" => "Nezh",
"home_power" => powers::OTTOMAN,
"language" => LanguageZones::OTHER,
"connections" => [
CityIds::BELGRADE,
CityIds::SOFIA
],
"id" => CityIds::NEZH,
"passes" => [
CityIds::SCUTARI
],
"seazones" => [

]
],
CityIds::DURAZZO => [
"x" => 3963,
"y" => 2164,
"name" => "Durazzo",
"home_power" => powers::OTTOMAN,
"language" => LanguageZones::OTHER,
"connections" => [
CityIds::SCUTARI
],
"id" => CityIds::DURAZZO,
"passes" => [
CityIds::LARISSA
],
"seazones" => [
SeaZoneIds::ADRIATIC_SEA
]
],
CityIds::ALGIERS => [
"x" => 2394,
"y" => 2779,
"name" => "Algiers",
"home_power" => powers::INDEPENDENT,
"language" => LanguageZones::OTHER,
"connections" => [

],
"id" => CityIds::ALGIERS,
"passes" => [

],
"seazones" => [
SeaZoneIds::BARBARY_COAST
]
],
CityIds::ORAN => [
"x" => 2021,
"y" => 2944,
"name" => "Oran",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::OTHER,
"connections" => [

],
"id" => CityIds::ORAN,
"passes" => [

],
"seazones" => [
SeaZoneIds::BARBARY_COAST
]
],
CityIds::TRIPOLI => [
"x" => 3435,
"y" => 3153,
"name" => "Tripoli",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::OTHER,
"connections" => [

],
"id" => CityIds::TRIPOLI,
"passes" => [

],
"seazones" => [
SeaZoneIds::NORTH_AFRICAN_COAST
]
],
CityIds::BELGRADE => [
"x" => 4010,
"y" => 1574,
"name" => "Belgrade",
"home_power" => powers::MINOR_HUNGARY,
"language" => LanguageZones::OTHER,
"connections" => [
CityIds::NICOPOLIS,
CityIds::NEZH,
CityIds::SZEGEDIN,
CityIds::MOHACS,
CityIds::AGRAM
],
"id" => CityIds::BELGRADE,
"passes" => [
CityIds::RAGUSA
],
"seazones" => [

]
],
CityIds::BUDA => [
"x" => 3865,
"y" => 1232,
"name" => "Buda",
"home_power" => powers::MINOR_HUNGARY,
"language" => LanguageZones::OTHER,
"connections" => [
CityIds::SZEGEDIN,
CityIds::MOHACS,
CityIds::PRESSBURG
],
"id" => CityIds::BUDA,
"passes" => [

],
"seazones" => [

]
],
CityIds::PRAGUE => [
"x" => 3346,
"y" => 912,
"name" => "Prague",
"home_power" => powers::MINOR_HUNGARY,
"language" => LanguageZones::OTHER,
"connections" => [
CityIds::BRUNN,
CityIds::LINZ,
CityIds::WITTENBERG,
CityIds::LEIPZIG
],
"id" => CityIds::PRAGUE,
"passes" => [

],
"seazones" => [

]
],
CityIds::SZEGEDIN => [
"x" => 3964,
"y" => 1393,
"name" => "Szegedin",
"home_power" => powers::MINOR_HUNGARY,
"language" => LanguageZones::OTHER,
"connections" => [
CityIds::BUDA,
CityIds::BELGRADE
],
"id" => CityIds::SZEGEDIN,
"passes" => [
CityIds::NICOPOLIS
],
"seazones" => [

]
],
CityIds::PRESSBURG => [
"x" => 3731,
"y" => 1207,
"name" => "Pressburg",
"home_power" => powers::MINOR_HUNGARY,
"language" => LanguageZones::OTHER,
"connections" => [
CityIds::BUDA,
CityIds::VIENNA
],
"id" => CityIds::PRESSBURG,
"passes" => [

],
"seazones" => [

]
],
CityIds::MOHACS => [
"x" => 3829,
"y" => 1477,
"name" => "Mohacs",
"home_power" => powers::MINOR_HUNGARY,
"language" => LanguageZones::OTHER,
"connections" => [
CityIds::BUDA,
CityIds::BELGRADE,
CityIds::GRAZ,
CityIds::AGRAM
],
"id" => CityIds::MOHACS,
"passes" => [

],
"seazones" => [

]
],
CityIds::AGRAM => [
"x" => 3578,
"y" => 1496,
"name" => "Agram",
"home_power" => powers::MINOR_HUNGARY,
"language" => LanguageZones::OTHER,
"connections" => [
CityIds::TRIESTE,
CityIds::GRAZ,
CityIds::MOHACS,
CityIds::BELGRADE
],
"id" => CityIds::AGRAM,
"passes" => [
CityIds::ZARA
],
"seazones" => [

]
],
CityIds::BRUNN => [
"x" => 3645,
"y" => 966,
"name" => "Brunn",
"home_power" => powers::MINOR_HUNGARY,
"language" => LanguageZones::OTHER,
"connections" => [
CityIds::BRESLAU,
CityIds::PRAGUE,
CityIds::VIENNA
],
"id" => CityIds::BRUNN,
"passes" => [

],
"seazones" => [

]
],
CityIds::BRESLAU => [
"x" => 3585,
"y" => 765,
"name" => "Breslau",
"home_power" => powers::MINOR_HUNGARY,
"language" => LanguageZones::OTHER,
"connections" => [
CityIds::BRUNN,
CityIds::WITTENBERG,
CityIds::BRANDENBURG
],
"id" => CityIds::BRESLAU,
"passes" => [

],
"seazones" => [

]
],
CityIds::ANTWERP => [
"x" => 2287,
"y" => 795,
"name" => "Antwerp",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::OTHER,
"connections" => [
CityIds::CALAIS,
CityIds::LIEGE,
CityIds::BRUSSELS,
CityIds::AMSTERDAM
],
"id" => CityIds::ANTWERP,
"passes" => [

],
"seazones" => [
SeaZoneIds::NORTH_SEA
]
],
CityIds::MALTA => [
"x" => 3498,
"y" => 2839,
"name" => "Malta",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::OTHER,
"connections" => [

],
"id" => CityIds::MALTA,
"passes" => [

],
"seazones" => [
SeaZoneIds::IONIAN_SEA
]
],
CityIds::CAGLIARI => [
"x" => 2949,
"y" => 2448,
"name" => "Cagliari",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::OTHER,
"connections" => [

],
"id" => CityIds::CAGLIARI,
"passes" => [

],
"seazones" => [
SeaZoneIds::TYRRHENIAN_SEA
]
],
CityIds::AMSTERDAM => [
"x" => 2363,
"y" => 672,
"name" => "Amsterdam",
"home_power" => powers::HAPSBURG,
"language" => LanguageZones::OTHER,
"connections" => [
CityIds::ANTWERP,
CityIds::MUNSTER
],
"id" => CityIds::AMSTERDAM,
"passes" => [

],
"seazones" => [
SeaZoneIds::NORTH_SEA
]
],
CityIds::CANDIA => [
"x" => 4603,
"y" => 2791,
"name" => "Candia",
"home_power" => powers::VENICE,
"language" => LanguageZones::OTHER,
"connections" => [

],
"id" => CityIds::CANDIA,
"passes" => [

],
"seazones" => [
SeaZoneIds::AEGEAN_SEA
]
],
CityIds::CORFU => [
"x" => 3987,
"y" => 2333,
"name" => "Corfu",
"home_power" => powers::VENICE,
"language" => LanguageZones::OTHER,
"connections" => [

],
"id" => CityIds::CORFU,
"passes" => [

],
"seazones" => [
SeaZoneIds::ADRIATIC_SEA
]
],
CityIds::ZARA => [
"x" => 3492,
"y" => 1696,
"name" => "Zara",
"home_power" => powers::VENICE,
"language" => LanguageZones::OTHER,
"connections" => [
CityIds::TRIESTE,
CityIds::RAGUSA
],
"id" => CityIds::ZARA,
"passes" => [
CityIds::AGRAM
],
"seazones" => [

]
],
CityIds::BASTIA => [
"x" => 2903,
"y" => 1951,
"name" => "Bastia",
"home_power" => powers::GENOA,
"language" => LanguageZones::OTHER,
"connections" => [

],
"id" => CityIds::BASTIA,
"passes" => [

],
"seazones" => [
SeaZoneIds::GULF_OF_LYON
]
],
CityIds::TUNIS => [
"x" => 3064,
"y" => 2720,
"name" => "Tunis",
"home_power" => powers::INDEPENDENT,
"language" => LanguageZones::OTHER,
"connections" => [

],
"id" => CityIds::TUNIS,
"passes" => [

],
"seazones" => [
SeaZoneIds::BARBARY_COAST
]
],
CityIds::RHODES => [
"x" => 4851,
"y" => 2646,
"name" => "Rhodes",
"home_power" => powers::INDEPENDENT,
"language" => LanguageZones::OTHER,
"connections" => [

],
"id" => CityIds::RHODES,
"passes" => [

],
"seazones" => [
SeaZoneIds::AEGEAN_SEA
]
],
CityIds::RAGUSA => [
"x" => 3779,
"y" => 1874,
"name" => "Ragusa",
"home_power" => powers::INDEPENDENT,
"language" => LanguageZones::OTHER,
"connections" => [
CityIds::ZARA,
CityIds::SCUTARI
],
"id" => CityIds::RAGUSA,
"passes" => [
CityIds::BELGRADE
],
"seazones" => [
SeaZoneIds::ADRIATIC_SEA
]
]
];

$this->tokens = [
ENGLAND_KEY => [
"name" => "English Key",
"power" => powers::ENGLAND,
"style" => "Control Keys Catholic england_key",
"db_id" => "england_scm_{INDEX}",
"types" => [
CONTROL,
KEYS,
CATHOLIC
],
BACK => [
"name" => "English Key Protestant",
"style" => "Control Keys Reformed england_key",
"types" => [
CONTROL,
KEYS,
REFORMED
]
]
],
FRANCE_KEY => [
"name" => "French Key",
"power" => powers::FRANCE,
"style" => "Control Keys Catholic france_key",
"db_id" => "tbd_1001_{INDEX}",
"types" => [
CONTROL,
KEYS,
CATHOLIC
],
BACK => [
"name" => "French Key Protestant",
"style" => "Control Keys Reformed france_key",
"types" => [
CONTROL,
KEYS,
REFORMED
]
]
],
HAPSBURG_KEY => [
"name" => "Hapsburg Key",
"power" => powers::HAPSBURG,
"style" => "Control Keys Catholic hapsburg_key",
"db_id" => "tbd_1002_{INDEX}",
"types" => [
CONTROL,
KEYS,
CATHOLIC
],
BACK => [
"name" => "Hapsburg Key Protestant",
"style" => "Control Keys Reformed hapsburg_key",
"types" => [
CONTROL,
KEYS,
REFORMED
]
]
],
OTTOMAN_KEY => [
"name" => "Ottoman Key",
"power" => powers::OTTOMAN,
"style" => "Control Keys Catholic ottoman_key",
"db_id" => "tbd_1003_{INDEX}",
"types" => [
CONTROL,
KEYS,
CATHOLIC
],
BACK => [
"name" => "Ottoman Key Protestant",
"style" => "Control Keys Reformed ottoman_key",
"types" => [
CONTROL,
KEYS,
REFORMED
]
]
],
INDEPENDENT_KEY => [
"name" => "Independent Key",
"power" => powers::INDEPENDENT,
"style" => "Control Keys Catholic independent_key",
"db_id" => "tbd_1004_{INDEX}",
"types" => [
CONTROL,
KEYS,
CATHOLIC
],
BACK => [
"name" => "Independent Key Protestant",
"style" => "Control Keys Reformed independent_key",
"types" => [
CONTROL,
KEYS,
REFORMED
]
]
],
PAPACY_KEY => [
"name" => "Papacy Key",
"power" => powers::PAPACY,
"style" => "Control Keys Catholic papacy_key",
"db_id" => "tbd_1005_{INDEX}",
"types" => [
CONTROL,
KEYS,
CATHOLIC
],
BACK => [
"name" => "Papacy Key Protestant",
"style" => "Control Keys Reformed papacy_key",
"types" => [
CONTROL,
KEYS,
REFORMED
]
]
],
ENGLAND_HEX => [
"name" => "English Hexagonal Marker",
"power" => powers::ENGLAND,
"style" => "Control Hex Catholic england_hex",
"db_id" => "tbd_1006_{INDEX}",
"types" => [
CONTROL,
HEX,
CATHOLIC
],
BACK => [
"name" => "English Hexagonal Marker Protestant",
"style" => "Control Hex Reformed england_hex",
"types" => [
CONTROL,
HEX,
REFORMED
]
]
],
FRANCE_HEX => [
"name" => "French Hexagonal Marker",
"power" => powers::FRANCE,
"style" => "Control Hex Catholic france_hex",
"db_id" => "tbd_1007_{INDEX}",
"types" => [
CONTROL,
HEX,
CATHOLIC
],
BACK => [
"name" => "French Hexagonal Marker Protestant",
"style" => "Control Hex Reformed france_hex",
"types" => [
CONTROL,
HEX,
REFORMED
]
]
],
HAPSBURG_HEX => [
"name" => "Hapsburg Hexagonal Marker",
"power" => powers::HAPSBURG,
"style" => "Control Hex Catholic hapsburg_hex",
"db_id" => "tbd_1008_{INDEX}",
"types" => [
CONTROL,
HEX,
CATHOLIC
],
BACK => [
"name" => "Hapsburg Hexagonal Marker Protestant",
"style" => "Control Hex Reformed hapsburg_hex",
"types" => [
CONTROL,
HEX,
REFORMED
]
]
],
INDEPENDENT_HEX => [
"name" => "Independent Hexagonal Marker",
"power" => powers::INDEPENDENT,
"style" => "Control Hex Catholic independent_hex",
"db_id" => "tbd_1009_{INDEX}",
"types" => [
CONTROL,
HEX,
CATHOLIC
],
BACK => [
"name" => "Independent Hexagonal Marker Protestant",
"style" => "Control Hex Reformed independent_hex",
"types" => [
CONTROL,
HEX,
REFORMED
]
]
],
OTTOMAN_HEX => [
"name" => "Ottoman Hexagonal Marker",
"power" => powers::OTTOMAN,
"style" => "Control Hex Catholic ottoman_hex",
"db_id" => "tbd_1010_{INDEX}",
"types" => [
CONTROL,
HEX,
CATHOLIC
],
BACK => [
"name" => "Ottoman Hexagonal Marker Protestant",
"style" => "Control Hex Reformed ottoman_hex",
"types" => [
CONTROL,
HEX,
REFORMED
]
]
],
PAPACY_HEX => [
"name" => "Papacy Hexagonal Marker",
"power" => powers::PAPACY,
"style" => "Control Hex Catholic papacy_hex",
"db_id" => "tbd_1011_{INDEX}",
"types" => [
CONTROL,
HEX,
CATHOLIC
],
BACK => [
"name" => "Papacy Hexagonal Marker Protestant",
"style" => "Control Hex Reformed papacy_hex",
"types" => [
CONTROL,
HEX,
REFORMED
]
]
],
PROTESTANT_HEX => [
"name" => "Protestant Hexagonal Marker",
"power" => powers::PROTESTANT,
"style" => "Control Hex Catholic protestant_hex",
"db_id" => "tbd_1012_{INDEX}",
"types" => [
CONTROL,
HEX,
CATHOLIC
],
BACK => [
"name" => "Protestant Hexagonal Marker Protestant",
"style" => "Control Hex Reformed protestant_hex",
"types" => [
CONTROL,
HEX,
REFORMED
]
]
],
ENGLAND_1UNIT => [
"name" => "English 1 Military Unit",
"power" => powers::ENGLAND,
"style" => "Military Units england_1unit",
"db_id" => "england_1unit_{INDEX}",
"strength" => 1,
"types" => [
MILITARY,
UNITS
],
BACK => [
"name" => "English 1 Mercenary Unit",
"style" => "Military Units Mercenary england_1unit",
"strength" => 1,
"types" => [
MILITARY,
UNITS,
MERCENARY
]
]
],
ENGLAND_2UNIT => [
"name" => "English 2 Military Unit",
"power" => powers::ENGLAND,
"style" => "Military Units england_2unit",
"db_id" => "tbd_1014_{INDEX}",
"strength" => 2,
"types" => [
MILITARY,
UNITS
],
BACK => [
"name" => "English 2 Mercenary Unit",
"style" => "Military Units Mercenary england_2unit",
"strength" => 2,
"types" => [
MILITARY,
UNITS,
MERCENARY
]
]
],
ENGLAND_4UNIT => [
"name" => "English 4 Military Unit",
"power" => powers::ENGLAND,
"style" => "Military Units england_4unit",
"db_id" => "tbd_1015_{INDEX}",
"strength" => 4,
"types" => [
MILITARY,
UNITS
],
BACK => [
"name" => "English 4 Mercenary Unit",
"style" => "Military Units Mercenary england_4unit",
"strength" => 4,
"types" => [
MILITARY,
UNITS,
MERCENARY
]
]
],
ENGLAND_6UNIT => [
"name" => "English 6 Military Unit",
"power" => powers::ENGLAND,
"style" => "Military Units england_6unit",
"db_id" => "tbd_1016",
"strength" => 6,
"types" => [
MILITARY,
UNITS
],
BACK => [
"name" => "English 6 Mercenary Unit",
"style" => "Military Units Mercenary england_6unit",
"strength" => 6,
"types" => [
MILITARY,
UNITS,
MERCENARY
]
]
],
FRANCE_1UNIT => [
"name" => "French 1 Military Unit",
"power" => powers::FRANCE,
"style" => "Military Units france_1unit",
"db_id" => "tbd_1017_{INDEX}",
"strength" => 1,
"types" => [
MILITARY,
UNITS
],
BACK => [
"name" => "French 1 Mercenary Unit",
"style" => "Military Units Mercenary france_1unit",
"strength" => 1,
"types" => [
MILITARY,
UNITS,
MERCENARY
]
]
],
FRANCE_2UNIT => [
"name" => "French 2 Military Unit",
"power" => powers::FRANCE,
"style" => "Military Units france_2unit",
"db_id" => "tbd_1018_{INDEX}",
"strength" => 2,
"types" => [
MILITARY,
UNITS
],
BACK => [
"name" => "French 2 Mercenary Unit",
"style" => "Military Units Mercenary france_2unit",
"strength" => 2,
"types" => [
MILITARY,
UNITS,
MERCENARY
]
]
],
FRANCE_4UNIT => [
"name" => "French 4 Military Unit",
"power" => powers::FRANCE,
"style" => "Military Units france_4unit",
"db_id" => "tbd_1019_{INDEX}",
"strength" => 4,
"types" => [
MILITARY,
UNITS
],
BACK => [
"name" => "French 4 Mercenary Unit",
"style" => "Military Units Mercenary france_4unit",
"strength" => 4,
"types" => [
MILITARY,
UNITS,
MERCENARY
]
]
],
FRANCE_6UNIT => [
"name" => "French 6 Military Unit",
"power" => powers::FRANCE,
"style" => "Military Units france_6unit",
"db_id" => "tbd_1020",
"strength" => 6,
"types" => [
MILITARY,
UNITS
],
BACK => [
"name" => "French 6 Mercenary Unit",
"style" => "Military Units Mercenary france_6unit",
"strength" => 6,
"types" => [
MILITARY,
UNITS,
MERCENARY
]
]
],
GENOA_1UNIT => [
"name" => "Genoese 1 Military Unit",
"power" => powers::MINOR_GENOA,
"style" => "Military Units genoa_1unit",
"db_id" => "tbd_1021_{INDEX}",
"strength" => 1,
"types" => [
MILITARY,
UNITS
],
BACK => [
"name" => "Genoese 2 Military Unit",
"style" => "Military Units genoa_1unit",
"strength" => 2,
"types" => [
MILITARY,
UNITS
]
]
],
HAPSBURG_1UNIT => [
"name" => "Hapsburg 1 Military Unit",
"power" => powers::HAPSBURG,
"style" => "Military Units hapsburg_1unit",
"db_id" => "tbd_1022_{INDEX}",
"strength" => 1,
"types" => [
MILITARY,
UNITS
],
BACK => [
"name" => "Hapsburg 1 Mercenary Unit",
"style" => "Military Units Mercenary hapsburg_1unit",
"strength" => 1,
"types" => [
MILITARY,
UNITS,
MERCENARY
]
]
],
HAPSBURG_2UNIT => [
"name" => "Hapsburg 2 Military Unit",
"power" => powers::HAPSBURG,
"style" => "Military Units hapsburg_2unit",
"db_id" => "tbd_1023_{INDEX}",
"strength" => 2,
"types" => [
MILITARY,
UNITS
],
BACK => [
"name" => "Hapsburg 2 Mercenary Unit",
"style" => "Military Units Mercenary hapsburg_2unit",
"strength" => 2,
"types" => [
MILITARY,
UNITS,
MERCENARY
]
]
],
HAPSBURG_4UNIT => [
"name" => "Hapsburg 4 Military Unit",
"power" => powers::HAPSBURG,
"style" => "Military Units hapsburg_4unit",
"db_id" => "tbd_1024_{INDEX}",
"strength" => 4,
"types" => [
MILITARY,
UNITS
],
BACK => [
"name" => "Hapsburg 4 Mercenary Unit",
"style" => "Military Units Mercenary hapsburg_4unit",
"strength" => 4,
"types" => [
MILITARY,
UNITS,
MERCENARY
]
]
],
HAPSBURG_6UNIT => [
"name" => "Hapsburg 6 Military Unit",
"power" => powers::HAPSBURG,
"style" => "Military Units hapsburg_6unit",
"db_id" => "tbd_1025",
"strength" => 6,
"types" => [
MILITARY,
UNITS
],
BACK => [
"name" => "Hapsburg 6 Mercenary Unit",
"style" => "Military Units Mercenary hapsburg_6unit",
"strength" => 6,
"types" => [
MILITARY,
UNITS,
MERCENARY
]
]
],
HUNGARY_1UNIT => [
"name" => "Hungarian 1 Military Unit",
"power" => powers::MINOR_HUNGARY,
"style" => "Military Units hungary_1unit",
"db_id" => "tbd_1026_{INDEX}",
"strength" => 1,
"types" => [
MILITARY,
UNITS
],
BACK => [
"name" => "Hungarian 2 Military Unit",
"style" => "Military Units hungary_1unit",
"strength" => 2,
"types" => [
MILITARY,
UNITS
]
]
],
HUNGARY_4UNIT => [
"name" => "Hungarian 4 Military Unit",
"power" => powers::MINOR_HUNGARY,
"style" => "Military Units hungary_4unit",
"db_id" => "tbd_1027",
"strength" => 4,
"types" => [
MILITARY,
UNITS
],
BACK => [
"name" => "Hungarian 2 Military Unit",
"style" => "Military Units hungary_4unit",
"strength" => 2,
"types" => [
MILITARY,
UNITS
]
]
],
INDEPENDENT_1UNIT => [
"name" => "Independent 1 Military Unit",
"power" => powers::INDEPENDENT,
"style" => "Military Units independent_1unit",
"db_id" => "tbd_1028_{INDEX}",
"strength" => 1,
"types" => [
MILITARY,
UNITS
],
BACK => [
"name" => "Independent 2 Military Unit",
"style" => "Military Units independent_1unit",
"strength" => 2,
"types" => [
MILITARY,
UNITS
]
]
],
KNIGHTS_1UNIT => [
"name" => "Knights of Saint John 1 Military Unit",
"power" => powers::INDEPENDENT,
"style" => "Military Units knights_1unit",
"db_id" => "tbd_1029",
"strength" => 1,
"types" => [
MILITARY,
UNITS
]
],
OTTOMAN_1UNIT => [
"name" => "Ottoman 1 Military Unit",
"power" => powers::OTTOMAN,
"style" => "Military Units ottoman_1unit",
"db_id" => "tbd_1030_{INDEX}",
"strength" => 1,
"types" => [
MILITARY,
UNITS
],
BACK => [
"name" => "Ottoman 1 Cavalry Unit",
"style" => "Military Units Cavalry ottoman_1unit",
"strength" => 1,
"types" => [
MILITARY,
UNITS,
CAVALRY
]
]
],
OTTOMAN_2UNIT => [
"name" => "Ottoman 2 Military Unit",
"power" => powers::OTTOMAN,
"style" => "Military Units ottoman_2unit",
"db_id" => "tbd_1031_{INDEX}",
"strength" => 2,
"types" => [
MILITARY,
UNITS
],
BACK => [
"name" => "Ottoman 2 Cavalry Unit",
"style" => "Military Units Cavalry ottoman_2unit",
"strength" => 2,
"types" => [
MILITARY,
UNITS,
CAVALRY
]
]
],
OTTOMAN_4UNIT => [
"name" => "Ottoman 4 Military Unit",
"power" => powers::OTTOMAN,
"style" => "Military Units ottoman_4unit",
"db_id" => "tbd_1032_{INDEX}",
"strength" => 4,
"types" => [
MILITARY,
UNITS
],
BACK => [
"name" => "Ottoman 4 Cavalry Unit",
"style" => "Military Units Cavalry ottoman_4unit",
"strength" => 4,
"types" => [
MILITARY,
UNITS,
CAVALRY
]
]
],
OTTOMAN_6UNIT => [
"name" => "Ottoman 6 Military Unit",
"power" => powers::OTTOMAN,
"style" => "Military Units ottoman_6unit",
"db_id" => "tbd_1033",
"strength" => 6,
"types" => [
MILITARY,
UNITS
],
BACK => [
"name" => "Ottoman 6 Cavalry Unit",
"style" => "Military Units Cavalry ottoman_6unit",
"strength" => 6,
"types" => [
MILITARY,
UNITS,
CAVALRY
]
]
],
PAPACY_1UNIT => [
"name" => "Papacy 1 Military Unit",
"power" => powers::PAPACY,
"style" => "Military Units papacy_1unit",
"db_id" => "tbd_1034_{INDEX}",
"strength" => 1,
"types" => [
MILITARY,
UNITS
],
BACK => [
"name" => "Papacy 1 Mercenary Unit",
"style" => "Military Units Mercenary papacy_1unit",
"strength" => 1,
"types" => [
MILITARY,
UNITS,
MERCENARY
]
]
],
PAPACY_2UNIT => [
"name" => "Papacy 2 Military Unit",
"power" => powers::PAPACY,
"style" => "Military Units papacy_2unit",
"db_id" => "tbd_1035_{INDEX}",
"strength" => 2,
"types" => [
MILITARY,
UNITS
],
BACK => [
"name" => "Papacy 2 Mercenary Unit",
"style" => "Military Units Mercenary papacy_2unit",
"strength" => 2,
"types" => [
MILITARY,
UNITS,
MERCENARY
]
]
],
PAPACY_4UNIT => [
"name" => "Papacy 4 Military Unit",
"power" => powers::PAPACY,
"style" => "Military Units papacy_4unit",
"db_id" => "tbd_1036_{INDEX}",
"strength" => 4,
"types" => [
MILITARY,
UNITS
],
BACK => [
"name" => "Papacy 4 Mercenary Unit",
"style" => "Military Units Mercenary papacy_4unit",
"strength" => 4,
"types" => [
MILITARY,
UNITS,
MERCENARY
]
]
],
PROTESTANT_1UNIT => [
"name" => "Protestant 1 Military Unit",
"power" => powers::PROTESTANT,
"style" => "Military Units protestant_1unit",
"db_id" => "tbd_1037_{INDEX}",
"strength" => 1,
"types" => [
MILITARY,
UNITS
],
BACK => [
"name" => "Protestant 1 Mercenary Unit",
"style" => "Military Units Mercenary protestant_1unit",
"strength" => 1,
"types" => [
MILITARY,
UNITS,
MERCENARY
]
]
],
PROTESTANT_2UNIT => [
"name" => "Protestant 2 Military Unit",
"power" => powers::PROTESTANT,
"style" => "Military Units protestant_2unit",
"db_id" => "tbd_1038_{INDEX}",
"strength" => 2,
"types" => [
MILITARY,
UNITS
],
BACK => [
"name" => "Protestant 2 Mercenary Unit",
"style" => "Military Units Mercenary protestant_2unit",
"strength" => 2,
"types" => [
MILITARY,
UNITS,
MERCENARY
]
]
],
PROTESTANT_4UNIT => [
"name" => "Protestant 4 Military Unit",
"power" => powers::PROTESTANT,
"style" => "Military Units protestant_4unit",
"db_id" => "tbd_1039_{INDEX}",
"strength" => 4,
"types" => [
MILITARY,
UNITS
],
BACK => [
"name" => "Protestant 4 Mercenary Unit",
"style" => "Military Units Mercenary protestant_4unit",
"strength" => 4,
"types" => [
MILITARY,
UNITS,
MERCENARY
]
]
],
SCOTLAND_1UNIT => [
"name" => "Scottish 1 Military Unit",
"power" => powers::MINOR_SCOTLAND,
"style" => "Military Units scotland_1unit",
"db_id" => "tbd_1040_{INDEX}",
"strength" => 1,
"types" => [
MILITARY,
UNITS
],
BACK => [
"name" => "Scottish 2 Military Unit",
"style" => "Military Units scotland_1unit",
"strength" => 2,
"types" => [
MILITARY,
UNITS
]
]
],
VENICE_1UNIT => [
"name" => "Venetian 1 Military Unit",
"power" => powers::MINOR_VENICE,
"style" => "Military Units venice_1unit",
"db_id" => "tbd_1041_{INDEX}",
"strength" => 1,
"types" => [
MILITARY,
UNITS
],
BACK => [
"name" => "Venetian 2 Military Unit",
"style" => "Military Units venice_1unit",
"strength" => 2,
"types" => [
MILITARY,
UNITS
]
]
],
BRANDON => [
"name" => "Brandon",
"power" => powers::ENGLAND,
"style" => "Military Leader brandon",
"db_id" => "brandon",
"command_rating" => 6,
"battle_rating" => 1,
"types" => [
MILITARY,
LEADER
]
],
CHARLES_V => [
"name" => "Charles V",
"power" => powers::HAPSBURG,
"style" => "Military Leader charles_v",
"db_id" => "charles_v",
"command_rating" => 10,
"battle_rating" => 2,
"types" => [
MILITARY,
LEADER
]
],
DUDLEY => [
"name" => "Dudley",
"power" => OTHER,
"style" => "Military Leader dudley",
"db_id" => "dudly",
"command_rating" => 6,
"battle_rating" => 0,
"types" => [
MILITARY,
LEADER
]
],
DUKE_ALVA => [
"name" => "Duke of Alva",
"power" => powers::HAPSBURG,
"style" => "Military Leader duke_alva",
"db_id" => "duke_alva",
"command_rating" => 6,
"battle_rating" => 1,
"types" => [
MILITARY,
LEADER
]
],
FERDINAND => [
"name" => "Ferdinand",
"power" => powers::HAPSBURG,
"style" => "Military Leader ferdinand",
"db_id" => "tbd_1046",
"command_rating" => 6,
"battle_rating" => 1,
"types" => [
MILITARY,
LEADER
]
],
FRANCIS_I => [
"name" => "Francis I",
"power" => powers::FRANCE,
"style" => "Military Leader francis_i",
"db_id" => "tbd_1047",
"command_rating" => 8,
"battle_rating" => 1,
"types" => [
MILITARY,
LEADER
]
],
HENRY_II => [
"name" => "Henry II",
"power" => powers::ENGLAND,
"style" => "Military Leader henry_ii",
"db_id" => "tbd_1048",
"command_rating" => 8,
"battle_rating" => 0,
"types" => [
MILITARY,
LEADER
]
],
HENRY_VIII => [
"name" => "Henry VIII",
"power" => powers::ENGLAND,
"style" => "Military Leader henry_viii",
"db_id" => "tbd_1049",
"command_rating" => 8,
"battle_rating" => 1,
"types" => [
MILITARY,
LEADER
]
],
IBRAHIM => [
"name" => "Ibrahim",
"power" => powers::OTTOMAN,
"style" => "Military Leader ibrahim",
"db_id" => "tbd_1050",
"command_rating" => 6,
"battle_rating" => 1,
"types" => [
MILITARY,
LEADER
]
],
JOHN_FREDERICK => [
"name" => "John Frederick",
"power" => OTHER,
"style" => "Military Leader john_frederick",
"db_id" => "tbd_1051",
"command_rating" => 6,
"battle_rating" => 0,
"types" => [
MILITARY,
LEADER
]
],
MAURICE_OF_SAXONY => [
"name" => "Maurice of Saxony",
"power" => OTHER,
"style" => "Military Leader maurice_of_saxony",
"db_id" => "maurice_of_saxony",
"command_rating" => 6,
"battle_rating" => 1,
"types" => [
MILITARY,
LEADER
],
BACK => [
"name" => "Maurice of Saxony",
"style" => "Military Leader maurice_of_saxony",
"types" => [
MILITARY,
LEADER
]
]
],
MONTMORENCY => [
"name" => "Montmorency",
"power" => powers::FRANCE,
"style" => "Military Leader montmorency",
"db_id" => "tbd_1053",
"command_rating" => 6,
"battle_rating" => 1,
"types" => [
MILITARY,
LEADER
]
],
PHILIP_HESSE => [
"name" => "Philip of Hesse",
"power" => OTHER,
"style" => "Military Leader philip_hesse",
"db_id" => "tbd_1054",
"command_rating" => 6,
"battle_rating" => 0,
"types" => [
MILITARY,
LEADER
]
],
RENEGADE => [
"name" => "Charles Borbon, Renegade Leader",
"power" => OTHER,
"style" => "Military Leader renegade",
"db_id" => "tbd_1055",
"command_rating" => 6,
"battle_rating" => 1,
"types" => [
MILITARY,
LEADER
]
],
SULEIMAN => [
"name" => "Suleiman",
"power" => powers::OTTOMAN,
"style" => "Military Leader suleiman",
"db_id" => "tbd_1056",
"command_rating" => 12,
"battle_rating" => 2,
"types" => [
MILITARY,
LEADER
]
],
ENGLISH_SQUADRON => [
"name" => "English Squadron",
"power" => powers::ENGLAND,
"style" => "Naval Units english_squadron",
"db_id" => "tbd_1057_{INDEX}",
"strength" => 2,
"types" => [
NAVAL,
UNITS
]
],
FRENCH_SQUADRON => [
"name" => "French Squadron",
"power" => powers::FRANCE,
"style" => "Naval Units french_squadron",
"db_id" => "tbd_1058_{INDEX}",
"strength" => 2,
"types" => [
NAVAL,
UNITS
]
],
GENOESE_SQAUADRON => [
"name" => "Genoese Squadron",
"power" => powers::MINOR_GENOA,
"style" => "Naval Units genoese_sqauadron",
"db_id" => "tbd_1059",
"strength" => 2,
"types" => [
NAVAL,
UNITS
]
],
HAPSBURG_SQUADRON => [
"name" => "Hapsburg Squadron",
"power" => powers::HAPSBURG,
"style" => "Naval Units hapsburg_squadron",
"db_id" => "tbd_1060_{INDEX}",
"strength" => 2,
"types" => [
NAVAL,
UNITS
]
],
OTTOMAN_SQUADRON => [
"name" => "Ottoman Squadron",
"power" => powers::OTTOMAN,
"style" => "Naval Units ottoman_squadron",
"db_id" => "tbd_1061_{INDEX}",
"strength" => 2,
"types" => [
NAVAL,
UNITS
]
],
PAPACY_SQUADRON => [
"name" => "Papacy Squadron",
"power" => powers::PAPACY,
"style" => "Naval Units papacy_squadron",
"db_id" => "tbd_1062_{INDEX}",
"strength" => 2,
"types" => [
NAVAL,
UNITS
]
],
SCOTTISH_SQUADRON => [
"name" => "Scottish Squadron",
"power" => powers::MINOR_SCOTLAND,
"style" => "Naval Units scottish_squadron",
"db_id" => "tbd_1063",
"strength" => 2,
"types" => [
NAVAL,
UNITS
]
],
VENETIAN_SQUADRON => [
"name" => "Venetian Squadron",
"power" => powers::MINOR_VENICE,
"style" => "Naval Units venetian_squadron",
"db_id" => "tbd_1064_{INDEX}",
"strength" => 2,
"types" => [
NAVAL,
UNITS
]
],
ANDREA_DORIA => [
"name" => "Andrea Doria",
"power" => OTHER,
"style" => "Naval Leader andrea_doria",
"db_id" => "tbd_1065",
"strength" => 2,
"types" => [
NAVAL,
LEADER
]
],
BARBAROSSA => [
"name" => "Barbarossa",
"power" => OTHER,
"style" => "Naval Leader barbarossa",
"db_id" => "tbd_1066",
"battle_rating" => 2,
"piracy_rating" => 1,
"types" => [
NAVAL,
LEADER
]
],
DRAGUT => [
"name" => "Dragut",
"power" => OTHER,
"style" => "Naval Leader dragut",
"db_id" => "tbd_1067",
"battle_rating" => 1,
"piracy_rating" => 2,
"types" => [
NAVAL,
LEADER
]
],
ALLIED => [
"name" => "Allied",
"power" => OTHER,
"style" => "Diplomacy allied",
"db_id" => "tbd_1068_{INDEX}",
"types" => [
DIPLOMACY
]
],
AT_WAR => [
"name" => "At War",
"power" => OTHER,
"style" => "Diplomacy at_war",
"db_id" => "tbd_1069_{INDEX}",
"types" => [
DIPLOMACY
]
],
UNREST => [
"name" => "Unrest",
"power" => OTHER,
"style" => "Unrest_marker unrest",
"db_id" => "tbd_1070_{INDEX}",
"types" => [
UNREST_MARKER
]
],
VP_ENGLAND => [
"name" => "English VP's",
"power" => OTHER,
"style" => "VP_marker vp_england",
"db_id" => "tbd_1071",
"types" => [
VP_MARKER
]
],
VP_FRANCE => [
"name" => "French VP's",
"power" => OTHER,
"style" => "VP_marker vp_france",
"db_id" => "tbd_1072",
"types" => [
VP_MARKER
]
],
VP_HAPSBURG => [
"name" => "Hapsburg VP's",
"power" => OTHER,
"style" => "VP_marker vp_hapsburg",
"db_id" => "tbd_1073",
"types" => [
VP_MARKER
]
],
VP_OTTOMAN => [
"name" => "Ottoman VP's",
"power" => OTHER,
"style" => "VP_marker vp_ottoman",
"db_id" => "tbd_1074",
"types" => [
VP_MARKER
]
],
VP_PAPACY => [
"name" => "Papacy VP's",
"power" => OTHER,
"style" => "VP_marker vp_papacy",
"db_id" => "tbd_1075",
"types" => [
VP_MARKER
]
],
VP_PROTESTANT => [
"name" => "Protestant VP's",
"power" => OTHER,
"style" => "VP_marker vp_protestant",
"db_id" => "tbd_1076",
"types" => [
VP_MARKER
]
],
LOANED_ENGLAND => [
"name" => "Loaned to England",
"power" => OTHER,
"style" => "Loaned loaned_england",
"db_id" => "tbd_1077_{INDEX}",
"types" => [
LOANED
]
],
LOANED_FRANCE => [
"name" => "Loaned to France",
"power" => OTHER,
"style" => "Loaned loaned_france",
"db_id" => "tbd_1078_{INDEX}",
"types" => [
LOANED
]
],
LOANED_HAPSBURG => [
"name" => "Loaned to Hapsburg",
"power" => OTHER,
"style" => "Loaned loaned_hapsburg",
"db_id" => "tbd_1079_{INDEX}",
"types" => [
LOANED
]
],
LOANED_OTTOMAN => [
"name" => "Loaned to Ottoman",
"power" => OTHER,
"style" => "Loaned loaned_ottoman",
"db_id" => "tbd_1080_{INDEX}",
"types" => [
LOANED
]
],
LOANED_PAPACY => [
"name" => "Loaned to Papacy",
"power" => OTHER,
"style" => "Loaned loaned_papacy",
"db_id" => "tbd_1081_{INDEX}",
"types" => [
LOANED
]
],
CALVIN_REFORMER => [
"name" => "Calvin Reformer",
"power" => OTHER,
"style" => "Reformer calvin_reformer",
"db_id" => "tbd_1082",
"types" => [
REFORMER
]
],
CRANMER_REFORMER => [
"name" => "Cranmer Reformer",
"power" => OTHER,
"style" => "Reformer cranmer_reformer",
"db_id" => "tbd_1083",
"types" => [
REFORMER
]
],
LUTHER_REFORMER => [
"name" => "Luther Reformer",
"power" => OTHER,
"style" => "Reformer luther_reformer",
"db_id" => "tbd_1084",
"types" => [
REFORMER
]
],
ZWINGLI_REFORMER => [
"name" => "Zwingli Reformer",
"power" => OTHER,
"style" => "Reformer zwingli_reformer",
"db_id" => "tbd_1085",
"types" => [
REFORMER
]
],
ALEANDER => [
"name" => "Aleander",
"power" => powers::PROTESTANT,
"style" => "Debater aleander",
"db_id" => "tbd_1086",
"debate_value" => 2,
"types" => [
DEBATER
],
BACK => [
"name" => "Aleander",
"style" => "Debater Committed aleander",
"types" => [
DEBATER,
COMMITTED
]
]
],
CAJETAN => [
"name" => "Cajetan",
"power" => powers::PROTESTANT,
"style" => "Debater cajetan",
"db_id" => "tbd_1087",
"debate_value" => 1,
"types" => [
DEBATER
],
BACK => [
"name" => "Cajetan",
"style" => "Debater Committed cajetan",
"types" => [
DEBATER,
COMMITTED
]
]
],
CAMPEGGIO => [
"name" => "Campeggio",
"power" => powers::PROTESTANT,
"style" => "Debater campeggio",
"db_id" => "tbd_1088",
"debate_value" => 2,
"types" => [
DEBATER
],
BACK => [
"name" => "Campeggio",
"style" => "Debater Committed campeggio",
"types" => [
DEBATER,
COMMITTED
]
]
],
CANISIUS => [
"name" => "Canisius",
"power" => powers::PROTESTANT,
"style" => "Debater canisius",
"db_id" => "tbd_1089",
"debate_value" => 3,
"types" => [
DEBATER
],
BACK => [
"name" => "Canisius",
"style" => "Debater Committed canisius",
"types" => [
DEBATER,
COMMITTED
]
]
],
CARAFFA => [
"name" => "Caraffa",
"power" => powers::PROTESTANT,
"style" => "Debater caraffa",
"db_id" => "tbd_1090",
"debate_value" => 2,
"types" => [
DEBATER
],
BACK => [
"name" => "Caraffa",
"style" => "Debater Committed caraffa",
"types" => [
DEBATER,
COMMITTED
]
]
],
CONTARINI => [
"name" => "Contarini",
"power" => powers::PROTESTANT,
"style" => "Debater contarini",
"db_id" => "tbd_1091",
"debate_value" => 2,
"types" => [
DEBATER
],
BACK => [
"name" => "Contarini",
"style" => "Debater Committed contarini",
"types" => [
DEBATER,
COMMITTED
]
]
],
ECK => [
"name" => "Eck",
"power" => powers::PROTESTANT,
"style" => "Debater eck",
"db_id" => "tbd_1092",
"debate_value" => 3,
"types" => [
DEBATER
],
BACK => [
"name" => "Eck",
"style" => "Debater Committed eck",
"types" => [
DEBATER,
COMMITTED
]
]
],
FABER => [
"name" => "Faber",
"power" => powers::PROTESTANT,
"style" => "Debater faber",
"db_id" => "tbd_1093",
"debate_value" => 3,
"types" => [
DEBATER
],
BACK => [
"name" => "Faber",
"style" => "Debater Committed faber",
"types" => [
DEBATER,
COMMITTED
]
]
],
GARDINER => [
"name" => "Gardiner",
"power" => powers::PROTESTANT,
"style" => "Debater gardiner",
"db_id" => "tbd_1094",
"debate_value" => 3,
"types" => [
DEBATER
],
BACK => [
"name" => "Gardiner",
"style" => "Debater Committed gardiner",
"types" => [
DEBATER,
COMMITTED
]
]
],
LOYOLA => [
"name" => "Loyola",
"power" => powers::PROTESTANT,
"style" => "Debater loyola",
"db_id" => "tbd_1095",
"debate_value" => 4,
"types" => [
DEBATER
],
BACK => [
"name" => "Loyola",
"style" => "Debater Committed loyola",
"types" => [
DEBATER,
COMMITTED
]
]
],
POLE => [
"name" => "Pole",
"power" => powers::PROTESTANT,
"style" => "Debater pole",
"db_id" => "tbd_1096",
"debate_value" => 3,
"types" => [
DEBATER
],
BACK => [
"name" => "Pole",
"style" => "Debater Committed pole",
"types" => [
DEBATER,
COMMITTED
]
]
],
TETZEL => [
"name" => "Tetzel",
"power" => powers::PROTESTANT,
"style" => "Debater tetzel",
"db_id" => "tbd_1097",
"debate_value" => 1,
"types" => [
DEBATER
],
BACK => [
"name" => "Tetzel",
"style" => "Debater Committed tetzel",
"types" => [
DEBATER,
COMMITTED
]
]
],
BUCER => [
"name" => "Bucer",
"power" => powers::PAPACY,
"style" => "Debater bucer",
"db_id" => "tbd_1098",
"debate_value" => 2,
"types" => [
DEBATER
],
BACK => [
"name" => "Bucer",
"style" => "Debater Committed bucer",
"types" => [
DEBATER,
COMMITTED
]
]
],
BULLINGER => [
"name" => "Bullinger",
"power" => powers::PAPACY,
"style" => "Debater bullinger",
"db_id" => "tbd_1099",
"debate_value" => 2,
"types" => [
DEBATER
],
BACK => [
"name" => "Bullinger",
"style" => "Debater Committed bullinger",
"types" => [
DEBATER,
COMMITTED
]
]
],
CALVIN => [
"name" => "Calvin",
"power" => powers::PAPACY,
"style" => "Debater calvin",
"db_id" => "tbd_1100",
"debate_value" => 4,
"types" => [
DEBATER
],
BACK => [
"name" => "Calvin",
"style" => "Debater Committed calvin",
"types" => [
DEBATER,
COMMITTED
]
]
],
CARLSTADT => [
"name" => "Carlstadt",
"power" => powers::PAPACY,
"style" => "Debater carlstadt",
"db_id" => "tbd_1101",
"debate_value" => 1,
"types" => [
DEBATER
],
BACK => [
"name" => "Carlstadt",
"style" => "Debater Committed carlstadt",
"types" => [
DEBATER,
COMMITTED
]
]
],
COP => [
"name" => "Cop",
"power" => powers::PAPACY,
"style" => "Debater cop",
"db_id" => "tbd_1102",
"debate_value" => 2,
"types" => [
DEBATER
],
BACK => [
"name" => "Cop",
"style" => "Debater Committed cop",
"types" => [
DEBATER,
COMMITTED
]
]
],
COVERDALE => [
"name" => "Coverdale",
"power" => powers::PAPACY,
"style" => "Debater coverdale",
"db_id" => "tbd_1103",
"debate_value" => 2,
"types" => [
DEBATER
],
BACK => [
"name" => "Coverdale",
"style" => "Debater Committed coverdale",
"types" => [
DEBATER,
COMMITTED
]
]
],
CRANMER => [
"name" => "Cranmer",
"power" => powers::PAPACY,
"style" => "Debater cranmer",
"db_id" => "tbd_1104",
"debate_value" => 3,
"types" => [
DEBATER
],
BACK => [
"name" => "Cranmer",
"style" => "Debater Committed cranmer",
"types" => [
DEBATER,
COMMITTED
]
]
],
FAREL => [
"name" => "Farel",
"power" => powers::PAPACY,
"style" => "Debater farel",
"db_id" => "tbd_1105",
"debate_value" => 2,
"types" => [
DEBATER
],
BACK => [
"name" => "Farel",
"style" => "Debater Committed farel",
"types" => [
DEBATER,
COMMITTED
]
]
],
KNOX => [
"name" => "Knox",
"power" => powers::PAPACY,
"style" => "Debater knox",
"db_id" => "tbd_1106",
"debate_value" => 3,
"types" => [
DEBATER
],
BACK => [
"name" => "Knox",
"style" => "Debater Committed knox",
"types" => [
DEBATER,
COMMITTED
]
]
],
LATIMER => [
"name" => "Latimer",
"power" => powers::PAPACY,
"style" => "Debater latimer",
"db_id" => "tbd_1107",
"debate_value" => 1,
"types" => [
DEBATER
],
BACK => [
"name" => "Latimer",
"style" => "Debater Committed latimer",
"types" => [
DEBATER,
COMMITTED
]
]
],
LUTHER => [
"name" => "Luther",
"power" => powers::PAPACY,
"style" => "Debater luther",
"db_id" => "tbd_1108",
"debate_value" => 4,
"types" => [
DEBATER
],
BACK => [
"name" => "Luther",
"style" => "Debater Committed luther",
"types" => [
DEBATER,
COMMITTED
]
]
],
MELANCHTHON => [
"name" => "Melanchthon",
"power" => powers::PAPACY,
"style" => "Debater melanchthon",
"db_id" => "tbd_1109",
"debate_value" => 3,
"types" => [
DEBATER
],
BACK => [
"name" => "Melanchthon",
"style" => "Debater Committed melanchthon",
"types" => [
DEBATER,
COMMITTED
]
]
],
OEKOLAMPADIUS => [
"name" => "Oekolampadius",
"power" => powers::PAPACY,
"style" => "Debater oekolampadius",
"db_id" => "tbd_1110",
"debate_value" => 2,
"types" => [
DEBATER
],
BACK => [
"name" => "Oekolampadius",
"style" => "Debater Committed oekolampadius",
"types" => [
DEBATER,
COMMITTED
]
]
],
OLIVETAN => [
"name" => "Olivetan",
"power" => powers::PAPACY,
"style" => "Debater olivetan",
"db_id" => "tbd_1111",
"debate_value" => 1,
"types" => [
DEBATER
],
BACK => [
"name" => "Olivetan",
"style" => "Debater Committed olivetan",
"types" => [
DEBATER,
COMMITTED
]
]
],
TYNDALE => [
"name" => "Tyndale",
"power" => powers::PAPACY,
"style" => "Debater tyndale",
"db_id" => "tbd_1112",
"debate_value" => 2,
"types" => [
DEBATER
],
BACK => [
"name" => "Tyndale",
"style" => "Debater Committed tyndale",
"types" => [
DEBATER,
COMMITTED
]
]
],
WISHART => [
"name" => "Wishart",
"power" => powers::PAPACY,
"style" => "Debater wishart",
"db_id" => "tbd_1113",
"debate_value" => 1,
"types" => [
DEBATER
],
BACK => [
"name" => "Wishart",
"style" => "Debater Committed wishart",
"types" => [
DEBATER,
COMMITTED
]
]
],
ZWINGLI => [
"name" => "Zwingli",
"power" => powers::PAPACY,
"style" => "Debater zwingli",
"db_id" => "tbd_1114",
"debate_value" => 3,
"types" => [
DEBATER
],
BACK => [
"name" => "Zwingli",
"style" => "Debater Committed zwingli",
"types" => [
DEBATER,
COMMITTED
]
]
],
ENGLISH_EXPLORATION => [
"name" => "English Exploration Underway",
"power" => powers::ENGLAND,
"style" => "Exploration Charted english_exploration",
"db_id" => "tbd_1115",
"types" => [
EXPLORATION,
CHARTED
],
BACK => [
"name" => "English Exploration",
"style" => "Exploration english_exploration",
"types" => [
EXPLORATION
]
]
],
FRENCH_EXPLORATION => [
"name" => "French Exploration Underway",
"power" => powers::FRANCE,
"style" => "Exploration Charted french_exploration",
"db_id" => "tbd_1116",
"types" => [
EXPLORATION,
CHARTED
],
BACK => [
"name" => "French Exploratinon",
"style" => "Exploration french_exploration",
"types" => [
EXPLORATION
]
]
],
HAPSBURG_EXPLORATION => [
"name" => "Hapsburg Exploration Underway",
"power" => powers::HAPSBURG,
"style" => "Exploration Charted hapsburg_exploration",
"db_id" => "tbd_1117",
"types" => [
EXPLORATION,
CHARTED
],
BACK => [
"name" => "Hapsburg Exploration",
"style" => "Exploration hapsburg_exploration",
"types" => [
EXPLORATION
]
]
],
CABOT_ENG => [
"name" => "Cabot English",
"power" => powers::ENGLAND,
"style" => "Explorer cabot_eng",
"db_id" => "tbd_1118",
"explorer_value" => 1,
"types" => [
EXPLORER
],
BACK => [
"name" => "English Explorer",
"style" => "Explorer Unknown cabot_eng",
"types" => [
EXPLORER,
UNKNOWN
]
]
],
CABOT_FRE => [
"name" => "Cabot French",
"power" => powers::FRANCE,
"style" => "Explorer cabot_fre",
"db_id" => "tbd_1119",
"explorer_value" => 1,
"types" => [
EXPLORER
],
BACK => [
"name" => "French Explorer",
"style" => "Explorer Unknown cabot_fre",
"types" => [
EXPLORER,
UNKNOWN
]
]
],
CABOT_HAP => [
"name" => "Cabot Hapsburg",
"power" => powers::HAPSBURG,
"style" => "Explorer cabot_hap",
"db_id" => "tbd_1120",
"explorer_value" => 1,
"types" => [
EXPLORER
],
BACK => [
"name" => "Hapsburg Explorer",
"style" => "Explorer Unknown cabot_hap",
"types" => [
EXPLORER,
UNKNOWN
]
]
],
CARTIER => [
"name" => "Cartier",
"power" => powers::FRANCE,
"style" => "Explorer cartier",
"db_id" => "tbd_1121",
"explorer_value" => 3,
"types" => [
EXPLORER
],
BACK => [
"name" => "French Explorer",
"style" => "Explorer Unknown cartier",
"types" => [
EXPLORER,
UNKNOWN
]
]
],
CHANCELLOR => [
"name" => "Chancellor",
"power" => powers::ENGLAND,
"style" => "Explorer chancellor",
"db_id" => "tbd_1122",
"explorer_value" => 1,
"types" => [
EXPLORER
],
BACK => [
"name" => "English Explorer",
"style" => "Explorer Unknown chancellor",
"types" => [
EXPLORER,
UNKNOWN
]
]
],
DE_VACA => [
"name" => "De Vaca",
"power" => powers::HAPSBURG,
"style" => "Explorer de_vaca",
"db_id" => "tbd_1123",
"explorer_value" => 0,
"types" => [
EXPLORER
],
BACK => [
"name" => "Hapsburg Explorer",
"style" => "Explorer Unknown de_vaca",
"types" => [
EXPLORER,
UNKNOWN
]
]
],
DE_SOTO => [
"name" => "De Soto",
"power" => powers::HAPSBURG,
"style" => "Explorer de_soto",
"db_id" => "tbd_1124",
"explorer_value" => 2,
"types" => [
EXPLORER
],
BACK => [
"name" => "Hapsburg Explorer",
"style" => "Explorer Unknown de_soto",
"types" => [
EXPLORER,
UNKNOWN
]
]
],
LEON => [
"name" => "Leon",
"power" => powers::HAPSBURG,
"style" => "Explorer leon",
"db_id" => "tbd_1125",
"explorer_value" => 1,
"types" => [
EXPLORER
],
BACK => [
"name" => "Hapsburg Explorer",
"style" => "Explorer Unknown leon",
"types" => [
EXPLORER,
UNKNOWN
]
]
],
MAGELLAN => [
"name" => "Magellan",
"power" => powers::HAPSBURG,
"style" => "Explorer magellan",
"db_id" => "tbd_1126",
"explorer_value" => 4,
"types" => [
EXPLORER
],
BACK => [
"name" => "Hapsburg Explorer",
"style" => "Explorer Unknown magellan",
"types" => [
EXPLORER,
UNKNOWN
]
]
],
NARVAEZ => [
"name" => "Narvaez",
"power" => powers::HAPSBURG,
"style" => "Explorer narvaez",
"db_id" => "tbd_1127",
"explorer_value" => -1,
"types" => [
EXPLORER
],
BACK => [
"name" => "Hapsburg Explorer",
"style" => "Explorer Unknown narvaez",
"types" => [
EXPLORER,
UNKNOWN
]
]
],
ORELLANA => [
"name" => "Orellana",
"power" => powers::HAPSBURG,
"style" => "Explorer orellana",
"db_id" => "tbd_1128",
"explorer_value" => 3,
"types" => [
EXPLORER
],
BACK => [
"name" => "Hapsburg Explorer",
"style" => "Explorer Unknown orellana",
"types" => [
EXPLORER,
UNKNOWN
]
]
],
ROBERVAL => [
"name" => "Roberval",
"power" => powers::FRANCE,
"style" => "Explorer roberval",
"db_id" => "tbd_1129",
"explorer_value" => 0,
"types" => [
EXPLORER
],
BACK => [
"name" => "French Explorer",
"style" => "Explorer Unknown roberval",
"types" => [
EXPLORER,
UNKNOWN
]
]
],
RUT => [
"name" => "Rut",
"power" => powers::ENGLAND,
"style" => "Explorer rut",
"db_id" => "tbd_1130",
"explorer_value" => 1,
"types" => [
EXPLORER
],
BACK => [
"name" => "English Explorer",
"style" => "Explorer Unknown rut",
"types" => [
EXPLORER,
UNKNOWN
]
]
],
VERRAZANO => [
"name" => "Verrazano",
"power" => powers::FRANCE,
"style" => "Explorer verrazano",
"db_id" => "tbd_1131",
"explorer_value" => 2,
"types" => [
EXPLORER
],
BACK => [
"name" => "French Explorer",
"style" => "Explorer Unknown verrazano",
"types" => [
EXPLORER,
UNKNOWN
]
]
],
WILLOUGHBY => [
"name" => "Willoughby",
"power" => powers::ENGLAND,
"style" => "Explorer willoughby",
"db_id" => "tbd_1132",
"explorer_value" => 0,
"types" => [
EXPLORER
],
BACK => [
"name" => "English Explorer",
"style" => "Explorer Unknown willoughby",
"types" => [
EXPLORER,
UNKNOWN
]
]
],
CHARLESBOURG => [
"name" => "Charlesbourg",
"power" => powers::FRANCE,
"style" => "Colony charlesbourg",
"db_id" => "tbd_1133",
"types" => [
COLONY
]
],
CUBA => [
"name" => "Cuba",
"power" => powers::HAPSBURG,
"style" => "Colony cuba",
"db_id" => "tbd_1134",
"types" => [
COLONY
]
],
HISPANIOLA => [
"name" => "Hispaniola",
"power" => powers::HAPSBURG,
"style" => "Colony hispaniola",
"db_id" => "tbd_1135",
"types" => [
COLONY
]
],
JAMESTOWN => [
"name" => "Jamestown",
"power" => powers::ENGLAND,
"style" => "Colony jamestown",
"db_id" => "tbd_1136",
"types" => [
COLONY
]
],
MONTREAL => [
"name" => "Montreal",
"power" => powers::FRANCE,
"style" => "Colony montreal",
"db_id" => "tbd_1137",
"types" => [
COLONY
]
],
POTOSI => [
"name" => "Potosi Silver Mines",
"power" => OTHER,
"style" => "Colony potosi",
"db_id" => "tbd_1138",
"types" => [
COLONY
]
],
PUERTO_RICO => [
"name" => "Puerto Rico",
"power" => powers::HAPSBURG,
"style" => "Colony puerto_rico",
"db_id" => "tbd_1139",
"types" => [
COLONY
]
],
ROANOKE => [
"name" => "Roanoke",
"power" => powers::ENGLAND,
"style" => "Colony roanoke",
"db_id" => "tbd_1140",
"types" => [
COLONY
]
],
HAPSBURG_CONQUEST => [
"name" => "Hapsburg Conquest Underway",
"power" => powers::HAPSBURG,
"style" => "Conquest hapsburg_conquest",
"db_id" => "tbd_1141",
"types" => [
CONQUEST
]
],
ENGLISH_CONQUEST => [
"name" => "English Conquest",
"power" => powers::ENGLAND,
"style" => "Conquistador english_conquest",
"db_id" => "tbd_1142_{INDEX}",
"explorer_value" => 0,
"types" => [
CONQUISTADOR
]
],
FRENCH_CONQUEST => [
"name" => "French Conquest",
"power" => powers::FRANCE,
"style" => "Conquistador french_conquest",
"db_id" => "tbd_1143_{INDEX}",
"explorer_value" => 0,
"types" => [
CONQUISTADOR
]
],
CORDOVA => [
"name" => "Cordova",
"power" => powers::HAPSBURG,
"style" => "Conquistador cordova",
"db_id" => "tbd_1144",
"explorer_value" => 1,
"types" => [
CONQUISTADOR
],
BACK => [
"name" => "Hapsburg Conqueror",
"style" => "Conquistador Unknown cordova",
"types" => [
CONQUISTADOR,
UNKNOWN
]
]
],
CORONADO => [
"name" => "Coronado",
"power" => powers::HAPSBURG,
"style" => "Conquistador coronado",
"db_id" => "tbd_1145",
"explorer_value" => 1,
"types" => [
CONQUISTADOR
],
BACK => [
"name" => "Hapsburg Conqueror",
"style" => "Conquistador Unknown coronado",
"types" => [
CONQUISTADOR,
UNKNOWN
]
]
],
CORTEZ => [
"name" => "Cortez",
"power" => powers::HAPSBURG,
"style" => "Conquistador cortez",
"db_id" => "tbd_1146",
"explorer_value" => 4,
"types" => [
CONQUISTADOR
],
BACK => [
"name" => "Hapsburg Conqueror",
"style" => "Conquistador Unknown cortez",
"types" => [
CONQUISTADOR,
UNKNOWN
]
]
],
MONTEJO => [
"name" => "Montejo",
"power" => powers::HAPSBURG,
"style" => "Conquistador montejo",
"db_id" => "tbd_1147",
"explorer_value" => 2,
"types" => [
CONQUISTADOR
],
BACK => [
"name" => "Hapsburg Conqueror",
"style" => "Conquistador Unknown montejo",
"types" => [
CONQUISTADOR,
UNKNOWN
]
]
],
PIZARRO => [
"name" => "Pizarro",
"power" => powers::HAPSBURG,
"style" => "Conquistador pizarro",
"db_id" => "tbd_1148",
"explorer_value" => 3,
"types" => [
CONQUISTADOR
],
BACK => [
"name" => "Hapsburg Conqueror",
"style" => "Conquistador Unknown pizarro",
"types" => [
CONQUISTADOR,
UNKNOWN
]
]
],
ENGLISH_PROT_COUNTER => [
"name" => "English Home Protestant Spaces",
"power" => OTHER,
"style" => "Religious counter english_prot_counter",
"db_id" => "tbd_1149",
"types" => [
RELIGIOUS,
COUNTER
]
],
PROTESTANT_SPACES => [
"name" => "Protestant Spaces",
"power" => OTHER,
"style" => "Religious counter protestant_spaces",
"db_id" => "tbd_1150",
"types" => [
RELIGIOUS,
COUNTER
]
],
TURN => [
"name" => "Turn",
"power" => OTHER,
"style" => "Turn_marker turn",
"db_id" => "tbd_1151",
"types" => [
TURN_MARKER
]
],
MINUS_ONE_CARD => [
"name" => "-1 Card",
"power" => OTHER,
"style" => "Cards_marker minus_one_card",
"db_id" => "tbd_1152_{INDEX}",
"types" => [
CARDS_MARKER
]
],
GREAT_LAKES_1VP => [
"name" => "Great Lakes 1 VP",
"power" => powers::VP,
"style" => "VP_marker great_lakes_1vp",
"db_id" => "tbd_1153",
"types" => [
VP_MARKER
]
],
MISSISSIPPI_RIVER_1VP => [
"name" => "Mississippi River 1 VP",
"power" => powers::VP,
"style" => "VP_marker mississippi_river_1vp",
"db_id" => "tbd_1154",
"types" => [
VP_MARKER
]
],
ST_LAWRENCE_RIVER_1VP => [
"name" => "Saint Lawrence River 1 VP",
"power" => powers::VP,
"style" => "VP_marker st_lawrence_river_1vp",
"db_id" => "tbd_1155",
"types" => [
VP_MARKER
]
],
AMAZON_RIVER_2VP => [
"name" => "Amazon River 2 VP's",
"power" => powers::VP,
"style" => "VP_marker amazon_river_2vp",
"db_id" => "tbd_1156",
"types" => [
VP_MARKER
]
],
PACIFIC_STRAIT_1VP => [
"name" => "Pacific Strait 1 VP",
"power" => powers::VP,
"style" => "VP_marker pacific_strait_1vp",
"db_id" => "tbd_1157",
"types" => [
VP_MARKER
]
],
CIRCUMNAVIGATION_3VP => [
"name" => "Circumnavigation 3 VP",
"power" => powers::VP,
"style" => "VP_marker circumnavigation_3vp",
"db_id" => "tbd_1158",
"types" => [
VP_MARKER
]
],
MAYA_1VP => [
"name" => "Maya 1 VP",
"power" => powers::VP,
"style" => "VP_marker maya_1vp",
"db_id" => "tbd_1159",
"types" => [
VP_MARKER
]
],
AZTECS_2VP => [
"name" => "Aztecs 2 VP's",
"power" => powers::VP,
"style" => "VP_marker aztecs_2vp",
"db_id" => "tbd_1160",
"types" => [
VP_MARKER
]
],
INCA_2VP => [
"name" => "Inca 2 VP's",
"power" => powers::VP,
"style" => "VP_marker inca_2vp",
"db_id" => "inca_2vp",
"types" => [
VP_MARKER
]
],
BIBLE_ENG_1VP => [
"name" => "Bible English Translation 1 VP",
"power" => powers::VP,
"style" => "VP_marker bible_eng_1vp",
"db_id" => "bible_eng_1vp",
"types" => [
VP_MARKER
]
],
BIBLE_FRE_1VP => [
"name" => "Bible French Translation 1 VP",
"power" => powers::VP,
"style" => "VP_marker bible_fre_1vp",
"db_id" => "bible_fre_1vp",
"types" => [
VP_MARKER
]
],
BIBLE_GER_1VP => [
"name" => "Bible German Translation 1 VP",
"power" => powers::VP,
"style" => "VP_marker bible_ger_1vp",
"db_id" => "bible_ger_1vp",
"types" => [
VP_MARKER
]
],
CHATEAUX_VP => [
"name" => "Chateaux VP's",
"power" => powers::VP,
"style" => "VP_marker chateaux_vp",
"db_id" => "tbd_1165",
"types" => [
VP_MARKER
]
],
PIRACY_VP => [
"name" => "Piracy VP's",
"power" => powers::VP,
"style" => "VP_marker piracy_vp",
"db_id" => "tbd_1166",
"types" => [
VP_MARKER
]
],
ST_PETERS_VP => [
"name" => "Saint Peter's VP's",
"power" => powers::VP,
"style" => "VP_marker st_peters_vp",
"db_id" => "tbd_1167",
"types" => [
VP_MARKER
]
],
COPERNICUS_1VP => [
"name" => "Copernicus 1 VP",
"power" => powers::VP,
"style" => "VP_marker copernicus_1vp",
"db_id" => "tbd_1168",
"types" => [
VP_MARKER
]
],
COPERNICUS_2VP => [
"name" => "Copernicus 2 VP's",
"power" => powers::VP,
"style" => "VP_marker copernicus_2vp",
"db_id" => "tbd_1169",
"types" => [
VP_MARKER
]
],
EDWARD_5VP => [
"name" => "Edward VI 5 VP's",
"power" => powers::VP,
"style" => "VP_marker edward_5vp",
"db_id" => "tbd_1170",
"types" => [
VP_MARKER
]
],
ELIZABETH_2VP => [
"name" => "Elizabeth 2 VP's",
"power" => powers::VP,
"style" => "VP_marker elizabeth_2vp",
"db_id" => "tbd_1171",
"types" => [
VP_MARKER
]
],
GONZAGA_1VP => [
"name" => "Giulia Gonzaga 1 VP",
"power" => powers::VP,
"style" => "VP_marker gonzaga_1vp",
"db_id" => "tbd_1172",
"types" => [
VP_MARKER
]
],
SERVETUS_1VP => [
"name" => "Servetus 1 VP",
"power" => powers::VP,
"style" => "VP_marker servetus_1vp",
"db_id" => "tbd_1173",
"types" => [
VP_MARKER
]
],
MASTER_OF_ITALY_1VP => [
"name" => "Master of Italy 1 VP",
"power" => powers::VP,
"style" => "VP_marker master_of_italy_1vp",
"db_id" => "tbd_1174_{INDEX}",
"types" => [
VP_MARKER
]
],
MASTER_OF_ITALY_2VP => [
"name" => "Master of Italy 2 VP's",
"power" => powers::VP,
"style" => "VP_marker master_of_italy_2vp",
"db_id" => "tbd_1175_{INDEX}",
"types" => [
VP_MARKER
]
],
WAR_WINNER_1VP => [
"name" => "War Winner 1 VP",
"power" => powers::VP,
"style" => "VP_marker war_winner_1vp",
"db_id" => "tbd_1176_{INDEX}",
"types" => [
VP_MARKER
]
],
WAR_WINNER_2VP => [
"name" => "War Winner 2 VP's",
"power" => powers::VP,
"style" => "VP_marker war_winner_2vp",
"db_id" => "tbd_1177_{INDEX}",
"types" => [
VP_MARKER
]
],
PHONYSCOTLAND_MINUS1 => [
"name" => "Phony War in Scotland -1 VP's",
"power" => powers::VP,
"style" => "VP_marker phonyscotland_minus1",
"db_id" => "tbd_1178",
"types" => [
VP_MARKER
]
],
PHONYVENICE_MINUS1 => [
"name" => "Phony War in Venice - 1 VP's",
"power" => powers::VP,
"style" => "VP_marker phonyvenice_minus1",
"db_id" => "tbd_1179",
"types" => [
VP_MARKER
]
],
ANNE_BOLEYN => [
"name" => "Anne Boleyn",
"power" => powers::ENGLAND,
"style" => "Wife anne_boleyn",
"db_id" => "tbd_1180",
"types" => [
WIFE
],
BACK => [
"name" => "Anne Boleyn",
"style" => "Wife Benefit anne_boleyn",
"types" => [
WIFE,
BENEFIT
]
]
],
ANNE_CLEVES => [
"name" => "Anne of Cleves",
"power" => powers::ENGLAND,
"style" => "Wife anne_cleves",
"db_id" => "tbd_1181",
"types" => [
WIFE
],
BACK => [
"name" => "Anne of Cleves",
"style" => "Wife Benefit anne_cleves",
"types" => [
WIFE,
BENEFIT
]
]
],
CATHERINE_ARAGON => [
"name" => "Catherine of Aragon",
"power" => powers::ENGLAND,
"style" => "Wife catherine_aragon",
"db_id" => "tbd_1182",
"types" => [
WIFE
],
BACK => [
"name" => "Catherine of Aragon",
"style" => "Wife Benefit catherine_aragon",
"types" => [
WIFE,
BENEFIT
]
]
],
JANE_SEYMOUR => [
"name" => "Jane Seymour",
"power" => powers::ENGLAND,
"style" => "Wife jane_seymour",
"db_id" => "tbd_1183",
"types" => [
WIFE
],
BACK => [
"name" => "Jane Seymour",
"style" => "Wife Benefit jane_seymour",
"types" => [
WIFE,
BENEFIT
]
]
],
KATHERINE_PARR => [
"name" => "Katherine Parr",
"power" => powers::ENGLAND,
"style" => "Wife katherine_parr",
"db_id" => "tbd_1184",
"types" => [
WIFE
],
BACK => [
"name" => "Katherine Parr",
"style" => "Wife Benefit katherine_parr",
"types" => [
WIFE,
BENEFIT
]
]
],
KATHRYN_HOWARD => [
"name" => "Kathryn Howard",
"power" => powers::ENGLAND,
"style" => "Wife kathryn_howard",
"db_id" => "tbd_1185",
"types" => [
WIFE
],
BACK => [
"name" => "Kathryn Howard",
"style" => "Wife Benefit kathryn_howard",
"types" => [
WIFE,
BENEFIT
]
]
],
HENRY_MARITAL_STATUS => [
"name" => "Henry Marital Status",
"power" => powers::ENGLAND,
"style" => "Wives Status henry_marital_status",
"db_id" => "tbd_1186",
"types" => [
WIVES,
STATUS
]
],
BIBLE_ENGLISH => [
"name" => "Bible English",
"power" => powers::PROTESTANT,
"style" => "Translation bible_english",
"db_id" => "tbd_1187",
"types" => [
TRANSLATION
]
],
BIBLE_FRENCH => [
"name" => "Bible French",
"power" => powers::PROTESTANT,
"style" => "Translation bible_french",
"db_id" => "tbd_1188",
"types" => [
TRANSLATION
]
],
BIBLE_GERMAN => [
"name" => "Bible German",
"power" => powers::PROTESTANT,
"style" => "Translation bible_german",
"db_id" => "tbd_1189",
"types" => [
TRANSLATION
]
],
NEW_TESTAMENT_ENGLISH => [
"name" => "New Testament English",
"power" => powers::PROTESTANT,
"style" => "Translation new_testament_english",
"db_id" => "tbd_1190",
"types" => [
TRANSLATION
]
],
NEW_TESTAMENT_FRENCH => [
"name" => "New Testament French",
"power" => powers::PROTESTANT,
"style" => "Translation new_testament_french",
"db_id" => "tbd_1191",
"types" => [
TRANSLATION
]
],
NEW_TESTAMENT_GERMAN => [
"name" => "New Testament German",
"power" => powers::PROTESTANT,
"style" => "Translation new_testament_german",
"db_id" => "tbd_1192",
"types" => [
TRANSLATION
]
],
ST_PETERS_CP => [
"name" => "Saint Peter's CP Status",
"power" => powers::PAPACY,
"style" => "Saint_Peters st_peters_cp",
"db_id" => "tbd_1193",
"types" => [
SAINT_PETERS
]
],
AUGSBURG_CONFESSION => [
"name" => "Augsburg Confession Active",
"power" => powers::PROTESTANT,
"style" => "Event_reminder augsburg_confession",
"db_id" => "tbd_1194",
"types" => [
EVENT_REMINDER
]
],
PRINTING_PRESS => [
"name" => "Printing Press Active",
"power" => powers::PROTESTANT,
"style" => "Event_reminder printing_press",
"db_id" => "tbd_1195",
"types" => [
EVENT_REMINDER
]
],
COLONIAL_GOVERNOR => [
"name" => "Colonial Governor",
"power" => OTHER,
"style" => "Event_reminder colonial_governor",
"db_id" => "tbd_1196_{INDEX}",
"types" => [
EVENT_REMINDER
]
],
GALLEONS => [
"name" => "Galleons",
"power" => OTHER,
"style" => "Event_reminder galleons",
"db_id" => "tbd_1197_{INDEX}",
"types" => [
EVENT_REMINDER
]
],
PLANTATIONS => [
"name" => "Plantations",
"power" => OTHER,
"style" => "Event_reminder plantations",
"db_id" => "tbd_1198_{INDEX}",
"types" => [
EVENT_REMINDER
]
],
PIRACY => [
"name" => "Piracy Marker",
"power" => OTHER,
"style" => "Event_reminder piracy",
"db_id" => "tbd_1199_{INDEX}",
"types" => [
EVENT_REMINDER
]
],
NATIVE_UPRISING => [
"name" => "Native Uprising",
"power" => OTHER,
"style" => "Event_reminder native_uprising",
"db_id" => "tbd_1200_{INDEX}",
"types" => [
EVENT_REMINDER
]
],
RAIDER_ENGLISH => [
"name" => "English Huguenot Raider",
"power" => OTHER,
"style" => "Event_reminder raider_english",
"db_id" => "tbd_1201",
"types" => [
EVENT_REMINDER
]
],
RAIDER_FRENCH => [
"name" => "French Huguenot Raider",
"power" => OTHER,
"style" => "Event_reminder raider_french",
"db_id" => "tbd_1202",
"types" => [
EVENT_REMINDER
]
],
RAIDER_PROTESTANT => [
"name" => "Protestant Huguenot Raider",
"power" => OTHER,
"style" => "Event_reminder raider_protestant",
"db_id" => "tbd_1203",
"types" => [
EVENT_REMINDER
]
],
MERCATOR_MAP => [
"name" => "Mercator's Map",
"power" => OTHER,
"style" => "Event_reminder mercator_map",
"db_id" => "tbd_1204",
"types" => [
EVENT_REMINDER
]
],
SMALLPOX => [
"name" => "Smallpox",
"power" => OTHER,
"style" => "Event_reminder smallpox",
"db_id" => "tbd_1205",
"types" => [
EVENT_REMINDER
]
],
THOMAS_MORE => [
"name" => "Thomas More",
"power" => OTHER,
"style" => "Event_reminder thomas_more",
"db_id" => "tbd_1206",
"types" => [
EVENT_REMINDER
]
],
WARTBURG => [
"name" => "Wartburg",
"power" => powers::PROTESTANT,
"style" => "Event_reminder wartburg",
"db_id" => "tbd_1207",
"types" => [
EVENT_REMINDER
]
],
EXCOMMUNICATED => [
"name" => "Excommunicated",
"power" => powers::PAPACY,
"style" => "Excommunion excommunicated",
"db_id" => "tbd_1208_{INDEX}",
"types" => [
EXCOMMUNION
]
],
FORTRESS => [
"name" => "Fortress",
"power" => OTHER,
"style" => "Fortress_marker fortress",
"db_id" => "tbd_1209_{INDEX}",
"types" => [
FORTRESS_MARKER
]
],
PIRATE_HAVEN => [
"name" => "Pirate Haven",
"power" => OTHER,
"style" => "PirateHaven pirate_haven",
"db_id" => "tbd_1210_{INDEX}",
"types" => [
PIRATEHAVEN
]
],
JESUIT_UNIVERSITY => [
"name" => "Jesuit University",
"power" => powers::PAPACY,
"style" => "University jesuit_university",
"db_id" => "tbd_1211_{INDEX}",
"types" => [
UNIVERSITY
]
]
];

$this->starting_token_counts = [
ENGLAND_KEY => 9,
FRANCE_KEY => 11,
HAPSBURG_KEY => 14,
OTTOMAN_KEY => 11,
INDEPENDENT_KEY => 18,
PAPACY_KEY => 7,
ENGLAND_HEX => 100,
FRANCE_HEX => 100,
HAPSBURG_HEX => 100,
INDEPENDENT_HEX => 31,
OTTOMAN_HEX => 100,
PAPACY_HEX => 100,
PROTESTANT_HEX => 100,
ENGLAND_1UNIT => 9,
ENGLAND_2UNIT => 5,
ENGLAND_4UNIT => 2,
ENGLAND_6UNIT => 1,
FRANCE_1UNIT => 10,
FRANCE_2UNIT => 4,
FRANCE_4UNIT => 3,
FRANCE_6UNIT => 1,
GENOA_1UNIT => 2,
HAPSBURG_1UNIT => 12,
HAPSBURG_2UNIT => 7,
HAPSBURG_4UNIT => 4,
HAPSBURG_6UNIT => 1,
HUNGARY_1UNIT => 3,
HUNGARY_4UNIT => 1,
INDEPENDENT_1UNIT => 6,
KNIGHTS_1UNIT => 1,
OTTOMAN_1UNIT => 11,
OTTOMAN_2UNIT => 7,
OTTOMAN_4UNIT => 4,
OTTOMAN_6UNIT => 1,
PAPACY_1UNIT => 7,
PAPACY_2UNIT => 4,
PAPACY_4UNIT => 2,
PROTESTANT_1UNIT => 8,
PROTESTANT_2UNIT => 5,
PROTESTANT_4UNIT => 2,
SCOTLAND_1UNIT => 3,
VENICE_1UNIT => 4,
BRANDON => 1,
CHARLES_V => 1,
DUDLEY => 1,
DUKE_ALVA => 1,
FERDINAND => 1,
FRANCIS_I => 1,
HENRY_II => 1,
HENRY_VIII => 1,
IBRAHIM => 1,
JOHN_FREDERICK => 1,
MAURICE_OF_SAXONY => 1,
MONTMORENCY => 1,
PHILIP_HESSE => 1,
RENEGADE => 1,
SULEIMAN => 1,
ENGLISH_SQUADRON => 5,
FRENCH_SQUADRON => 5,
GENOESE_SQAUADRON => 1,
HAPSBURG_SQUADRON => 6,
OTTOMAN_SQUADRON => 9,
PAPACY_SQUADRON => 2,
SCOTTISH_SQUADRON => 1,
VENETIAN_SQUADRON => 4,
ANDREA_DORIA => 1,
BARBAROSSA => 1,
DRAGUT => 1,
ALLIED => 18,
AT_WAR => 30,
UNREST => 100,
VP_ENGLAND => 1,
VP_FRANCE => 1,
VP_HAPSBURG => 1,
VP_OTTOMAN => 1,
VP_PAPACY => 1,
VP_PROTESTANT => 1,
LOANED_ENGLAND => 28,
LOANED_FRANCE => 28,
LOANED_HAPSBURG => 27,
LOANED_OTTOMAN => 22,
LOANED_PAPACY => 22,
CALVIN_REFORMER => 1,
CRANMER_REFORMER => 1,
LUTHER_REFORMER => 1,
ZWINGLI_REFORMER => 1,
ALEANDER => 1,
CAJETAN => 1,
CAMPEGGIO => 1,
CANISIUS => 1,
CARAFFA => 1,
CONTARINI => 1,
ECK => 1,
FABER => 1,
GARDINER => 1,
LOYOLA => 1,
POLE => 1,
TETZEL => 1,
BUCER => 1,
BULLINGER => 1,
CALVIN => 1,
CARLSTADT => 1,
COP => 1,
COVERDALE => 1,
CRANMER => 1,
FAREL => 1,
KNOX => 1,
LATIMER => 1,
LUTHER => 1,
MELANCHTHON => 1,
OEKOLAMPADIUS => 1,
OLIVETAN => 1,
TYNDALE => 1,
WISHART => 1,
ZWINGLI => 1,
ENGLISH_EXPLORATION => 1,
FRENCH_EXPLORATION => 1,
HAPSBURG_EXPLORATION => 1,
CABOT_ENG => 1,
CABOT_FRE => 1,
CABOT_HAP => 1,
CARTIER => 1,
CHANCELLOR => 1,
DE_VACA => 1,
DE_SOTO => 1,
LEON => 1,
MAGELLAN => 1,
NARVAEZ => 1,
ORELLANA => 1,
ROBERVAL => 1,
RUT => 1,
VERRAZANO => 1,
WILLOUGHBY => 1,
CHARLESBOURG => 1,
CUBA => 1,
HISPANIOLA => 1,
JAMESTOWN => 1,
MONTREAL => 1,
POTOSI => 1,
PUERTO_RICO => 1,
ROANOKE => 1,
HAPSBURG_CONQUEST => 1,
ENGLISH_CONQUEST => 2,
FRENCH_CONQUEST => 2,
CORDOVA => 1,
CORONADO => 1,
CORTEZ => 1,
MONTEJO => 1,
PIZARRO => 1,
ENGLISH_PROT_COUNTER => 1,
PROTESTANT_SPACES => 1,
TURN => 1,
MINUS_ONE_CARD => 7,
GREAT_LAKES_1VP => 1,
MISSISSIPPI_RIVER_1VP => 1,
ST_LAWRENCE_RIVER_1VP => 1,
AMAZON_RIVER_2VP => 1,
PACIFIC_STRAIT_1VP => 1,
CIRCUMNAVIGATION_3VP => 1,
MAYA_1VP => 1,
AZTECS_2VP => 1,
INCA_2VP => 1,
BIBLE_ENG_1VP => 1,
BIBLE_FRE_1VP => 1,
BIBLE_GER_1VP => 1,
CHATEAUX_VP => 1,
PIRACY_VP => 1,
ST_PETERS_VP => 1,
COPERNICUS_1VP => 1,
COPERNICUS_2VP => 1,
EDWARD_5VP => 1,
ELIZABETH_2VP => 1,
GONZAGA_1VP => 1,
SERVETUS_1VP => 1,
MASTER_OF_ITALY_1VP => 9,
MASTER_OF_ITALY_2VP => 9,
WAR_WINNER_1VP => 100,
WAR_WINNER_2VP => 100,
PHONYSCOTLAND_MINUS1 => 1,
PHONYVENICE_MINUS1 => 1,
ANNE_BOLEYN => 1,
ANNE_CLEVES => 1,
CATHERINE_ARAGON => 1,
JANE_SEYMOUR => 1,
KATHERINE_PARR => 1,
KATHRYN_HOWARD => 1,
HENRY_MARITAL_STATUS => 1,
BIBLE_ENGLISH => 1,
BIBLE_FRENCH => 1,
BIBLE_GERMAN => 1,
NEW_TESTAMENT_ENGLISH => 1,
NEW_TESTAMENT_FRENCH => 1,
NEW_TESTAMENT_GERMAN => 1,
ST_PETERS_CP => 1,
AUGSBURG_CONFESSION => 1,
PRINTING_PRESS => 1,
COLONIAL_GOVERNOR => 3,
GALLEONS => 3,
PLANTATIONS => 3,
PIRACY => 4,
NATIVE_UPRISING => 3,
RAIDER_ENGLISH => 1,
RAIDER_FRENCH => 1,
RAIDER_PROTESTANT => 1,
MERCATOR_MAP => 1,
SMALLPOX => 1,
THOMAS_MORE => 1,
WARTBURG => 1,
EXCOMMUNICATED => 7,
FORTRESS => 9,
PIRATE_HAVEN => 2,
JESUIT_UNIVERSITY => 53
];

$this->board_locations = [
TURN_TRACK_1 => [
"x" => 3862,
"y" => 3095,
"board" => "map"
],
TURN_TRACK_2 => [
"x" => 3995,
"y" => 3095,
"board" => "map"
],
TURN_TRACK_3 => [
"x" => 4129,
"y" => 3095,
"board" => "map"
],
TURN_TRACK_4 => [
"x" => 4262,
"y" => 3095,
"board" => "map"
],
TURN_TRACK_5 => [
"x" => 4396,
"y" => 3095,
"board" => "map"
],
TURN_TRACK_6 => [
"x" => 4529,
"y" => 3095,
"board" => "map"
],
TURN_TRACK_7 => [
"x" => 4663,
"y" => 3095,
"board" => "map"
],
TURN_TRACK_8 => [
"x" => 4796,
"y" => 3095,
"board" => "map"
],
TURN_TRACK_9 => [
"x" => 4930,
"y" => 3095,
"board" => "map"
],
DIPLO_OTT_HAP => [
"x" => 4240,
"y" => 289,
"board" => "map"
],
DIPLO_OTT_ENG => [
"x" => 4330,
"y" => 289,
"board" => "map"
],
DIPLO_OTT_FRA => [
"x" => 4420,
"y" => 289,
"board" => "map"
],
DIPLO_OTT_PAP => [
"x" => 4510,
"y" => 289,
"board" => "map"
],
DIPLO_OTT_PRO => [
"x" => 4600,
"y" => 289,
"board" => "map"
],
DIPLO_OTT_GEN => [
"x" => 4690,
"y" => 289,
"board" => "map"
],
DIPLO_OTT_HUN => [
"x" => 4780,
"y" => 289,
"board" => "map"
],
DIPLO_OTT_VEN => [
"x" => 4960,
"y" => 289,
"board" => "map"
],
DIPLO_HAP_ENG => [
"x" => 4330,
"y" => 380,
"board" => "map"
],
DIPLO_HAP_FRA => [
"x" => 4420,
"y" => 380,
"board" => "map"
],
DIPLO_HAP_PAP => [
"x" => 4510,
"y" => 380,
"board" => "map"
],
DIPLO_HAP_PRO => [
"x" => 4600,
"y" => 380,
"board" => "map"
],
DIPLO_HAP_GEN => [
"x" => 4690,
"y" => 380,
"board" => "map"
],
DIPLO_HAP_HUN => [
"x" => 4780,
"y" => 380,
"board" => "map"
],
DIPLO_HAP_SCO => [
"x" => 4870,
"y" => 380,
"board" => "map"
],
DIPLO_HAP_VEN => [
"x" => 4960,
"y" => 380,
"board" => "map"
],
DIPLO_ENG_FRA => [
"x" => 4420,
"y" => 470,
"board" => "map"
],
DIPLO_ENG_PAP => [
"x" => 4510,
"y" => 470,
"board" => "map"
],
DIPLO_ENG_PRO => [
"x" => 4600,
"y" => 470,
"board" => "map"
],
DIPLO_ENG_GEN => [
"x" => 4690,
"y" => 470,
"board" => "map"
],
DIPLO_ENG_SCO => [
"x" => 4870,
"y" => 470,
"board" => "map"
],
DIPLO_FRA_PAP => [
"x" => 4510,
"y" => 560,
"board" => "map"
],
DIPLO_FRA_PRO => [
"x" => 4600,
"y" => 560,
"board" => "map"
],
DIPLO_FRA_GEN => [
"x" => 4690,
"y" => 560,
"board" => "map"
],
DIPLO_FRA_SCO => [
"x" => 4870,
"y" => 560,
"board" => "map"
],
DIPLO_FRA_VEN => [
"x" => 4960,
"y" => 560,
"board" => "map"
],
DIPLO_PAP_PRO => [
"x" => 4600,
"y" => 650,
"board" => "map"
],
DIPLO_PAP_GEN => [
"x" => 4690,
"y" => 650,
"board" => "map"
],
DIPLO_PAP_VEN => [
"x" => 4960,
"y" => 650,
"board" => "map"
],
DIPLO_PRO_GEN => [
"x" => 4690,
"y" => 740,
"board" => "map"
],
DIPLO_PRO_VEN => [
"x" => 4960,
"y" => 740,
"board" => "map"
],
VICTORY_TRACK_0 => [
"x" => 2144,
"y" => 3035,
"board" => "map"
],
VICTORY_TRACK_1 => [
"x" => 2258,
"y" => 3035,
"board" => "map"
],
VICTORY_TRACK_2 => [
"x" => 2372,
"y" => 3035,
"board" => "map"
],
VICTORY_TRACK_3 => [
"x" => 2486,
"y" => 3035,
"board" => "map"
],
VICTORY_TRACK_4 => [
"x" => 2600,
"y" => 3035,
"board" => "map"
],
VICTORY_TRACK_5 => [
"x" => 2714,
"y" => 3035,
"board" => "map"
],
VICTORY_TRACK_6 => [
"x" => 2828,
"y" => 3035,
"board" => "map"
],
VICTORY_TRACK_7 => [
"x" => 2942,
"y" => 3035,
"board" => "map"
],
VICTORY_TRACK_8 => [
"x" => 3056,
"y" => 3035,
"board" => "map"
],
VICTORY_TRACK_9 => [
"x" => 3172,
"y" => 3035,
"board" => "map"
],
VICTORY_TRACK_10 => [
"x" => 1004,
"y" => 3149,
"board" => "map"
],
VICTORY_TRACK_11 => [
"x" => 1118,
"y" => 3149,
"board" => "map"
],
VICTORY_TRACK_12 => [
"x" => 1232,
"y" => 3149,
"board" => "map"
],
VICTORY_TRACK_13 => [
"x" => 1346,
"y" => 3149,
"board" => "map"
],
VICTORY_TRACK_14 => [
"x" => 1460,
"y" => 3149,
"board" => "map"
],
VICTORY_TRACK_15 => [
"x" => 1574,
"y" => 3149,
"board" => "map"
],
VICTORY_TRACK_16 => [
"x" => 1688,
"y" => 3149,
"board" => "map"
],
VICTORY_TRACK_17 => [
"x" => 1802,
"y" => 3149,
"board" => "map"
],
VICTORY_TRACK_18 => [
"x" => 1918,
"y" => 3149,
"board" => "map"
],
VICTORY_TRACK_19 => [
"x" => 2032,
"y" => 3149,
"board" => "map"
],
VICTORY_TRACK_20 => [
"x" => 2146,
"y" => 3149,
"board" => "map"
],
VICTORY_TRACK_21 => [
"x" => 2260,
"y" => 3149,
"board" => "map"
],
VICTORY_TRACK_22 => [
"x" => 2374,
"y" => 3149,
"board" => "map"
],
VICTORY_TRACK_23 => [
"x" => 2488,
"y" => 3149,
"board" => "map"
],
VICTORY_TRACK_24 => [
"x" => 2602,
"y" => 3149,
"board" => "map"
],
VICTORY_TRACK_25 => [
"x" => 2716,
"y" => 3149,
"board" => "map"
],
VICTORY_TRACK_26 => [
"x" => 2830,
"y" => 3149,
"board" => "map"
],
VICTORY_TRACK_27 => [
"x" => 2944,
"y" => 3149,
"board" => "map"
],
VICTORY_TRACK_28 => [
"x" => 3057,
"y" => 3149,
"board" => "map"
],
VICTORY_TRACK_29 => [
"x" => 3172,
"y" => 3149,
"board" => "map"
],
ST_LAWRENCE_RIVER => [
"x" => 636,
"y" => 2010,
"board" => "map"
],
GREAT_LAKES => [
"x" => 402,
"y" => 2030,
"board" => "map"
],
MISSISSIPI_RIVER => [
"x" => 398,
"y" => 2197,
"board" => "map"
],
AZTEC => [
"x" => 291,
"y" => 2383,
"board" => "map"
],
MAYA => [
"x" => 424,
"y" => 2424,
"board" => "map"
],
AMAZON_RIVER => [
"x" => 792,
"y" => 2659,
"board" => "map"
],
INCA => [
"x" => 647,
"y" => 2783,
"board" => "map"
],
PACIFIC_STRAIT => [
"x" => 606,
"y" => 3119,
"board" => "map"
],
CIRCUMNAVIGATION => [
"x" => 249,
"y" => 2820,
"board" => "map"
],
COLONY_ENG_1 => [
"x" => 176,
"y" => 1132,
"board" => "map"
],
COLONY_ENG_2 => [
"x" => 176,
"y" => 1244,
"board" => "map"
],
COLONY_FRA_1 => [
"x" => 176,
"y" => 1354,
"board" => "map"
],
COLONY_FRA_2 => [
"x" => 176,
"y" => 1467,
"board" => "map"
],
COLONY_HAP_1 => [
"x" => 176,
"y" => 1580,
"board" => "map"
],
COLONY_HAP_2 => [
"x" => 176,
"y" => 1691,
"board" => "map"
],
COLONY_HAP_3 => [
"x" => 176,
"y" => 1804,
"board" => "map"
],
ELECTORATE_DISPLAY_AUG => [
"x" => 3495,
"y" => 311,
"board" => "map"
],
ELECTORATE_DISPLAY_TRI => [
"x" => 3627,
"y" => 311,
"board" => "map"
],
ELECTORATE_DISPLAY_COL => [
"x" => 3759,
"y" => 311,
"board" => "map"
],
ELECTORATE_DISPLAY_WIT => [
"x" => 3495,
"y" => 495,
"board" => "map"
],
ELECTORATE_DISPLAY_MAI => [
"x" => 3627,
"y" => 495,
"board" => "map"
],
ELECTORATE_DISPLAY_BRA => [
"x" => 3759,
"y" => 495,
"board" => "map"
],
CONQUEST_ENG_1 => [
"x" => 301,
"y" => 1132,
"board" => "map"
],
CONQUEST_ENG_2 => [
"x" => 301,
"y" => 1244,
"board" => "map"
],
CONQUEST_FRA_1 => [
"x" => 301,
"y" => 1354,
"board" => "map"
],
CONQUEST_FRA_2 => [
"x" => 301,
"y" => 1467,
"board" => "map"
],
CONQUEST_HAP_1 => [
"x" => 301,
"y" => 1580,
"board" => "map"
],
CONQUEST_HAP_2 => [
"x" => 301,
"y" => 1691,
"board" => "map"
],
CONQUEST_HAP_3 => [
"x" => 301,
"y" => 1804,
"board" => "map"
],
CROSSING_ATLANTIC_1 => [
"x" => 800,
"y" => 2236,
"board" => "map"
],
CROSSING_ATLANTIC_2 => [
"x" => 950,
"y" => 2236,
"board" => "map"
],
CROSSING_ATLANTIC_3 => [
"x" => 800,
"y" => 2100,
"board" => "map"
],
CROSSING_ATLANTIC_4 => [
"x" => 950,
"y" => 2100,
"board" => "map"
],
CROSSING_ATLANTIC_5 => [
"x" => 800,
"y" => 2372,
"board" => "map"
],
CROSSING_ATLANTIC_6 => [
"x" => 950,
"y" => 2372,
"board" => "map"
],
PREGNANCY_CHART_1 => [
"x" => 4189,
"y" => 1386,
"board" => "map"
],
PREGNANCY_CHART_2 => [
"x" => 4189,
"y" => 1301,
"board" => "map"
],
PREGNANCY_CHART_3 => [
"x" => 4189,
"y" => 1216,
"board" => "map"
],
PREGNANCY_CHART_4 => [
"x" => 4189,
"y" => 1131,
"board" => "map"
],
PREGNANCY_CHART_5 => [
"x" => 4189,
"y" => 1046,
"board" => "map"
],
PREGNANCY_CHART_6 => [
"x" => 4189,
"y" => 928,
"board" => "map"
],
ENGLAND_KEY_1 => [
"x" => 105,
"y" => 605,
"board" => "powercards"
],
ENGLAND_KEY_2 => [
"x" => 217,
"y" => 605,
"board" => "powercards"
],
ENGLAND_KEY_3 => [
"x" => 330,
"y" => 605,
"board" => "powercards"
],
ENGLAND_KEY_4 => [
"x" => 442,
"y" => 605,
"board" => "powercards"
],
ENGLAND_KEY_5 => [
"x" => 555,
"y" => 605,
"board" => "powercards"
],
ENGLAND_KEY_6 => [
"x" => 105,
"y" => 711,
"board" => "powercards"
],
ENGLAND_KEY_7 => [
"x" => 217,
"y" => 711,
"board" => "powercards"
],
ENGLAND_KEY_8 => [
"x" => 330,
"y" => 711,
"board" => "powercards"
],
ENGLAND_KEY_9 => [
"x" => 442,
"y" => 711,
"board" => "powercards"
],
FRANCE_KEY_1 => [
"x" => 109,
"y" => 1443,
"board" => "powercards"
],
FRANCE_KEY_2 => [
"x" => 214,
"y" => 1443,
"board" => "powercards"
],
FRANCE_KEY_3 => [
"x" => 319,
"y" => 1443,
"board" => "powercards"
],
FRANCE_KEY_4 => [
"x" => 424,
"y" => 1443,
"board" => "powercards"
],
FRANCE_KEY_5 => [
"x" => 109,
"y" => 1545,
"board" => "powercards"
],
FRANCE_KEY_6 => [
"x" => 214,
"y" => 1545,
"board" => "powercards"
],
FRANCE_KEY_7 => [
"x" => 319,
"y" => 1545,
"board" => "powercards"
],
FRANCE_KEY_8 => [
"x" => 424,
"y" => 1545,
"board" => "powercards"
],
FRANCE_KEY_9 => [
"x" => 529,
"y" => 1545,
"board" => "powercards"
],
FRANCE_KEY_10 => [
"x" => 634,
"y" => 1545,
"board" => "powercards"
],
FRANCE_KEY_11 => [
"x" => 739,
"y" => 1545,
"board" => "powercards"
],
HAPSBURG_KEY_1 => [
"x" => 1375,
"y" => 497,
"board" => "powercards"
],
HAPSBURG_KEY_2 => [
"x" => 1487,
"y" => 497,
"board" => "powercards"
],
HAPSBURG_KEY_3 => [
"x" => 1600,
"y" => 497,
"board" => "powercards"
],
HAPSBURG_KEY_4 => [
"x" => 1712,
"y" => 497,
"board" => "powercards"
],
HAPSBURG_KEY_5 => [
"x" => 1825,
"y" => 497,
"board" => "powercards"
],
HAPSBURG_KEY_6 => [
"x" => 1375,
"y" => 611,
"board" => "powercards"
],
HAPSBURG_KEY_7 => [
"x" => 1487,
"y" => 611,
"board" => "powercards"
],
HAPSBURG_KEY_8 => [
"x" => 1600,
"y" => 611,
"board" => "powercards"
],
HAPSBURG_KEY_9 => [
"x" => 1712,
"y" => 611,
"board" => "powercards"
],
HAPSBURG_KEY_10 => [
"x" => 1825,
"y" => 611,
"board" => "powercards"
],
HAPSBURG_KEY_11 => [
"x" => 1375,
"y" => 725,
"board" => "powercards"
],
HAPSBURG_KEY_12 => [
"x" => 1487,
"y" => 725,
"board" => "powercards"
],
HAPSBURG_KEY_13 => [
"x" => 1600,
"y" => 725,
"board" => "powercards"
],
HAPSBURG_KEY_14 => [
"x" => 1712,
"y" => 725,
"board" => "powercards"
],
OTTOMAN_KEY_1 => [
"x" => 1372,
"y" => 1437,
"board" => "powercards"
],
OTTOMAN_KEY_2 => [
"x" => 1484,
"y" => 1437,
"board" => "powercards"
],
OTTOMAN_KEY_3 => [
"x" => 1596,
"y" => 1437,
"board" => "powercards"
],
OTTOMAN_KEY_4 => [
"x" => 1708,
"y" => 1437,
"board" => "powercards"
],
OTTOMAN_KEY_5 => [
"x" => 1820,
"y" => 1437,
"board" => "powercards"
],
OTTOMAN_KEY_6 => [
"x" => 1932,
"y" => 1437,
"board" => "powercards"
],
OTTOMAN_KEY_7 => [
"x" => 1372,
"y" => 1547,
"board" => "powercards"
],
OTTOMAN_KEY_8 => [
"x" => 1484,
"y" => 1547,
"board" => "powercards"
],
OTTOMAN_KEY_9 => [
"x" => 1596,
"y" => 1547,
"board" => "powercards"
],
OTTOMAN_KEY_10 => [
"x" => 1708,
"y" => 1547,
"board" => "powercards"
],
OTTOMAN_KEY_11 => [
"x" => 1820,
"y" => 1547,
"board" => "powercards"
],
PAPACY_KEY_1 => [
"x" => 2642,
"y" => 1551,
"board" => "powercards"
],
PAPACY_KEY_2 => [
"x" => 2755,
"y" => 1551,
"board" => "powercards"
],
PAPACY_KEY_3 => [
"x" => 2868,
"y" => 1551,
"board" => "powercards"
],
PAPACY_KEY_4 => [
"x" => 2981,
"y" => 1551,
"board" => "powercards"
],
PAPACY_KEY_5 => [
"x" => 3094,
"y" => 1551,
"board" => "powercards"
],
PAPACY_KEY_6 => [
"x" => 3207,
"y" => 1551,
"board" => "powercards"
],
PAPACY_KEY_7 => [
"x" => 3320,
"y" => 1551,
"board" => "powercards"
],
ENGLAND_PRISON => [
"x" => 837,
"y" => 361,
"board" => "powercards"
],
FRANCE_PRISON => [
"x" => 813,
"y" => 1127,
"board" => "powercards"
],
HAPSBURG_PRISON => [
"x" => 1977,
"y" => 457,
"board" => "powercards"
],
OTTOMAN_PRISON => [
"x" => 2013,
"y" => 1225,
"board" => "powercards"
],
PAPACY_PRISON => [
"x" => 3269,
"y" => 1269,
"board" => "powercards"
],
PROTESTANT_PRISON => [
"x" => 3325,
"y" => 377,
"board" => "powercards"
],
OTTOMAN_MINUS1CARD => [
"x" => 0,
"y" => 0,
"board" => "powercards"
],
OTTOMAN_MINUS1CARD2 => [
"x" => 0,
"y" => 0,
"board" => "powercards"
],
HAPSBURG_MINUS1CARD => [
"x" => 0,
"y" => 0,
"board" => "powercards"
],
HAPSBURG_MINUS1CARD2 => [
"x" => 0,
"y" => 0,
"board" => "powercards"
],
FRANCE_MINUSONECARD => [
"x" => 0,
"y" => 0,
"board" => "powercards"
],
FRANCE_MINUSONECARD2 => [
"x" => 0,
"y" => 0,
"board" => "powercards"
],
ENGLAND_MINUSONECARD => [
"x" => 0,
"y" => 0,
"board" => "powercards"
],
ENGLAND_MINUSONECARD2 => [
"x" => 0,
"y" => 0,
"board" => "powercards"
],
PAPACY_MINUSONECARD => [
"x" => 0,
"y" => 0,
"board" => "powercards"
],
PAPACY_MINUSONECARD2 => [
"x" => 0,
"y" => 0,
"board" => "powercards"
],
PROTESTANT_MINUSONECARD => [
"x" => 0,
"y" => 0,
"board" => "powercards"
],
PROTESTANT_MINUSONECARD2 => [
"x" => 0,
"y" => 0,
"board" => "powercards"
],
ENG_VP_TOKEN_1 => [
"x" => 933,
"y" => 721,
"board" => "powercards"
],
ENG_VP_TOKEN_2 => [
"x" => 1033,
"y" => 721,
"board" => "powercards"
],
ENG_VP_TOKEN_3 => [
"x" => 1133,
"y" => 721,
"board" => "powercards"
],
ENG_VP_TOKEN_4 => [
"x" => 933,
"y" => 647,
"board" => "powercards"
],
ENG_VP_TOKEN_5 => [
"x" => 1033,
"y" => 647,
"board" => "powercards"
],
ENG_VP_TOKEN_6 => [
"x" => 1133,
"y" => 647,
"board" => "powercards"
],
FRA_VP_TOKEN_1 => [
"x" => 933,
"y" => 1544,
"board" => "powercards"
],
FRA_VP_TOKEN_2 => [
"x" => 1033,
"y" => 1544,
"board" => "powercards"
],
FRA_VP_TOKEN_3 => [
"x" => 1133,
"y" => 1544,
"board" => "powercards"
],
FRA_VP_TOKEN_4 => [
"x" => 933,
"y" => 1470,
"board" => "powercards"
],
FRA_VP_TOKEN_5 => [
"x" => 1033,
"y" => 1470,
"board" => "powercards"
],
FRA_VP_TOKEN_6 => [
"x" => 1133,
"y" => 1470,
"board" => "powercards"
],
HAP_VP_TOKEN_1 => [
"x" => 2203,
"y" => 721,
"board" => "powercards"
],
HAP_VP_TOKEN_2 => [
"x" => 2303,
"y" => 721,
"board" => "powercards"
],
HAP_VP_TOKEN_3 => [
"x" => 2403,
"y" => 721,
"board" => "powercards"
],
HAP_VP_TOKEN_4 => [
"x" => 2203,
"y" => 647,
"board" => "powercards"
],
HAP_VP_TOKEN_5 => [
"x" => 2303,
"y" => 647,
"board" => "powercards"
],
HAP_VP_TOKEN_6 => [
"x" => 2403,
"y" => 647,
"board" => "powercards"
],
PAP_VP_TOKEN_1 => [
"x" => 3475,
"y" => 1544,
"board" => "powercards"
],
PAP_VP_TOKEN_2 => [
"x" => 3575,
"y" => 1544,
"board" => "powercards"
],
PAP_VP_TOKEN_3 => [
"x" => 3675,
"y" => 1544,
"board" => "powercards"
],
PAP_VP_TOKEN_4 => [
"x" => 3475,
"y" => 1470,
"board" => "powercards"
],
PAP_VP_TOKEN_5 => [
"x" => 3575,
"y" => 1470,
"board" => "powercards"
],
PAP_VP_TOKEN_6 => [
"x" => 3675,
"y" => 1470,
"board" => "powercards"
],
PRO_VP_TOKEN_1 => [
"x" => 3475,
"y" => 721,
"board" => "powercards"
],
PRO_VP_TOKEN_2 => [
"x" => 3575,
"y" => 721,
"board" => "powercards"
],
PRO_VP_TOKEN_3 => [
"x" => 3675,
"y" => 721,
"board" => "powercards"
],
PRO_VP_TOKEN_4 => [
"x" => 3475,
"y" => 647,
"board" => "powercards"
],
PRO_VP_TOKEN_5 => [
"x" => 3575,
"y" => 647,
"board" => "powercards"
],
PRO_VP_TOKEN_6 => [
"x" => 3675,
"y" => 647,
"board" => "powercards"
],
OTT_VP_TOKEN_1 => [
"x" => 2203,
"y" => 1544,
"board" => "powercards"
],
OTT_VP_TOKEN_2 => [
"x" => 2303,
"y" => 1544,
"board" => "powercards"
],
OTT_VP_TOKEN_3 => [
"x" => 2403,
"y" => 1544,
"board" => "powercards"
],
OTT_VP_TOKEN_4 => [
"x" => 2203,
"y" => 1470,
"board" => "powercards"
],
OTT_VP_TOKEN_5 => [
"x" => 2303,
"y" => 1470,
"board" => "powercards"
],
OTT_VP_TOKEN_6 => [
"x" => 2403,
"y" => 1470,
"board" => "powercards"
],
NT_TRANSLATION_0 => [
"x" => 2636,
"y" => 505,
"board" => "powercards"
],
NT_TRANSLATION_1 => [
"x" => 2730,
"y" => 505,
"board" => "powercards"
],
NT_TRANSLATION_2 => [
"x" => 2823,
"y" => 505,
"board" => "powercards"
],
NT_TRANSLATION_3 => [
"x" => 2917,
"y" => 505,
"board" => "powercards"
],
NT_TRANSLATION_4 => [
"x" => 3011,
"y" => 505,
"board" => "powercards"
],
NT_TRANSLATION_5 => [
"x" => 3105,
"y" => 505,
"board" => "powercards"
],
NT_TRANSLATION_6 => [
"x" => 3198,
"y" => 505,
"board" => "powercards"
],
BIBLE_TRANSLATION_0 => [
"x" => 2635,
"y" => 641,
"board" => "powercards"
],
BIBLE_TRANSLATION_1 => [
"x" => 2729,
"y" => 641,
"board" => "powercards"
],
BIBLE_TRANSLATION_2 => [
"x" => 2823,
"y" => 641,
"board" => "powercards"
],
BIBLE_TRANSLATION_3 => [
"x" => 2917,
"y" => 641,
"board" => "powercards"
],
BIBLE_TRANSLATION_4 => [
"x" => 3011,
"y" => 641,
"board" => "powercards"
],
BIBLE_TRANSLATION_5 => [
"x" => 3105,
"y" => 641,
"board" => "powercards"
],
BIBLE_TRANSLATION_6 => [
"x" => 2635,
"y" => 735,
"board" => "powercards"
],
BIBLE_TRANSLATION_7 => [
"x" => 2729,
"y" => 735,
"board" => "powercards"
],
BIBLE_TRANSLATION_8 => [
"x" => 2823,
"y" => 735,
"board" => "powercards"
],
BIBLE_TRANSLATION_9 => [
"x" => 2917,
"y" => 735,
"board" => "powercards"
],
BIBLE_TRANSLATION_10 => [
"x" => 3011,
"y" => 735,
"board" => "powercards"
],
CHATEAUX_0 => [
"x" => 484,
"y" => 1336,
"board" => "powercards"
],
CHATEAUX_1 => [
"x" => 572,
"y" => 1336,
"board" => "powercards"
],
CHATEAUX_2 => [
"x" => 661,
"y" => 1336,
"board" => "powercards"
],
CHATEAUX_3 => [
"x" => 750,
"y" => 1336,
"board" => "powercards"
],
CHATEAUX_4 => [
"x" => 572,
"y" => 1423,
"board" => "powercards"
],
CHATEAUX_5 => [
"x" => 661,
"y" => 1423,
"board" => "powercards"
],
CHATEAUX_6 => [
"x" => 750,
"y" => 1423,
"board" => "powercards"
],
PIRACY_0 => [
"x" => 1457,
"y" => 1209,
"board" => "powercards"
],
PIRACY_1 => [
"x" => 1551,
"y" => 1209,
"board" => "powercards"
],
PIRACY_2 => [
"x" => 1645,
"y" => 1209,
"board" => "powercards"
],
PIRACY_3 => [
"x" => 1739,
"y" => 1209,
"board" => "powercards"
],
PIRACY_4 => [
"x" => 1833,
"y" => 1209,
"board" => "powercards"
],
PIRACY_5 => [
"x" => 1363,
"y" => 1302,
"board" => "powercards"
],
PIRACY_6 => [
"x" => 1457,
"y" => 1302,
"board" => "powercards"
],
PIRACY_7 => [
"x" => 1551,
"y" => 1302,
"board" => "powercards"
],
PIRACY_8 => [
"x" => 1645,
"y" => 1302,
"board" => "powercards"
],
PIRACY_9 => [
"x" => 1739,
"y" => 1302,
"board" => "powercards"
],
PIRACY_10 => [
"x" => 1833,
"y" => 1302,
"board" => "powercards"
],
MARITAL_STATUS_1 => [
"x" => 105,
"y" => 458,
"board" => "powercards"
],
MARITAL_STATUS_2 => [
"x" => 210,
"y" => 458,
"board" => "powercards"
],
MARITAL_STATUS_3 => [
"x" => 315,
"y" => 458,
"board" => "powercards"
],
MARITAL_STATUS_4 => [
"x" => 420,
"y" => 458,
"board" => "powercards"
],
MARITAL_STATUS_5 => [
"x" => 525,
"y" => 458,
"board" => "powercards"
],
MARITAL_STATUS_6 => [
"x" => 630,
"y" => 458,
"board" => "powercards"
],
MARITAL_STATUS_7 => [
"x" => 735,
"y" => 458,
"board" => "powercards"
],
SAINT_PETERS_CP_0 => [
"x" => 2636,
"y" => 1317,
"board" => "powercards"
],
SAINT_PETERS_CP_1 => [
"x" => 2731,
"y" => 1317,
"board" => "powercards"
],
SAINT_PETERS_CP_2 => [
"x" => 2826,
"y" => 1317,
"board" => "powercards"
],
SAINT_PETERS_CP_3 => [
"x" => 2919,
"y" => 1317,
"board" => "powercards"
],
SAINT_PETERS_CP_4 => [
"x" => 3013,
"y" => 1317,
"board" => "powercards"
],
SAINT_PETERS_CP_5 => [
"x" => 3106,
"y" => 1317,
"board" => "powercards"
],
SAINT_PETERS_VP_0 => [
"x" => 2636,
"y" => 1410,
"board" => "powercards"
],
SAINT_PETERS_VP_1 => [
"x" => 2731,
"y" => 1410,
"board" => "powercards"
],
SAINT_PETERS_VP_2 => [
"x" => 2826,
"y" => 1410,
"board" => "powercards"
],
SAINT_PETERS_VP_3 => [
"x" => 2919,
"y" => 1410,
"board" => "powercards"
],
SAINT_PETERS_VP_4 => [
"x" => 3013,
"y" => 1410,
"board" => "powercards"
],
SAINT_PETERS_VP_5 => [
"x" => 3106,
"y" => 1410,
"board" => "powercards"
],
PROT_EVENT_REMINDER_1 => [
"x" => 2929,
"y" => 69,
"board" => "powercards"
],
PROT_EVENT_REMINDER_2 => [
"x" => 3079,
"y" => 69,
"board" => "powercards"
],
EXCOMMUNICATED_1 => [
"x" => 2815,
"y" => 925,
"board" => "powercards"
],
EXCOMMUNICATED_2 => [
"x" => 2898,
"y" => 925,
"board" => "powercards"
],
EXCOMMUNICATED_3 => [
"x" => 2981,
"y" => 925,
"board" => "powercards"
],
EXCOMMUNICATED_4 => [
"x" => 3064,
"y" => 925,
"board" => "powercards"
],
EXCOMMUNICATED_5 => [
"x" => 3147,
"y" => 925,
"board" => "powercards"
],
EXCOMMUNICATED_6 => [
"x" => 3230,
"y" => 925,
"board" => "powercards"
],
EXCOMMUNICATED_7 => [
"x" => 3313,
"y" => 925,
"board" => "powercards"
],
ENGLAND_LEADER => [
"x" => 1029,
"y" => 313,
"board" => "powercards"
],
HAPSBURG_LEADER => [
"x" => 2297,
"y" => 313,
"board" => "powercards"
],
PROTESTANT_LEADER => [
"x" => 3568,
"y" => 313,
"board" => "powercards"
],
FRANCE_LEADER => [
"x" => 1029,
"y" => 1151,
"board" => "powercards"
],
OTTOMAN_LEADER => [
"x" => 2297,
"y" => 1151,
"board" => "powercards"
],
PAPACY_LEADER => [
"x" => 3568,
"y" => 1151,
"board" => "powercards"
],
PROTESTANT_SPACES_0 => [
"x" => 135,
"y" => 683,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_1 => [
"x" => 235,
"y" => 683,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_2 => [
"x" => 334,
"y" => 683,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_3 => [
"x" => 434,
"y" => 683,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_4 => [
"x" => 534,
"y" => 683,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_5 => [
"x" => 634,
"y" => 683,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_6 => [
"x" => 734,
"y" => 683,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_7 => [
"x" => 833,
"y" => 683,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_8 => [
"x" => 933,
"y" => 683,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_9 => [
"x" => 1033,
"y" => 683,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_10 => [
"x" => 1133,
"y" => 683,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_11 => [
"x" => 1233,
"y" => 683,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_12 => [
"x" => 1331,
"y" => 683,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_13 => [
"x" => 135,
"y" => 795,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_14 => [
"x" => 235,
"y" => 795,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_15 => [
"x" => 334,
"y" => 795,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_16 => [
"x" => 434,
"y" => 795,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_17 => [
"x" => 534,
"y" => 795,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_18 => [
"x" => 634,
"y" => 795,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_19 => [
"x" => 734,
"y" => 795,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_20 => [
"x" => 833,
"y" => 795,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_21 => [
"x" => 933,
"y" => 795,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_22 => [
"x" => 1033,
"y" => 795,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_23 => [
"x" => 1133,
"y" => 795,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_24 => [
"x" => 1233,
"y" => 795,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_25 => [
"x" => 1331,
"y" => 795,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_26 => [
"x" => 135,
"y" => 907,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_27 => [
"x" => 235,
"y" => 907,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_28 => [
"x" => 334,
"y" => 907,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_29 => [
"x" => 434,
"y" => 907,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_30 => [
"x" => 534,
"y" => 907,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_31 => [
"x" => 634,
"y" => 907,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_32 => [
"x" => 734,
"y" => 907,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_33 => [
"x" => 833,
"y" => 907,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_34 => [
"x" => 933,
"y" => 907,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_35 => [
"x" => 1033,
"y" => 907,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_36 => [
"x" => 1133,
"y" => 907,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_37 => [
"x" => 1233,
"y" => 907,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_38 => [
"x" => 1331,
"y" => 907,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_39 => [
"x" => 135,
"y" => 1019,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_40 => [
"x" => 235,
"y" => 1019,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_41 => [
"x" => 334,
"y" => 1019,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_42 => [
"x" => 434,
"y" => 1019,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_43 => [
"x" => 534,
"y" => 1019,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_44 => [
"x" => 634,
"y" => 1019,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_45 => [
"x" => 734,
"y" => 1019,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_46 => [
"x" => 833,
"y" => 1019,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_47 => [
"x" => 933,
"y" => 1019,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_48 => [
"x" => 1033,
"y" => 1019,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_49 => [
"x" => 1133,
"y" => 1019,
"board" => "religiousstruggle"
],
PROTESTANT_SPACES_50 => [
"x" => 1233,
"y" => 1019,
"board" => "religiousstruggle"
],
CURRENT_DEBATER_PAP => [
"x" => 854,
"y" => 386,
"board" => "religiousstruggle"
],
CURRENT_DEBATER_PRO => [
"x" => 976,
"y" => 386,
"board" => "religiousstruggle"
],
DEBATER_POPE_1 => [
"x" => 321,
"y" => 187,
"board" => "religiousstruggle"
],
DEBATER_POPE_2 => [
"x" => 441,
"y" => 187,
"board" => "religiousstruggle"
],
DEBATER_POPE_3 => [
"x" => 561,
"y" => 187,
"board" => "religiousstruggle"
],
DEBATER_POPE_4 => [
"x" => 681,
"y" => 187,
"board" => "religiousstruggle"
],
DEBATER_POPE_5 => [
"x" => 801,
"y" => 187,
"board" => "religiousstruggle"
],
DEBATER_POPE_6 => [
"x" => 921,
"y" => 187,
"board" => "religiousstruggle"
],
DEBATER_POPE_7 => [
"x" => 321,
"y" => 347,
"board" => "religiousstruggle"
],
DEBATER_POPE_8 => [
"x" => 441,
"y" => 347,
"board" => "religiousstruggle"
],
DEBATER_POPE_9 => [
"x" => 561,
"y" => 347,
"board" => "religiousstruggle"
],
DEBATER_POPE_10 => [
"x" => 681,
"y" => 347,
"board" => "religiousstruggle"
],
DEBATER_POPE_11 => [
"x" => 801,
"y" => 347,
"board" => "religiousstruggle"
],
DEBATER_POPE_12 => [
"x" => 921,
"y" => 347,
"board" => "religiousstruggle"
],
DEBATER_GER_1 => [
"x" => 119,
"y" => 549,
"board" => "religiousstruggle"
],
DEBATER_GER_2 => [
"x" => 235,
"y" => 549,
"board" => "religiousstruggle"
],
DEBATER_GER_3 => [
"x" => 351,
"y" => 549,
"board" => "religiousstruggle"
],
DEBATER_GER_4 => [
"x" => 119,
"y" => 439,
"board" => "religiousstruggle"
],
DEBATER_GER_5 => [
"x" => 197,
"y" => 439,
"board" => "religiousstruggle"
],
DEBATER_GER_6 => [
"x" => 274,
"y" => 439,
"board" => "religiousstruggle"
],
DEBATER_GER_7 => [
"x" => 351,
"y" => 439,
"board" => "religiousstruggle"
],
DEBATER_ENG_1 => [
"x" => 761,
"y" => 549,
"board" => "religiousstruggle"
],
DEBATER_ENG_2 => [
"x" => 878,
"y" => 549,
"board" => "religiousstruggle"
],
DEBATER_ENG_3 => [
"x" => 995,
"y" => 549,
"board" => "religiousstruggle"
],
DEBATER_ENG_4 => [
"x" => 761,
"y" => 439,
"board" => "religiousstruggle"
],
DEBATER_ENG_5 => [
"x" => 878,
"y" => 439,
"board" => "religiousstruggle"
],
DEBATER_ENG_6 => [
"x" => 995,
"y" => 439,
"board" => "religiousstruggle"
],
DEBATER_FRE_1 => [
"x" => 482,
"y" => 549,
"board" => "religiousstruggle"
],
DEBATER_FRE_2 => [
"x" => 622,
"y" => 549,
"board" => "religiousstruggle"
],
DEBATER_FRE_3 => [
"x" => 482,
"y" => 439,
"board" => "religiousstruggle"
],
DEBATER_FRE_4 => [
"x" => 622,
"y" => 439,
"board" => "religiousstruggle"
]
];

$this->cards = [
CARD_JANISSARIES => [
"class_name" => "Janissaries",
"name" => "Janissaries",
"type" => HOME_CARD,
"cp" => 5,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_HOLY_ROMAN_EMPEROR => [
"class_name" => "HolyRomanEmperor",
"name" => "Holy Roman Emperor",
"type" => HOME_CARD,
"cp" => 5,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_SIX_WIVES_OF_HENRY_VIII => [
"class_name" => "SixWives",
"name" => "Six Wives of Henry VIII",
"type" => HOME_CARD,
"cp" => 5,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_PATRON_OF_THE_ARTS => [
"class_name" => "PatronArts",
"name" => "Patron of the Arts",
"type" => HOME_CARD,
"cp" => 5,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_PAPAL_BULL => [
"class_name" => "PapalBull",
"name" => "Papal Bull",
"type" => HOME_CARD,
"cp" => 4,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_LEIPZIG_DEBATE => [
"class_name" => "LeipzigDebate",
"name" => "Leipzig Debate",
"type" => HOME_CARD,
"cp" => 3,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_HERE_I_STAND => [
"class_name" => "HereIStand",
"name" => "Here I Stand",
"type" => HOME_CARD,
"cp" => 5,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_LUTHER_95_THESES => [
"class_name" => "LutherTheses",
"name" => "Luther's 95 Theses",
"type" => MANDATORY_CARD,
"cp" => 0,
"remove" => "Yes",
"turn_added" => 1,
"scenario" => 1517
],
CARD_BARBARY_PIRATES => [
"class_name" => "BarbaryPirates",
"name" => "Barbary Pirates",
"type" => MANDATORY_CARD,
"cp" => 2,
"remove" => "Yes",
"turn_added" => 1,
"scenario" => 1517
],
CARD_CLEMENT_VII => [
"class_name" => "ClementVII",
"name" => "Clement VII",
"type" => MANDATORY_CARD,
"cp" => 2,
"remove" => "Leader",
"turn_added" => 1,
"scenario" => 1517
],
CARD_DEFENDER_OF_THE_FAITH => [
"class_name" => "DefenderFaith",
"name" => "Defender of the Faith",
"type" => MANDATORY_CARD,
"cp" => 2,
"remove" => "Yes",
"turn_added" => 1,
"scenario" => 1517
],
CARD_MASTER_OF_ITALY => [
"class_name" => "MasterItaly",
"name" => "Master of Italy",
"type" => MANDATORY_CARD,
"cp" => 2,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_SCHMALKALDIC_LEAGUE => [
"class_name" => "SchmalkaldicLeague",
"name" => "Schmalkaldic League",
"type" => MANDATORY_CARD,
"cp" => 2,
"remove" => "Special",
"turn_added" => 1,
"scenario" => 1517
],
CARD_PAUL_III => [
"class_name" => "PaulIII",
"name" => "Paul III",
"type" => MANDATORY_CARD,
"cp" => 2,
"remove" => "Leader",
"turn_added" => 3,
"scenario" => 1517
],
CARD_SOCIETY_OF_JESUS => [
"class_name" => "SocietyJesus",
"name" => "Society of Jesus",
"type" => MANDATORY_CARD,
"cp" => 2,
"remove" => "Yes",
"turn_added" => 5,
"scenario" => 1517
],
CARD_CALVIN => [
"class_name" => "Calvin",
"name" => "Calvin",
"type" => MANDATORY_CARD,
"cp" => 2,
"remove" => "Leader",
"turn_added" => 6,
"scenario" => 1517
],
CARD_COUNCIL_OF_TRENT => [
"class_name" => "CouncilTrent",
"name" => "Council of Trent",
"type" => MANDATORY_CARD,
"cp" => 2,
"remove" => "Yes",
"turn_added" => 6,
"scenario" => 1517
],
CARD_DRAGUT => [
"class_name" => "Dragut",
"name" => "Dragut",
"type" => MANDATORY_CARD,
"cp" => 2,
"remove" => "Yes",
"turn_added" => 6,
"scenario" => 1517
],
CARD_EDWARD_VI => [
"class_name" => "EdwardVI",
"name" => "Edward VI",
"type" => MANDATORY_CARD,
"cp" => 2,
"remove" => "Leader",
"turn_added" => "Variable",
"scenario" => 1517
],
CARD_HENRY_II => [
"class_name" => "HenryII",
"name" => "Henry II",
"type" => MANDATORY_CARD,
"cp" => 2,
"remove" => "Leader",
"turn_added" => 6,
"scenario" => 1517
],
CARD_MARY_I => [
"class_name" => "MaryI",
"name" => "Mary I",
"type" => MANDATORY_CARD,
"cp" => 2,
"remove" => "Leader",
"turn_added" => "Variable",
"scenario" => 1517
],
CARD_JULIUS_III => [
"class_name" => "JuliusIII",
"name" => "Julius III",
"type" => MANDATORY_CARD,
"cp" => 2,
"remove" => "Leader",
"turn_added" => 7,
"scenario" => 1517
],
CARD_ELIZABETH_I => [
"class_name" => "ElizabethI",
"name" => "Elizabeth I",
"type" => MANDATORY_CARD,
"cp" => 2,
"remove" => "Leader",
"turn_added" => "Variable",
"scenario" => 1517
],
CARD_ARQUEBUSIERS => [
"class_name" => "Arquebusiers",
"name" => "Arquebusiers",
"type" => COMBAT_CARD,
"cp" => 1,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_FIELD_ARTILLERY => [
"class_name" => "FieldArtillery",
"name" => "Field Artillery",
"type" => COMBAT_CARD,
"cp" => 1,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_MERCENARIES_BRIBED => [
"class_name" => "MercenariesBribed",
"name" => "Mercenaries Bribed",
"type" => COMBAT_CARD,
"cp" => 3,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_MERCENARIES_GROW_RESTLESS => [
"class_name" => "MercenariesGrowRestless",
"name" => "Mercenaries Grow Restless",
"type" => COMBAT_CARD,
"cp" => 2,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_SIEGE_MINING => [
"class_name" => "SiegeMining",
"name" => "Siege Mining",
"type" => COMBAT_CARD,
"cp" => 1,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_SURPRISE_ATTACK => [
"class_name" => "SurpriseAttack",
"name" => "Surprise Attack",
"type" => COMBAT_CARD,
"cp" => 2,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_TERCIOS => [
"class_name" => "Tercios",
"name" => "Tercios",
"type" => COMBAT_CARD,
"cp" => 2,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_FOUL_WEATHER => [
"class_name" => "FoulWeather",
"name" => "Foul Weather",
"type" => RESPONSE_CARD,
"cp" => 2,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_GOUT => [
"class_name" => "Gout",
"name" => "Gout",
"type" => RESPONSE_CARD,
"cp" => 2,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_LANDSKNECHTS => [
"class_name" => "Landsknechts",
"name" => "Landsknechts",
"type" => RESPONSE_CARD,
"cp" => 1,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_PROFESSIONAL_ROWERS => [
"class_name" => "ProfessionalRowers",
"name" => "Professional Rowers",
"type" => RESPONSE_CARD,
"cp" => 2,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_SIEGE_ARTILLERY => [
"class_name" => "SiegeArtillery",
"name" => "Siege Artillery",
"type" => RESPONSE_CARD,
"cp" => 1,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_SWISS_MERCENARIES => [
"class_name" => "SwissMercenaries",
"name" => "Swiss Mercenaries",
"type" => RESPONSE_CARD,
"cp" => 1,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_THE_WARTBURG => [
"class_name" => "Wartburg",
"name" => "The Wartburg",
"type" => RESPONSE_CARD,
"cp" => 2,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_HALLEY_COMET => [
"class_name" => "HalleyComet",
"name" => "Halley's Comet",
"type" => RESPONSE_CARD,
"cp" => 2,
"remove" => "Yes",
"turn_added" => 3,
"scenario" => 1517
],
CARD_AUGSBURG_CONFESSION => [
"class_name" => "AugsburgConfession",
"name" => "Augsburg Confession",
"type" => EVENT_CARD,
"cp" => 4,
"remove" => "Yes",
"turn_added" => 3,
"scenario" => 1517
],
CARD_MACHIAVELLI_THE_PRINCE => [
"class_name" => "Machiavelli",
"name" => "Machiavelli: The Prince",
"type" => EVENT_CARD,
"cp" => 3,
"remove" => "No",
"turn_added" => 3,
"scenario" => 1517
],
CARD_MARBURG_COLLOQUY => [
"class_name" => "MarburgColloquy",
"name" => "Marburg Colloquy",
"type" => EVENT_CARD,
"cp" => 5,
"remove" => "Yes",
"turn_added" => 3,
"scenario" => 1517
],
CARD_ROXELANA => [
"class_name" => "Roxelana",
"name" => "Roxelana",
"type" => EVENT_CARD,
"cp" => 4,
"remove" => "No",
"turn_added" => 3,
"scenario" => 1517
],
CARD_ZWINGLI_DONS_ARMOR => [
"class_name" => "ZwingliDonsArmor",
"name" => "Zwingli Dons Armor",
"type" => EVENT_CARD,
"cp" => 3,
"remove" => "Yes",
"turn_added" => 3,
"scenario" => 1517
],
CARD_AFFAIR_OF_THE_PLACARDS => [
"class_name" => "AffairPlacards",
"name" => "Affair of the Placards",
"type" => EVENT_CARD,
"cp" => 2,
"remove" => "Yes",
"turn_added" => 4,
"scenario" => 1517
],
CARD_CALVIN_EXPELLED => [
"class_name" => "CalvinExpelled",
"name" => "Calvin Expelled",
"type" => EVENT_CARD,
"cp" => 1,
"remove" => "Yes",
"turn_added" => 4,
"scenario" => 1517
],
CARD_CALVIN_INSTITUTES => [
"class_name" => "CalvinInstitutes",
"name" => "Calvin's Institutes",
"type" => EVENT_CARD,
"cp" => 5,
"remove" => "Yes",
"turn_added" => 4,
"scenario" => 1517
],
CARD_COPERNICUS => [
"class_name" => "Copernicus",
"name" => "Copernicus",
"type" => EVENT_CARD,
"cp" => 6,
"remove" => "Yes",
"turn_added" => 5,
"scenario" => 1517
],
CARD_GALLEONS => [
"class_name" => "Galleons",
"name" => "Galleons",
"type" => EVENT_CARD,
"cp" => 2,
"remove" => "No",
"turn_added" => 4,
"scenario" => 1517
],
CARD_HUGUENOT_RAIDERS => [
"class_name" => "HuguenotRaiders",
"name" => "Huguenot Raiders",
"type" => EVENT_CARD,
"cp" => 2,
"remove" => "No",
"turn_added" => 4,
"scenario" => 1517
],
CARD_MERCATORMAP => [
"class_name" => "MercatorMap",
"name" => "Mercator's Map",
"type" => EVENT_CARD,
"cp" => 2,
"remove" => "No",
"turn_added" => 4,
"scenario" => 1517
],
CARD_MICHAEL_SERVETUS => [
"class_name" => "MichaelServetus",
"name" => "Michael Servetus",
"type" => EVENT_CARD,
"cp" => 4,
"remove" => "Yes",
"turn_added" => 4,
"scenario" => 1517
],
CARD_MICHELANGELO => [
"class_name" => "Michelangelo",
"name" => "Michelangelo",
"type" => EVENT_CARD,
"cp" => 4,
"remove" => "Yes",
"turn_added" => 4,
"scenario" => 1517
],
CARD_PLANTATIONS => [
"class_name" => "Plantations",
"name" => "Plantations",
"type" => EVENT_CARD,
"cp" => 2,
"remove" => "No",
"turn_added" => 4,
"scenario" => 1517
],
CARD_POTOSI_SILVER_MINES => [
"class_name" => "PotosiSilverMines",
"name" => "Potosi Silver Mines",
"type" => EVENT_CARD,
"cp" => 3,
"remove" => "Yes",
"turn_added" => 4,
"scenario" => 1517
],
CARD_JESUIT_EDUCATION => [
"class_name" => "JesuitEducation",
"name" => "Jesuit Education",
"type" => EVENT_CARD,
"cp" => 3,
"remove" => "No",
"turn_added" => 5,
"scenario" => 1517
],
CARD_PAPAL_INQUISITION => [
"class_name" => "PapalInquisition",
"name" => "Papal Inquisition",
"type" => EVENT_CARD,
"cp" => 5,
"remove" => "No",
"turn_added" => 5,
"scenario" => 1517
],
CARD_PHILIP_OF_HESSE_BIGAMY => [
"class_name" => "PhilipHesseBigamy",
"name" => "Philip of Hesse's Bigamy",
"type" => EVENT_CARD,
"cp" => 2,
"remove" => "Yes",
"turn_added" => 5,
"scenario" => 1517
],
CARD_SPANISH_INQUISITION => [
"class_name" => "SpanishInquisition",
"name" => "Spanish Inquisition",
"type" => EVENT_CARD,
"cp" => 5,
"remove" => "No",
"turn_added" => 5,
"scenario" => 1517
],
CARD_LADY_JANE_GREY => [
"class_name" => "LadyJaneGrey",
"name" => "Lady Jane Grey",
"type" => EVENT_CARD,
"cp" => 3,
"remove" => "Yes",
"turn_added" => 6,
"scenario" => 1517
],
CARD_MAURICE_OF_SAXONY => [
"class_name" => "MauriceSaxony",
"name" => "Maurice of Saxony",
"type" => EVENT_CARD,
"cp" => 4,
"remove" => "No",
"turn_added" => 6,
"scenario" => 1517
],
CARD_MARY_DEFIES_COUNCIL => [
"class_name" => "MaryDefiesCouncil",
"name" => "Mary Defies Council",
"type" => EVENT_CARD,
"cp" => 1,
"remove" => "No",
"turn_added" => 7,
"scenario" => 1517
],
CARD_BOOK_OF_COMMON_PRAYER => [
"class_name" => "BookCommonPrayer",
"name" => "Book of Common Prayer",
"type" => EVENT_CARD,
"cp" => 2,
"remove" => "No",
"turn_added" => "Variable",
"scenario" => 1517
],
CARD_DISSOLUTION_OF_THE_MONASTERIES => [
"class_name" => "DissolutionMonasteries",
"name" => "Dissolution of the Monasteries",
"type" => EVENT_CARD,
"cp" => 4,
"remove" => "Yes",
"turn_added" => "Variable",
"scenario" => 1517
],
CARD_PILGRIMAGE_OF_GRACE => [
"class_name" => "PilgrimageGrace",
"name" => "Pilgrimage of Grace",
"type" => EVENT_CARD,
"cp" => 3,
"remove" => "Yes",
"turn_added" => "Variable",
"scenario" => 1517
],
CARD_A_MIGHTY_FORTRESS => [
"class_name" => "MightyFortress",
"name" => "A Mighty Fortress",
"type" => EVENT_CARD,
"cp" => 4,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_AKINJI_RAIDERS => [
"class_name" => "AkinjiRaiders",
"name" => "Akinji Raiders",
"type" => EVENT_CARD,
"cp" => 3,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_ANABAPTISTS => [
"class_name" => "Anabptists",
"name" => "Anabaptists",
"type" => EVENT_CARD,
"cp" => 3,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_ANDREA_DORIA => [
"class_name" => "AndreaDoria",
"name" => "Andrea Doria",
"type" => EVENT_CARD,
"cp" => 5,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_AULD_ALLIANCE => [
"class_name" => "AuldAlliance",
"name" => "Auld Alliance",
"type" => EVENT_CARD,
"cp" => 3,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_CHARLES_BOURBON => [
"class_name" => "CharlesBourbon",
"name" => "Charles Bourbon",
"type" => EVENT_CARD,
"cp" => 4,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_CITY_STATE_REBELS => [
"class_name" => "CityStateRebels",
"name" => "City State Rebels",
"type" => EVENT_CARD,
"cp" => 4,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_CLOTH_PRICES_FLUCTUATE => [
"class_name" => "ClothPricesFluctuate",
"name" => "Cloth Prices Fluctuate",
"type" => EVENT_CARD,
"cp" => 3,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_DIPLOMATIC_MARRIAGE => [
"class_name" => "DiplomaticMarriage",
"name" => "Diplomatic Marriage",
"type" => EVENT_CARD,
"cp" => 5,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_DIPLOMATIC_OVERTURE => [
"class_name" => "DiplomaticOverture",
"name" => "Diplomatic Overture",
"type" => EVENT_CARD,
"cp" => 5,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_ERASMUS => [
"class_name" => "Erasmus",
"name" => "Erasmus",
"type" => EVENT_CARD,
"cp" => 3,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_FOREIGN_RECRUITS => [
"class_name" => "ForeignRecruits",
"name" => "Foreign Recruits",
"type" => EVENT_CARD,
"cp" => 4,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_FOUNTAIN_OF_YOUTH => [
"class_name" => "FountainYouth",
"name" => "Fountain of Youth",
"type" => EVENT_CARD,
"cp" => 2,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_FREDERICK_THE_WISE => [
"class_name" => "FrederickWise",
"name" => "Frederick the Wise",
"type" => EVENT_CARD,
"cp" => 3,
"remove" => "Yes",
"turn_added" => 1,
"scenario" => 1517
],
CARD_FUGGERS => [
"class_name" => "Fuggers",
"name" => "Fuggers",
"type" => EVENT_CARD,
"cp" => 3,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_GABELLE_REVOLT => [
"class_name" => "GabelleRevolt",
"name" => "Gabelle Revolt",
"type" => EVENT_CARD,
"cp" => 1,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_INDULGENCE_VENDOR => [
"class_name" => "IndulgenceVendor",
"name" => "Indulgence Vendor",
"type" => EVENT_CARD,
"cp" => 3,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_JANISSARIES_REBEL => [
"class_name" => "JanissariesRebel",
"name" => "Janissaries Rebel",
"type" => EVENT_CARD,
"cp" => 2,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_JOHN_ZAPOLYA => [
"class_name" => "JohnZapolya",
"name" => "John Zapolya",
"type" => EVENT_CARD,
"cp" => 3,
"remove" => "Yes",
"turn_added" => 1,
"scenario" => 1517
],
CARD_JULIA_GONZAGA => [
"class_name" => "JuliaGonzaga",
"name" => "Julia Gonzaga",
"type" => EVENT_CARD,
"cp" => 1,
"remove" => "Yes",
"turn_added" => 1,
"scenario" => 1517
],
CARD_KATHERINA_BORA => [
"class_name" => "KatherinaBora",
"name" => "Katherina Bora",
"type" => EVENT_CARD,
"cp" => 3,
"remove" => "Yes",
"turn_added" => 1,
"scenario" => 1517
],
CARD_KNIGHTS_OF_ST_JOHN => [
"class_name" => "KnightsStJohn",
"name" => "Knights of St. John",
"type" => EVENT_CARD,
"cp" => 2,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_MERCENARIES_DEMAND_PAY => [
"class_name" => "MercenariesDemandPay",
"name" => "Mercenaries Demand Pay",
"type" => EVENT_CARD,
"cp" => 2,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_PEASANTS_WAR => [
"class_name" => "PesantsWar",
"name" => "Peasants' War",
"type" => EVENT_CARD,
"cp" => 3,
"remove" => "Yes",
"turn_added" => 1,
"scenario" => 1517
],
CARD_PIRATE_HAVEN => [
"class_name" => "PirateHaven",
"name" => "Pirate Haven",
"type" => EVENT_CARD,
"cp" => 3,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_PRINTING_PRESS => [
"class_name" => "PrintingPress",
"name" => "Printing Press",
"type" => EVENT_CARD,
"cp" => 5,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_RANSOM => [
"class_name" => "Ransom",
"name" => "Ransom",
"type" => EVENT_CARD,
"cp" => 3,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_REVOLT_IN_EGYPT => [
"class_name" => "RevoltEgypt",
"name" => "Revolt in Egypt",
"type" => EVENT_CARD,
"cp" => 3,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_REVOLT_IN_IRELAND => [
"class_name" => "RevoltIreland",
"name" => "Revolt in Ireland",
"type" => EVENT_CARD,
"cp" => 3,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_REVOLT_OF_THE_COMMUNEROS => [
"class_name" => "RevoltCommuneros",
"name" => "Revolt of the Communeros",
"type" => EVENT_CARD,
"cp" => 2,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_SACK_OF_ROME => [
"class_name" => "SackRome",
"name" => "Sack of Rome",
"type" => EVENT_CARD,
"cp" => 5,
"remove" => "Special",
"turn_added" => 1,
"scenario" => 1517
],
CARD_SALE_OF_MOLUCCAS => [
"class_name" => "SaleMoluccas",
"name" => "Sale of Moluccas",
"type" => EVENT_CARD,
"cp" => 3,
"remove" => "Yes",
"turn_added" => 1,
"scenario" => 1517
],
CARD_SCOTS_RAID => [
"class_name" => "ScotsRaid",
"name" => "Scots Raid",
"type" => MANDATORY_CARD,
"cp" => 2,
"remove" => "No",
"turn_added" => 3,
"scenario" => 1517
],
CARD_SEARCH_FOR_CIBOLA => [
"class_name" => "SearchCibola",
"name" => "Search for Cibola",
"type" => EVENT_CARD,
"cp" => 2,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_SEBASTIAN_CABOT => [
"class_name" => "SebastianCabot",
"name" => "Sebastian Cabot",
"type" => EVENT_CARD,
"cp" => 1,
"remove" => "Special",
"turn_added" => 1,
"scenario" => 1517
],
CARD_SHIPBUILDING => [
"class_name" => "Shipbuilding",
"name" => "Shipbuilding",
"type" => EVENT_CARD,
"cp" => 2,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_SMALLPOX => [
"class_name" => "Smallpox",
"name" => "Smallpox",
"type" => EVENT_CARD,
"cp" => 4,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_SPRING_PREPARATIONS => [
"class_name" => "SpringPreparations",
"name" => "Spring Preparations",
"type" => EVENT_CARD,
"cp" => 3,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_THREAT_TO_POWER => [
"class_name" => "ThreatPower",
"name" => "Threat to Power",
"type" => EVENT_CARD,
"cp" => 3,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_TRACE_ITALIENNE => [
"class_name" => "TraceItalienne",
"name" => "Trace Italienne",
"type" => EVENT_CARD,
"cp" => 3,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_TREACHERY => [
"class_name" => "Treachery",
"name" => "Treachery!",
"type" => EVENT_CARD,
"cp" => 5,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_UNPAID_MERCENARIES => [
"class_name" => "UnpaidMercenaries",
"name" => "Unpaid Mercenaries",
"type" => EVENT_CARD,
"cp" => 3,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_UNSANITARY_CAMP => [
"class_name" => "UnsanitaryCamp",
"name" => "Unsanitary Camp",
"type" => EVENT_CARD,
"cp" => 2,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_VENETIAN_ALLIANCE => [
"class_name" => "VenetianAlliance",
"name" => "Venetian Alliance",
"type" => EVENT_CARD,
"cp" => 4,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_VENETIAN_INFORMANT => [
"class_name" => "VenetianInformant",
"name" => "Venetian Informant",
"type" => EVENT_CARD,
"cp" => 1,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_WAR_IN_PERSIA => [
"class_name" => "WarPersia",
"name" => "War in Persia",
"type" => EVENT_CARD,
"cp" => 4,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_COLONIAL_GOVERNOR_NATIVE_UPRISING => [
"class_name" => "ColonialGovernor",
"name" => "Colonial Governor/Native Uprising",
"type" => EVENT_CARD,
"cp" => 2,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_THOMAS_MORE => [
"class_name" => "ThomasMore",
"name" => "Thomas More",
"type" => EVENT_CARD,
"cp" => 3,
"remove" => "No",
"turn_added" => 1,
"scenario" => 1517
],
CARD_IMPERIAL_CORONATION => [
"class_name" => "ImperialCoronation",
"name" => "Imperial Coronation",
"type" => MANDATORY_CARD,
"cp" => 2,
"remove" => "Special",
"turn_added" => 3,
"scenario" => 1517
],
CARD_LA_FORET_EMBASSY_IN_ISTANBUL => [
"class_name" => "ForetEmbassy",
"name" => "La Forêt's Embassy in Istanbul",
"type" => MANDATORY_CARD,
"cp" => 2,
"remove" => "Special",
"turn_added" => 3,
"scenario" => 1517
],
CARD_THOMAS_CROMWELL => [
"class_name" => "ThomasCromwell",
"name" => "Thomas Cromwell",
"type" => RESPONSE_CARD,
"cp" => 3,
"remove" => "Special",
"turn_added" => 4,
"scenario" => 1517
],
CARD_ROUGH_WOOING => [
"class_name" => "RoughWooing",
"name" => "Rough Wooing",
"type" => EVENT_CARD,
"cp" => 3,
"remove" => "No",
"turn_added" => 5,
"scenario" => 1517
],
CARD_DIP_ANDREA_DORIA => [
"class_name" => "DipAndreaDoria",
"name" => "Andrea Doria",
"type" => DIPLOMACY_CARD,
"cp" => 0,
"remove" => "No",
"turn_added" => 1,
"scenario" => "2-player variant"
],
CARD_DIP_FRENCH_CONSTABLE_INVADES => [
"class_name" => "DipFrenchConstable",
"name" => "French Constable Invades",
"type" => DIPLOMACY_CARD,
"cp" => 0,
"remove" => "No",
"turn_added" => 1,
"scenario" => "2-player variant"
],
CARD_DIP_CORSAIR_RAID => [
"class_name" => "DipCorsairRaid",
"name" => "Corsair Raid",
"type" => DIPLOMACY_CARD,
"cp" => 0,
"remove" => "No",
"turn_added" => 1,
"scenario" => "2-player variant"
],
CARD_DIP_DIPLOMATIC_MARRIAGE => [
"class_name" => "DipDiplomaticMarriage",
"name" => "Diplomatic Marriage",
"type" => DIPLOMACY_CARD,
"cp" => 0,
"remove" => "No",
"turn_added" => 1,
"scenario" => "2-player variant"
],
CARD_DIP_DIPLOMATIC_PRESSURE => [
"class_name" => "DipDiplomaticPressure",
"name" => "Diplomatic Pressure",
"type" => DIPLOMACY_CARD,
"cp" => 0,
"remove" => "No",
"turn_added" => 1,
"scenario" => "2-player variant"
],
CARD_DIP_DIPLOMATIC_FRENCH_INVASION => [
"class_name" => "DipFrenchInvasion",
"name" => "French Invasion",
"type" => DIPLOMACY_CARD,
"cp" => 0,
"remove" => "No",
"turn_added" => 1,
"scenario" => "2-player variant"
],
CARD_DIP_HENRY_PETITIONS_FOR_DIVORCE => [
"class_name" => "DipHenryPetitions",
"name" => "Henry Petitions for Divorce",
"type" => DIPLOMACY_CARD,
"cp" => 0,
"remove" => "Yes",
"turn_added" => 1,
"scenario" => "2-player variant"
],
CARD_DIP_KNIGHTS_OF_ST_JOHN => [
"class_name" => "DipKnightsStJohn",
"name" => "Knights of St. John",
"type" => DIPLOMACY_CARD,
"cp" => 0,
"remove" => "No",
"turn_added" => 1,
"scenario" => "2-player variant"
],
CARD_DIP_PLAGUE => [
"class_name" => "DipPlague",
"name" => "Plague",
"type" => DIPLOMACY_CARD,
"cp" => 0,
"remove" => "No",
"turn_added" => 1,
"scenario" => "2-player variant"
],
CARD_DIP_SHIPBUILDING => [
"class_name" => "DipShipbuilding",
"name" => "Shipbuilding",
"type" => DIPLOMACY_CARD,
"cp" => 0,
"remove" => "No",
"turn_added" => 1,
"scenario" => "2-player variant"
],
CARD_DIP_SPANISH_INVASION => [
"class_name" => "DipSpanishInvasion",
"name" => "Spanish Invasion",
"type" => DIPLOMACY_CARD,
"cp" => 0,
"remove" => "No",
"turn_added" => 1,
"scenario" => "2-player variant"
],
CARD_DIP_VENETIAN_ALLIANCE => [
"class_name" => "DipVenetianAlliance",
"name" => "Venetian Alliance",
"type" => DIPLOMACY_CARD,
"cp" => 0,
"remove" => "No",
"turn_added" => 1,
"scenario" => "2-player variant"
],
CARD_DIP_AUSTRIAN_INVASION => [
"class_name" => "DipAustrianInvasion",
"name" => "Austrian Invasion",
"type" => DIPLOMACY_CARD,
"cp" => 0,
"remove" => "No",
"turn_added" => "Turn after SL",
"scenario" => "2-player variant"
],
CARD_DIP_IMPERIAL_INVASION => [
"class_name" => "DipImperialInvasion",
"name" => "Imperial Invasion",
"type" => DIPLOMACY_CARD,
"cp" => 0,
"remove" => "No",
"turn_added" => "Turn after SL",
"scenario" => "2-player variant"
],
CARD_DIP_MACHIAVELLI => [
"class_name" => "DipMachiavelli",
"name" => "Machiavelli",
"type" => DIPLOMACY_CARD,
"cp" => 0,
"remove" => "No",
"turn_added" => "Turn after SL",
"scenario" => "2-player variant"
],
CARD_DIP_OTTOMAN_INVASION => [
"class_name" => "DipOttomanInvasion",
"name" => "Ottoman Invasion",
"type" => DIPLOMACY_CARD,
"cp" => 0,
"remove" => "No",
"turn_added" => "Turn after SL",
"scenario" => "2-player variant"
],
CARD_DIP_SECRET_PROTESTANT_CIRCLE => [
"class_name" => "DipSecretProtestant",
"name" => "Secret Protestant Circle",
"type" => DIPLOMACY_CARD,
"cp" => 0,
"remove" => "No",
"turn_added" => "Turn after SL",
"scenario" => "2-player variant"
],
CARD_DIP_SIEGE_OF_VIENNA => [
"class_name" => "DipSiegeVienna",
"name" => "Siege of Vienna",
"type" => DIPLOMACY_CARD,
"cp" => 0,
"remove" => "No",
"turn_added" => "Turn after SL",
"scenario" => "2-player variant"
],
CARD_DIP_SPANISH_INQUISITION => [
"class_name" => "DipSpanishInquisition",
"name" => "Spanish Inquisition",
"type" => DIPLOMACY_CARD,
"cp" => 0,
"remove" => "No",
"turn_added" => "Turn after SL",
"scenario" => "2-player variant"
]
];