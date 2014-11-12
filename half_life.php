<?php

$i = 1; // Counter, only needed as a safety net for runaway loops

$half_life = 4; // Expressed in hours

// Need 5.5 Days to fully expire a half life from the body
// if you are on a daily intake

// This array will contain the half lives in hours as they pass.
// Seed it with the half_life variable or it will not be summed.
$hours_remaining = array($half_life);

while ($i <= 1000) { // Just in case something goes wrong, stop at 1000 iterations
	$i++; // Bump the counter

	$half_life         = $half_life / 2;
	$hours_remaining[] = $half_life;

	if ($half_life <= 0.0167) {
		// We are down to one minute or less in time
		// It is accurate enough to add the values now
		// and have a final time
		print_r($hours_remaining);
		echo 'Initial half life of: ' . $hours_remaining[0] . ' hours decays to a cumulative ' . array_sum($hours_remaining) . ' hours. ';
		echo 'At this point, no initial substance remains for a precision of hours.  Precision of molecules obviously has much more to go.';

		die("\n");
	}
}

?>