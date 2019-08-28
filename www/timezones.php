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

<!--    <p>-->
<!--        <label for="test">test</label>-->
<!--        <select name="test" id="test">-->
<!---->
<!--        </select>-->
<!--    </p>-->
    <input type="hidden" name="uName" value="<?php echo $_GET['uName'] ?>">
    <p>
        <label for="from">From</label>
        <select name="from" id="from">
			<?php
			$qCities = $db_pdo->query("SELECT * FROM zone");
			while ($row = $qCities->fetch()) {
				echo "<option";
				if ($from === $row["city"]) echo ' selected';
				echo ">" . $row["city"] . "</option>";
			}
			?>
        </select>
    </p>
    <p>
        <label for="to">To&nbsp&nbsp&nbsp&nbsp</label>
        <select name="to" id="to">
			<?php
			$qCities = $db_pdo->query("SELECT * FROM zone");
			while ($row = $qCities->fetch()) {
				echo "<option";
				if ($to === $row["city"]) echo ' selected';
				echo ">" . $row["city"] . "</option>";
			}
			?>
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
	$qCities = $db_pdo->query("SELECT * FROM zone");

	while ($row = $qCities->fetch()) {
		echo "<tr><td>" . $row["city"] . "</td><td>" . $row["hour"] . "</td><td>" . $row["minute"] . "</td></tr>\n";
	}
	?>
</table>
</body>
</html>
