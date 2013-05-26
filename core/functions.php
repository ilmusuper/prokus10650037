<?php
function parserSide($feedURL) {
	$rss = simplexml_load_file($feedURL);
	echo "<ul class='newsSide'>";
	$i = 0;
	foreach ($rss->channel->item as $feedItem) {
		$i++;
		echo "<li><a href='$feedItem->link' title='$feedItem->title'>" . $feedItem->title . "</a></li>";
		if($i >= 5) break;
	}
	echo "</ul>";
}

function parser($feedURL) {
	$rss = simplexml_load_file($feedURL);
	echo "<ul class='news'>";
	$i = 0;
	foreach ($rss->channel->item as $feedItem) {
		$i++;
		$myDate = ($feedItem->pubDate);
		$dateForm = explode(" ", $myDate);
		echo "<li>
			<h2 class='news'><a href='$feedItem->link' title='$feedItem->title'>" . $feedItem->title . "</a></h2>
			<p class='desc'>" . $feedItem->description . "</p>
			<p class='date'>Posted on: " . $dateForm[1] . ". " . $dateForm[2] . ". " . $dateForm[3] . "." . "<a class='cont' href='$feedItem->link' title='$feedItem->title'>Continue Reading</a></p>
		</li>";
		if($i >= 5) break;
	}
	echo "</ul>";
}
?>
