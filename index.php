		<?php
		$letters = array('a','b','c','d','e','f','g','h','i','j','k');

		$replace = array('1','2','3','4','5','6','7','8');

		$text = "kevin howbrook" ;

		$new_array = explode(' ', $text);


		foreach ($new_array as $string)
		{

		  $nums = str_split($string);

		  foreach ($nums as &$num)
		  {
		    $num = str_replace($letters, $replace, $num);
		  }

		  $sum_array[] = array_sum($nums);

		}
		if (in_array("1", $sum_array)) {
		    echo "has a";
		}
		echo "<br>";

		if (in_array("2", $sum_array)) {
		    echo "has b";
		}
		echo "<br>";


		if (in_array("5", $sum_array)) {
		    echo "has e";
		}
		echo "<br>";
		if (in_array("6", $sum_array)) {
		    echo "has f";
		}
		echo "<br>";
		if (in_array("9", $sum_array)) {
		    echo "has i";
		}


		?>