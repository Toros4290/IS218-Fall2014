<?php

class table {

public static function Table($row) {
			echo "<table>";
			foreach($row as $key => $value) {
				echo "<tr>";
				echo "<th>" . $key . "</th>";
				echo "<td>" . $value . "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
	}
?>
