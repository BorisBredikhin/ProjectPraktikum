<?php
include_once "../../config.php";
$path = ROOT_DIR . "/admin/data/users/";
$users = scandir($path);

$maxRating=0;
$ratingByNames = [];

for ($i=2;$i<count($users);$i++){
	$user = json_decode(file_get_contents($path.$users[$i]));
	//var_dump($user);
	$ratingByNames[$user->{"lastName"}." ".$user->{"firstName"}] = $user->{"points"};
	$maxRating = ($maxRating>$user->{"points"})?$maxRating:$user->{"points"};
}

$ratingByPoints = [];

foreach ($ratingByNames as $name => $rating) {
	if (!isset($ratingByPoints[$rating]))
		$ratingByPoints[$rating] = array($name);
	else
		array_push($ratingByPoints, $name);
}
?>
<table class="rating">
	<thead>
	<tr>
		<td>Позиция</td>
		<td>Имя</td>
		<td>Очки</td>
	</tr>
	</thead>
	<tbody>
	<?php
		$i=1;
		for ($userRating = $maxRating; $userRating>=0;$userRating--)
			if (isset($ratingByPoints[$userRating]))
				foreach ($ratingByPoints[$userRating] as $key => $point) {
					?>
					<tr>
						<td><?=$i?></td>
						<td><?=$point?></td>
						<td><?=$userRating?></td>
					</tr>
					<?php
					$i++;
				}
	?>
	</tbody>
</table>
