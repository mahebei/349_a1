<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head><title>Time Zone Converter</title>
    <style>
        th {
            text-align: left;
        }

        table, th, td {
            border: 2px solid grey;
            border-collapse: collapse;
        }

        th, td {
            padding: 0.2em;
        }
    </style>
</head>
<body>
<h1>Time Zone</h1>
<p>
    <label for="from">From</label>
    <select id="from">
        <option>Abu Dhabi, Muscat</option>
        <option>Adelaide</option>
        <option>Alaska</option>
        <option>Almaty, Novosibirsk</option>
        <option>Amman</option>
        <option>Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
        <option>Arizona</option>
        <option>Astana, Dhaka</option>
        <option>Athens, Bucharest, Istanbul</option>
        <option>Atlantic Time (Canada)</option>
        <option>Auckland, Wellington</option>
        <option>Azores</option>
        <option>Baku</option>
        <option>Bangkok, Hanoi, Jakarta</option>
        <option>Beijing, Chongqing, Hong Kong, Urumqi</option>
        <option>Beirut</option>
        <option>Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
        <option>Bogota, Lima, Quito, Rio Branco</option>
        <option>Brasilia</option>
        <option>Brisbane</option>
        <option>Brussels, Copenhagen, Madrid, Paris</option>
        <option>Buenos Aires, Georgetown</option>
        <option>Cairo</option>
        <option>Canberra, Melbourne, Sydney</option>
        <option>Cape Verde Is.</option>
        <option>Caracas, La Paz</option>
        <option>Casablanca, Monrovia, Reykjavik</option>
        <option>Central America</option>
        <option>Central Time (US & Canada)</option>
        <option>Chennai, Kolkata, Mumbai, New Delhi</option>
        <option>Chihuahua, La Paz, Mazatlan</option>
        <option>Darwin</option>
        <option>Eastern Time (US & Canada)</option>
        <option>Fiji, Kamchatka, Marshall Is.</option>
        <option>GMT: Dublin, Edinburgh, Lisbon, London</option>
        <option>Greenland</option>
        <option>Guadalajara, Mexico City, Monterrey</option>
        <option>Guam, Port Moresby</option>
        <option>Harare, Pretoria</option>
        <option>Hawaii</option>
        <option>Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
        <option>Hobart</option>
        <option>Indiana (East)</option>
        <option>International Date Line West</option>
        <option>Irkutsk, Ulaan Bataar</option>
        <option>Islamabad, Karachi, Tashkent</option>
        <option>Jerusalem</option>
        <option>Kabul</option>
        <option>Kathmandu</option>
        <option>Krasnoyarsk</option>
        <option>Kuala Lumpur, Singapore</option>
        <option>Kuwait, Riyadh, Baghdad</option>
        <option>Magadan, Solomon Is., New Caledonia</option>
        <option>Manaus</option>
        <option>Mid-Atlantic</option>
        <option>Midway Island, Samoa</option>
        <option>Minsk</option>
        <option>Montevideo</option>
        <option>Moscow, St. Petersburg, Volgograd</option>
        <option>Mountain Time (US & Canada)</option>
        <option>Nairobi</option>
        <option>Newfoundland</option>
        <option>Nuku'alofa</option>
        <option>Osaka, Sapporo, Tokyo</option>
        <option>Pacific Time (US & Canada)</option>
        <option>Perth</option>
        <option>Santiago</option>
        <option>Sarajevo, Skopje, Warsaw, Zagreb</option>
        <option>Saskatchewan</option>
        <option>Seoul</option>
        <option>Sri Jayawardenapura</option>
        <option>Taipei</option>
        <option>Tbilisi</option>
        <option>Tehran</option>
        <option>Tijuana, Baja California</option>
        <option>Vladivostok</option>
        <option>West Central Africa</option>
        <option>Windhoek</option>
        <option>Yakutsk</option>
        <option>Yangon (Rangoon)</option>
        <option>Yekaterinburg</option>
        <option>Yerevan</option>
    </select>
</p>
<p><label for="to">To&nbsp&nbsp&nbsp&nbsp</label>
    <select id="to">
        <option>Abu Dhabi, Muscat</option>
        <option>Adelaide</option>
        <option>Alaska</option>
        <option>Almaty, Novosibirsk</option>
        <option>Amman</option>
        <option>Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
        <option>Arizona</option>
        <option>Astana, Dhaka</option>
        <option>Athens, Bucharest, Istanbul</option>
        <option>Atlantic Time (Canada)</option>
        <option>Auckland, Wellington</option>
        <option>Azores</option>
        <option>Baku</option>
        <option>Bangkok, Hanoi, Jakarta</option>
        <option>Beijing, Chongqing, Hong Kong, Urumqi</option>
        <option>Beirut</option>
        <option>Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
        <option>Bogota, Lima, Quito, Rio Branco</option>
        <option>Brasilia</option>
        <option>Brisbane</option>
        <option>Brussels, Copenhagen, Madrid, Paris</option>
        <option>Buenos Aires, Georgetown</option>
        <option>Cairo</option>
        <option>Canberra, Melbourne, Sydney</option>
        <option>Cape Verde Is.</option>
        <option>Caracas, La Paz</option>
        <option>Casablanca, Monrovia, Reykjavik</option>
        <option>Central America</option>
        <option>Central Time (US & Canada)</option>
        <option>Chennai, Kolkata, Mumbai, New Delhi</option>
        <option>Chihuahua, La Paz, Mazatlan</option>
        <option>Darwin</option>
        <option>Eastern Time (US & Canada)</option>
        <option>Fiji, Kamchatka, Marshall Is.</option>
        <option>GMT: Dublin, Edinburgh, Lisbon, London</option>
        <option>Greenland</option>
        <option>Guadalajara, Mexico City, Monterrey</option>
        <option>Guam, Port Moresby</option>
        <option>Harare, Pretoria</option>
        <option>Hawaii</option>
        <option>Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
        <option>Hobart</option>
        <option>Indiana (East)</option>
        <option>International Date Line West</option>
        <option>Irkutsk, Ulaan Bataar</option>
        <option>Islamabad, Karachi, Tashkent</option>
        <option>Jerusalem</option>
        <option>Kabul</option>
        <option>Kathmandu</option>
        <option>Krasnoyarsk</option>
        <option>Kuala Lumpur, Singapore</option>
        <option>Kuwait, Riyadh, Baghdad</option>
        <option>Magadan, Solomon Is., New Caledonia</option>
        <option>Manaus</option>
        <option>Mid-Atlantic</option>
        <option>Midway Island, Samoa</option>
        <option>Minsk</option>
        <option>Montevideo</option>
        <option>Moscow, St. Petersburg, Volgograd</option>
        <option>Mountain Time (US & Canada)</option>
        <option>Nairobi</option>
        <option>Newfoundland</option>
        <option>Nuku'alofa</option>
        <option>Osaka, Sapporo, Tokyo</option>
        <option>Pacific Time (US & Canada)</option>
        <option>Perth</option>
        <option>Santiago</option>
        <option>Sarajevo, Skopje, Warsaw, Zagreb</option>
        <option>Saskatchewan</option>
        <option>Seoul</option>
        <option>Sri Jayawardenapura</option>
        <option>Taipei</option>
        <option>Tbilisi</option>
        <option>Tehran</option>
        <option>Tijuana, Baja California</option>
        <option>Vladivostok</option>
        <option>West Central Africa</option>
        <option>Windhoek</option>
        <option>Yakutsk</option>
        <option>Yangon (Rangoon)</option>
        <option>Yekaterinburg</option>
        <option>Yerevan</option>
    </select>
</p>
<p>Showing All Time Zones:</p>
<table border="1">
    <tr>
        <th>City</th>
        <th>Time Zone</th>
    </tr>
	<?php
	$db_host = '192.168.2.12';
	$db_name = 'fvision';
	$db_user = 'webuser';
	$db_passwd = 'insecure_db_pw';

	$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

	$pdo = new PDO($pdo_dsn, $db_user, $db_passwd);

	$q = $pdo->query("SELECT * FROM timezones");

	while ($row = $q->fetch()) {
		echo "<tr><td>" . $row["city"] . "</td><td>" . $row["timezone"] . "</td></tr>\n";
	}
	?>
</table>
<p>Users</p>
<table border="1">
    <tr>
        <th>User Name</th>
    </tr>
	<?php
	$db_host = '192.168.2.13';
	$db_name = 'fvision';
	$db_user = 'webuser';
	$db_passwd = 'insecure_db_pw';

	$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

	$pdo = new PDO($pdo_dsn, $db_user, $db_passwd);

	$q = $pdo->query("SELECT * FROM users");

	while ($row = $q->fetch()) {
		echo "<tr><td>" . $row["uname"] . "</td></tr>";
	}
	?>
</table>
</body>
</html>
