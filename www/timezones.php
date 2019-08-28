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

<?php

if ($_GET['uName']) {
	$user_host = '192.168.2.13';
	$user_name = 'fvision';
	$user_user = 'webuser';
	$user_passwd = 'insecure_db_pw';
//mysql -h 192.168.2.13 -D fvision -u webuser -p

	$user_pdo_dsn = "mysql:host=$user_host;dbname=$user_name";

	$user_pdo = new PDO($user_pdo_dsn, $user_user, $user_passwd);
	$q = $user_pdo->query("SELECT * FROM users WHERE uname = '" . $_GET['uName'] . "';");
//	echo "<table><tr><th>User Name</th><th>From city</th><th>To city</th></tr>";
	$row = $q->fetch();
//	echo "<tr><td>" . $row["uname"] . "</td><td>" . $row["fromcity"] . "</td><td>" . $row["tocity"] . "</td></tr>";
	$from = $row["fromcity"];
	$to = $row["tocity"];
	echo "Welcome, " . $row["uname"];
}
echo "</table>";
?>

<h1>Time Zone</h1>

<?php
$db_host = '192.168.2.12';
$db_name = 'fvision';
$db_user = 'webuser';
$db_passwd = 'insecure_db_pw';
//mysql -h 192.168.2.12 -D fvision -u webuser -p
$db_pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

$db_pdo = new PDO($db_pdo_dsn, $db_user, $db_passwd);

if ($_GET['from']) {
	$from = $_GET['from'];
	$to = $_GET['to'];
	$hour = $_GET['hour'];
	$min = $_GET['min'];
}
?>

<form method="get">
    <input type="hidden" name="uName" value="<?php echo $_GET['uName'] ?>">
    <p>
        <label for="from">From</label>
        <select name="from" id="from">
            <option<?php if ($from === 'Abu Dhabi, Muscat') echo ' selected'; ?>>Abu Dhabi, Muscat</option>
            <option<?php if ($from === 'Adelaide') echo ' selected'; ?>>Adelaide</option>
            <option<?php if ($from === 'Alaska') echo ' selected'; ?>>Alaska</option>
            <option<?php if ($from === 'Almaty, Novosibirsk') echo ' selected'; ?>>Almaty, Novosibirsk</option>
            <option<?php if ($from === 'Amman') echo ' selected'; ?>>Amman</option>
            <option<?php if ($from === 'Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna') echo ' selected'; ?>>
                Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna
            </option>
            <option<?php if ($from === 'Arizona') echo ' selected'; ?>>Arizona</option>
            <option<?php if ($from === 'Astana, Dhaka') echo ' selected'; ?>>Astana, Dhaka</option>
            <option<?php if ($from === 'Athens, Bucharest, Istanbul') echo ' selected'; ?>>Athens, Bucharest, Istanbul
            </option>
            <option<?php if ($from === 'Atlantic Time (Canada)') echo ' selected'; ?>>Atlantic Time (Canada)</option>
            <option<?php if ($from === 'Auckland, Wellington') echo ' selected'; ?>>Auckland, Wellington</option>
            <option<?php if ($from === 'Azores') echo ' selected'; ?>>Azores</option>
            <option<?php if ($from === 'Baku') echo ' selected'; ?>>Baku</option>
            <option<?php if ($from === 'Bangkok, Hanoi, Jakarta') echo ' selected'; ?>>Bangkok, Hanoi, Jakarta</option>
            <option<?php if ($from === 'Beijing, Chongqing, Hong Kong, Urumqi') echo ' selected'; ?>>Beijing, Chongqing,
                Hong Kong, Urumqi
            </option>
            <option<?php if ($from === 'Beirut') echo ' selected'; ?>>Beirut</option>
            <option<?php if ($from === 'Belgrade, Bratislava, Budapest, Ljubljana, Prague') echo ' selected'; ?>>
                Belgrade, Bratislava, Budapest, Ljubljana, Prague
            </option>
            <option<?php if ($from === 'Bogota, Lima, Quito, Rio Branco') echo ' selected'; ?>>Bogota, Lima, Quito, Rio
                Branco
            </option>
            <option<?php if ($from === 'Brasilia') echo ' selected'; ?>>Brasilia</option>
            <option<?php if ($from === 'Brisbane') echo ' selected'; ?>>Brisbane</option>
            <option<?php if ($from === 'Brussels, Copenhagen, Madrid, Paris') echo ' selected'; ?>>Brussels, Copenhagen,
                Madrid, Paris
            </option>
            <option<?php if ($from === 'Buenos Aires, Georgetown') echo ' selected'; ?>>Buenos Aires, Georgetown
            </option>
            <option<?php if ($from === 'Cairo') echo ' selected'; ?>>Cairo</option>
            <option<?php if ($from === 'Canberra, Melbourne, Sydney') echo ' selected'; ?>>Canberra, Melbourne, Sydney
            </option>
            <option<?php if ($from === 'Cape Verde Is.') echo ' selected'; ?>>Cape Verde Is.</option>
            <option<?php if ($from === 'Caracas, La Paz') echo ' selected'; ?>>Caracas, La Paz</option>
            <option<?php if ($from === 'Casablanca, Monrovia, Reykjavik') echo ' selected'; ?>>Casablanca, Monrovia,
                Reykjavik
            </option>
            <option<?php if ($from === 'Central America') echo ' selected'; ?>>Central America</option>
            <option<?php if ($from === 'Central Time (US & Canada)') echo ' selected'; ?>>Central Time (US & Canada)
            </option>
            <option<?php if ($from === 'Chennai, Kolkata, Mumbai, New Delhi') echo ' selected'; ?>>Chennai, Kolkata,
                Mumbai, New Delhi
            </option>
            <option<?php if ($from === 'Chihuahua, La Paz, Mazatlan') echo ' selected'; ?>>Chihuahua, La Paz, Mazatlan
            </option>
            <option<?php if ($from === 'Darwin') echo ' selected'; ?>>Darwin</option>
            <option<?php if ($from === 'Eastern Time (US & Canada)') echo ' selected'; ?>>Eastern Time (US & Canada)
            </option>
            <option<?php if ($from === 'Fiji, Kamchatka, Marshall Is.') echo ' selected'; ?>>Fiji, Kamchatka, Marshall
                Is.
            </option>
            <option<?php if ($from === 'GMT: Dublin, Edinburgh, Lisbon, London') echo ' selected'; ?>>GMT: Dublin,
                Edinburgh, Lisbon, London
            </option>
            <option<?php if ($from === 'Greenland') echo ' selected'; ?>>Greenland</option>
            <option<?php if ($from === 'Guadalajara, Mexico City, Monterrey') echo ' selected'; ?>>Guadalajara, Mexico
                City, Monterrey
            </option>
            <option<?php if ($from === 'Guam, Port Moresby') echo ' selected'; ?>>Guam, Port Moresby</option>
            <option<?php if ($from === 'Harare, Pretoria') echo ' selected'; ?>>Harare, Pretoria</option>
            <option<?php if ($from === 'Hawaii') echo ' selected'; ?>>Hawaii</option>
            <option<?php if ($from === 'Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius') echo ' selected'; ?>>Helsinki,
                Kyiv, Riga, Sofia, Tallinn, Vilnius
            </option>
            <option<?php if ($from === 'Hobart') echo ' selected'; ?>>Hobart</option>
            <option<?php if ($from === 'Indiana (East)') echo ' selected'; ?>>Indiana (East)</option>
            <option<?php if ($from === 'International Date Line West') echo ' selected'; ?>>International Date Line
                West
            </option>
            <option<?php if ($from === 'Irkutsk, Ulaan Bataar') echo ' selected'; ?>>Irkutsk, Ulaan Bataar</option>
            <option<?php if ($from === 'Islamabad, Karachi, Tashkent') echo ' selected'; ?>>Islamabad, Karachi,
                Tashkent
            </option>
            <option<?php if ($from === 'Jerusalem') echo ' selected'; ?>>Jerusalem</option>
            <option<?php if ($from === 'Kabul') echo ' selected'; ?>>Kabul</option>
            <option<?php if ($from === 'Kathmandu') echo ' selected'; ?>>Kathmandu</option>
            <option<?php if ($from === 'Krasnoyarsk') echo ' selected'; ?>>Krasnoyarsk</option>
            <option<?php if ($from === 'Kuala Lumpur, Singapore') echo ' selected'; ?>>Kuala Lumpur, Singapore</option>
            <option<?php if ($from === 'Kuwait, Riyadh, Baghdad') echo ' selected'; ?>>Kuwait, Riyadh, Baghdad</option>
            <option<?php if ($from === 'Magadan, Solomon Is., New Caledonia') echo ' selected'; ?>>Magadan, Solomon Is.,
                New Caledonia
            </option>
            <option<?php if ($from === 'Manaus') echo ' selected'; ?>>Manaus</option>
            <option<?php if ($from === 'Mid-Atlantic') echo ' selected'; ?>>Mid-Atlantic</option>
            <option<?php if ($from === 'Midway Island, Samoa') echo ' selected'; ?>>Midway Island, Samoa</option>
            <option<?php if ($from === 'Minsk') echo ' selected'; ?>>Minsk</option>
            <option<?php if ($from === 'Montevideo') echo ' selected'; ?>>Montevideo</option>
            <option<?php if ($from === 'Moscow, St. Petersburg, Volgograd') echo ' selected'; ?>>Moscow, St. Petersburg,
                Volgograd
            </option>
            <option<?php if ($from === 'Mountain Time (US & Canada)') echo ' selected'; ?>>Mountain Time (US & Canada)
            </option>
            <option<?php if ($from === 'Nairobi') echo ' selected'; ?>>Nairobi</option>
            <option<?php if ($from === 'Newfoundland') echo ' selected'; ?>>Newfoundland</option>
            <option<?php if ($from === 'Osaka, Sapporo, Tokyo') echo ' selected'; ?>>Osaka, Sapporo, Tokyo</option>
            <option<?php if ($from === 'Pacific Time (US & Canada)') echo ' selected'; ?>>Pacific Time (US & Canada)
            </option>
            <option<?php if ($from === 'Perth') echo ' selected'; ?>>Perth</option>
            <option<?php if ($from === 'Santiago') echo ' selected'; ?>>Santiago</option>
            <option<?php if ($from === 'Sarajevo, Skopje, Warsaw, Zagreb') echo ' selected'; ?>>Sarajevo, Skopje,
                Warsaw,
                Zagreb
            </option>
            <option<?php if ($from === 'Saskatchewan') echo ' selected'; ?>>Saskatchewan</option>
            <option<?php if ($from === 'Seoul') echo ' selected'; ?>>Seoul</option>
            <option<?php if ($from === 'Sri Jayawardenapura') echo ' selected'; ?>>Sri Jayawardenapura</option>
            <option<?php if ($from === 'Taipei') echo ' selected'; ?>>Taipei</option>
            <option<?php if ($from === 'Tbilisi') echo ' selected'; ?>>Tbilisi</option>
            <option<?php if ($from === 'Tehran') echo ' selected'; ?>>Tehran</option>
            <option<?php if ($from === 'Tijuana, Baja California') echo ' selected'; ?>>Tijuana, Baja California
            </option>
            <option<?php if ($from === 'Vladivostok') echo ' selected'; ?>>Vladivostok</option>
            <option<?php if ($from === 'West Central Africa') echo ' selected'; ?>>West Central Africa</option>
            <option<?php if ($from === 'Windhoek') echo ' selected'; ?>>Windhoek</option>
            <option<?php if ($from === 'Yakutsk') echo ' selected'; ?>>Yakutsk</option>
            <option<?php if ($from === 'Yangon (Rangoon)') echo ' selected'; ?>>Yangon (Rangoon)</option>
            <option<?php if ($from === 'Yekaterinburg') echo ' selected'; ?>>Yekaterinburg</option>
            <option<?php if ($from === 'Yerevan') echo ' selected'; ?>>Yerevan</option>
        </select>
    </p>
    <p>
        <label for="to">To&nbsp&nbsp&nbsp&nbsp</label>
        <select name="to" id="to">
            <option<?php if ($to === 'Abu Dhabi, Muscat') echo ' selected'; ?>>Abu Dhabi, Muscat</option>
            <option<?php if ($to === 'Adelaide') echo ' selected'; ?>>Adelaide</option>
            <option<?php if ($to === 'Alaska') echo ' selected'; ?>>Alaska</option>
            <option<?php if ($to === 'Almaty, Novosibirsk') echo ' selected'; ?>>Almaty, Novosibirsk</option>
            <option<?php if ($to === 'Amman') echo ' selected'; ?>>Amman</option>
            <option<?php if ($to === 'Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna') echo ' selected'; ?>>
                Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna
            </option>
            <option<?php if ($to === 'Arizona') echo ' selected'; ?>>Arizona</option>
            <option<?php if ($to === 'Astana, Dhaka') echo ' selected'; ?>>Astana, Dhaka</option>
            <option<?php if ($to === 'Athens, Bucharest, Istanbul') echo ' selected'; ?>>Athens, Bucharest, Istanbul
            </option>
            <option<?php if ($to === 'Atlantic Time (Canada)') echo ' selected'; ?>>Atlantic Time (Canada)</option>
            <option<?php if ($to === 'Auckland, Wellington') echo ' selected'; ?>>Auckland, Wellington</option>
            <option<?php if ($to === 'Azores') echo ' selected'; ?>>Azores</option>
            <option<?php if ($to === 'Baku') echo ' selected'; ?>>Baku</option>
            <option<?php if ($to === 'Bangkok, Hanoi, Jakarta') echo ' selected'; ?>>Bangkok, Hanoi, Jakarta</option>
            <option<?php if ($to === 'Beijing, Chongqing, Hong Kong, Urumqi') echo ' selected'; ?>>Beijing, Chongqing,
                Hong Kong, Urumqi
            </option>
            <option<?php if ($to === 'Beirut') echo ' selected'; ?>>Beirut</option>
            <option<?php if ($to === 'Belgrade, Bratislava, Budapest, Ljubljana, Prague') echo ' selected'; ?>>
                Belgrade, Bratislava, Budapest, Ljubljana, Prague
            </option>
            <option<?php if ($to === 'Bogota, Lima, Quito, Rio Branco') echo ' selected'; ?>>Bogota, Lima, Quito, Rio
                Branco
            </option>
            <option<?php if ($to === 'Brasilia') echo ' selected'; ?>>Brasilia</option>
            <option<?php if ($to === 'Brisbane') echo ' selected'; ?>>Brisbane</option>
            <option<?php if ($to === 'Brussels, Copenhagen, Madrid, Paris') echo ' selected'; ?>>Brussels, Copenhagen,
                Madrid, Paris
            </option>
            <option<?php if ($to === 'Buenos Aires, Georgetown') echo ' selected'; ?>>Buenos Aires, Georgetown
            </option>
            <option<?php if ($to === 'Cairo') echo ' selected'; ?>>Cairo</option>
            <option<?php if ($to === 'Canberra, Melbourne, Sydney') echo ' selected'; ?>>Canberra, Melbourne, Sydney
            </option>
            <option<?php if ($to === 'Cape Verde Is.') echo ' selected'; ?>>Cape Verde Is.</option>
            <option<?php if ($to === 'Caracas, La Paz') echo ' selected'; ?>>Caracas, La Paz</option>
            <option<?php if ($to === 'Casablanca, Monrovia, Reykjavik') echo ' selected'; ?>>Casablanca, Monrovia,
                Reykjavik
            </option>
            <option<?php if ($to === 'Central America') echo ' selected'; ?>>Central America</option>
            <option<?php if ($to === 'Central Time (US & Canada)') echo ' selected'; ?>>Central Time (US & Canada)
            </option>
            <option<?php if ($to === 'Chennai, Kolkata, Mumbai, New Delhi') echo ' selected'; ?>>Chennai, Kolkata,
                Mumbai, New Delhi
            </option>
            <option<?php if ($to === 'Chihuahua, La Paz, Mazatlan') echo ' selected'; ?>>Chihuahua, La Paz, Mazatlan
            </option>
            <option<?php if ($to === 'Darwin') echo ' selected'; ?>>Darwin</option>
            <option<?php if ($to === 'Eastern Time (US & Canada)') echo ' selected'; ?>>Eastern Time (US & Canada)
            </option>
            <option<?php if ($to === 'Fiji, Kamchatka, Marshall Is.') echo ' selected'; ?>>Fiji, Kamchatka, Marshall
                Is.
            </option>
            <option<?php if ($to === 'GMT: Dublin, Edinburgh, Lisbon, London') echo ' selected'; ?>>GMT: Dublin,
                Edinburgh, Lisbon, London
            </option>
            <option<?php if ($to === 'Greenland') echo ' selected'; ?>>Greenland</option>
            <option<?php if ($to === 'Guadalajara, Mexico City, Monterrey') echo ' selected'; ?>>Guadalajara, Mexico
                City, Monterrey
            </option>
            <option<?php if ($to === 'Guam, Port Moresby') echo ' selected'; ?>>Guam, Port Moresby</option>
            <option<?php if ($to === 'Harare, Pretoria') echo ' selected'; ?>>Harare, Pretoria</option>
            <option<?php if ($to === 'Hawaii') echo ' selected'; ?>>Hawaii</option>
            <option<?php if ($to === 'Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius') echo ' selected'; ?>>Helsinki,
                Kyiv, Riga, Sofia, Tallinn, Vilnius
            </option>
            <option<?php if ($to === 'Hobart') echo ' selected'; ?>>Hobart</option>
            <option<?php if ($to === 'Indiana (East)') echo ' selected'; ?>>Indiana (East)</option>
            <option<?php if ($to === 'International Date Line West') echo ' selected'; ?>>International Date Line
                West
            </option>
            <option<?php if ($to === 'Irkutsk, Ulaan Bataar') echo ' selected'; ?>>Irkutsk, Ulaan Bataar</option>
            <option<?php if ($to === 'Islamabad, Karachi, Tashkent') echo ' selected'; ?>>Islamabad, Karachi,
                Tashkent
            </option>
            <option<?php if ($to === 'Jerusalem') echo ' selected'; ?>>Jerusalem</option>
            <option<?php if ($to === 'Kabul') echo ' selected'; ?>>Kabul</option>
            <option<?php if ($to === 'Kathmandu') echo ' selected'; ?>>Kathmandu</option>
            <option<?php if ($to === 'Krasnoyarsk') echo ' selected'; ?>>Krasnoyarsk</option>
            <option<?php if ($to === 'Kuala Lumpur, Singapore') echo ' selected'; ?>>Kuala Lumpur, Singapore</option>
            <option<?php if ($to === 'Kuwait, Riyadh, Baghdad') echo ' selected'; ?>>Kuwait, Riyadh, Baghdad</option>
            <option<?php if ($to === 'Magadan, Solomon Is., New Caledonia') echo ' selected'; ?>>Magadan, Solomon Is.,
                New Caledonia
            </option>
            <option<?php if ($to === 'Manaus') echo ' selected'; ?>>Manaus</option>
            <option<?php if ($to === 'Mid-Atlantic') echo ' selected'; ?>>Mid-Atlantic</option>
            <option<?php if ($to === 'Midway Island, Samoa') echo ' selected'; ?>>Midway Island, Samoa</option>
            <option<?php if ($to === 'Minsk') echo ' selected'; ?>>Minsk</option>
            <option<?php if ($to === 'Montevideo') echo ' selected'; ?>>Montevideo</option>
            <option<?php if ($to === 'Moscow, St. Petersburg, Volgograd') echo ' selected'; ?>>Moscow, St. Petersburg,
                Volgograd
            </option>
            <option<?php if ($to === 'Mountain Time (US & Canada)') echo ' selected'; ?>>Mountain Time (US & Canada)
            </option>
            <option<?php if ($to === 'Nairobi') echo ' selected'; ?>>Nairobi</option>
            <option<?php if ($to === 'Newfoundland') echo ' selected'; ?>>Newfoundland</option>
            <option<?php if ($to === 'Osaka, Sapporo, Tokyo') echo ' selected'; ?>>Osaka, Sapporo, Tokyo</option>
            <option<?php if ($to === 'Pacific Time (US & Canada)') echo ' selected'; ?>>Pacific Time (US & Canada)
            </option>
            <option<?php if ($to === 'Perth') echo ' selected'; ?>>Perth</option>
            <option<?php if ($to === 'Santiago') echo ' selected'; ?>>Santiago</option>
            <option<?php if ($to === 'Sarajevo, Skopje, Warsaw, Zagreb') echo ' selected'; ?>>Sarajevo, Skopje,
                Warsaw,
                Zagreb
            </option>
            <option<?php if ($to === 'Saskatchewan') echo ' selected'; ?>>Saskatchewan</option>
            <option<?php if ($to === 'Seoul') echo ' selected'; ?>>Seoul</option>
            <option<?php if ($to === 'Sri Jayawardenapura') echo ' selected'; ?>>Sri Jayawardenapura</option>
            <option<?php if ($to === 'Taipei') echo ' selected'; ?>>Taipei</option>
            <option<?php if ($to === 'Tbilisi') echo ' selected'; ?>>Tbilisi</option>
            <option<?php if ($to === 'Tehran') echo ' selected'; ?>>Tehran</option>
            <option<?php if ($to === 'Tijuana, Baja California') echo ' selected'; ?>>Tijuana, Baja California
            </option>
            <option<?php if ($to === 'Vladivostok') echo ' selected'; ?>>Vladivostok</option>
            <option<?php if ($to === 'West Central Africa') echo ' selected'; ?>>West Central Africa</option>
            <option<?php if ($to === 'Windhoek') echo ' selected'; ?>>Windhoek</option>
            <option<?php if ($to === 'Yakutsk') echo ' selected'; ?>>Yakutsk</option>
            <option<?php if ($to === 'Yangon (Rangoon)') echo ' selected'; ?>>Yangon (Rangoon)</option>
            <option<?php if ($to === 'Yekaterinburg') echo ' selected'; ?>>Yekaterinburg</option>
            <option<?php if ($to === 'Yerevan') echo ' selected'; ?>>Yerevan</option>
        </select>
    </p>
    <p>
        <label for="">Time</label>
        <select name="hour" id="hour">
            <option<?php if ($hour === '00') echo ' selected'; ?>>00</option>
            <option<?php if ($hour === '01') echo ' selected'; ?>>01</option>
            <option<?php if ($hour === '02') echo ' selected'; ?>>02</option>
            <option<?php if ($hour === '03') echo ' selected'; ?>>03</option>
            <option<?php if ($hour === '04') echo ' selected'; ?>>04</option>
            <option<?php if ($hour === '05') echo ' selected'; ?>>05</option>
            <option<?php if ($hour === '06') echo ' selected'; ?>>06</option>
            <option<?php if ($hour === '07') echo ' selected'; ?>>07</option>
            <option<?php if ($hour === '08') echo ' selected'; ?>>08</option>
            <option<?php if ($hour === '09') echo ' selected'; ?>>09</option>
            <option<?php if ($hour === '10') echo ' selected'; ?>>10</option>
            <option<?php if ($hour === '11') echo ' selected'; ?>>11</option>
            <option<?php if ($hour === '12') echo ' selected'; ?>>12</option>
            <option<?php if ($hour === '13') echo ' selected'; ?>>13</option>
            <option<?php if ($hour === '14') echo ' selected'; ?>>14</option>
            <option<?php if ($hour === '15') echo ' selected'; ?>>15</option>
            <option<?php if ($hour === '16') echo ' selected'; ?>>16</option>
            <option<?php if ($hour === '17') echo ' selected'; ?>>17</option>
            <option<?php if ($hour === '18') echo ' selected'; ?>>18</option>
            <option<?php if ($hour === '19') echo ' selected'; ?>>19</option>
            <option<?php if ($hour === '20') echo ' selected'; ?>>20</option>
            <option<?php if ($hour === '21') echo ' selected'; ?>>21</option>
            <option<?php if ($hour === '22') echo ' selected'; ?>>22</option>
            <option<?php if ($hour === '23') echo ' selected'; ?>>23</option>
        </select>&nbsp:
        <select name="min" id="min">
            <option<?php if ($min === '00') echo ' selected'; ?>>00</option>
            <option<?php if ($min === '01') echo ' selected'; ?>>01</option>
            <option<?php if ($min === '02') echo ' selected'; ?>>02</option>
            <option<?php if ($min === '03') echo ' selected'; ?>>03</option>
            <option<?php if ($min === '04') echo ' selected'; ?>>04</option>
            <option<?php if ($min === '05') echo ' selected'; ?>>05</option>
            <option<?php if ($min === '06') echo ' selected'; ?>>06</option>
            <option<?php if ($min === '07') echo ' selected'; ?>>07</option>
            <option<?php if ($min === '08') echo ' selected'; ?>>08</option>
            <option<?php if ($min === '09') echo ' selected'; ?>>09</option>
            <option<?php if ($min === '10') echo ' selected'; ?>>10</option>
            <option<?php if ($min === '11') echo ' selected'; ?>>11</option>
            <option<?php if ($min === '12') echo ' selected'; ?>>12</option>
            <option<?php if ($min === '13') echo ' selected'; ?>>13</option>
            <option<?php if ($min === '14') echo ' selected'; ?>>14</option>
            <option<?php if ($min === '15') echo ' selected'; ?>>15</option>
            <option<?php if ($min === '16') echo ' selected'; ?>>16</option>
            <option<?php if ($min === '17') echo ' selected'; ?>>17</option>
            <option<?php if ($min === '18') echo ' selected'; ?>>18</option>
            <option<?php if ($min === '19') echo ' selected'; ?>>19</option>
            <option<?php if ($min === '20') echo ' selected'; ?>>20</option>
            <option<?php if ($min === '21') echo ' selected'; ?>>21</option>
            <option<?php if ($min === '22') echo ' selected'; ?>>22</option>
            <option<?php if ($min === '23') echo ' selected'; ?>>23</option>
            <option<?php if ($min === '24') echo ' selected'; ?>>24</option>
            <option<?php if ($min === '25') echo ' selected'; ?>>25</option>
            <option<?php if ($min === '26') echo ' selected'; ?>>26</option>
            <option<?php if ($min === '27') echo ' selected'; ?>>27</option>
            <option<?php if ($min === '28') echo ' selected'; ?>>28</option>
            <option<?php if ($min === '29') echo ' selected'; ?>>29</option>
            <option<?php if ($min === '30') echo ' selected'; ?>>30</option>
            <option<?php if ($min === '31') echo ' selected'; ?>>31</option>
            <option<?php if ($min === '32') echo ' selected'; ?>>32</option>
            <option<?php if ($min === '33') echo ' selected'; ?>>33</option>
            <option<?php if ($min === '34') echo ' selected'; ?>>34</option>
            <option<?php if ($min === '35') echo ' selected'; ?>>35</option>
            <option<?php if ($min === '36') echo ' selected'; ?>>36</option>
            <option<?php if ($min === '37') echo ' selected'; ?>>37</option>
            <option<?php if ($min === '38') echo ' selected'; ?>>38</option>
            <option<?php if ($min === '39') echo ' selected'; ?>>39</option>
            <option<?php if ($min === '40') echo ' selected'; ?>>40</option>
            <option<?php if ($min === '41') echo ' selected'; ?>>41</option>
            <option<?php if ($min === '42') echo ' selected'; ?>>42</option>
            <option<?php if ($min === '43') echo ' selected'; ?>>43</option>
            <option<?php if ($min === '44') echo ' selected'; ?>>44</option>
            <option<?php if ($min === '45') echo ' selected'; ?>>45</option>
            <option<?php if ($min === '46') echo ' selected'; ?>>46</option>
            <option<?php if ($min === '47') echo ' selected'; ?>>47</option>
            <option<?php if ($min === '48') echo ' selected'; ?>>48</option>
            <option<?php if ($min === '49') echo ' selected'; ?>>49</option>
            <option<?php if ($min === '50') echo ' selected'; ?>>50</option>
            <option<?php if ($min === '51') echo ' selected'; ?>>51</option>
            <option<?php if ($min === '52') echo ' selected'; ?>>52</option>
            <option<?php if ($min === '53') echo ' selected'; ?>>53</option>
            <option<?php if ($min === '54') echo ' selected'; ?>>54</option>
            <option<?php if ($min === '55') echo ' selected'; ?>>55</option>
            <option<?php if ($min === '56') echo ' selected'; ?>>56</option>
            <option<?php if ($min === '57') echo ' selected'; ?>>57</option>
            <option<?php if ($min === '58') echo ' selected'; ?>>58</option>
            <option<?php if ($min === '59') echo ' selected'; ?>>59</option>
        </select>
    </p>
    <p>
        <button>Enter</button>
    </p>
</form>

<?php
if ($_GET['from']) {
	$toH = $db_pdo->query("SELECT hour FROM zone WHERE city = '$to'")->fetch()[0];
	$fromH = $db_pdo->query("SELECT hour FROM zone WHERE city = '$from'")->fetch()[0];
	$toM = $db_pdo->query("SELECT minute FROM zone WHERE city = '$to'")->fetch()[0];
	$fromM = $db_pdo->query("SELECT minute FROM zone WHERE city = '$from'")->fetch()[0];
	echo "<p>" . $from . " UTC";
	if ($fromH > 0) echo "+";
	echo $fromH . ":" . $fromM;
	if ($fromM === '0') echo "0";
	echo "</p><p>Time: " . $hour . ":" . $min . "</p>";

	echo "<p>" . $to . " UTC";
	if ($toH >= 0) echo "+";
	echo $toH . ":" . $toM;
	if ($toM === '0') echo "0";
	$to = mktime($toH, $toM, 0);
	$from = mktime($fromH, $fromM, 0);
	$time = mktime($hour, $min, 0);
	echo "<p>Time: " . date('H:i', mktime($toH, $toM, 0) - mktime($fromH, $fromM, 0)
			+ mktime($hour, $min, 0)) . "</p>";
}
?>

<p>Showing All Time Zones:</p>
<table border="1">
    <tr>
        <th>City</th>
        <th>Hour</th>
        <th>Minute</th>
    </tr>
	<?php
	$q = $db_pdo->query("SELECT * FROM zone");

	while ($row = $q->fetch()) {
		echo "<tr><td>" . $row["city"] . "</td><td>" . $row["hour"] . "</td><td>" . $row["minute"] . "</td></tr>\n";
	}
	?>
</table>
</body>
</html>
