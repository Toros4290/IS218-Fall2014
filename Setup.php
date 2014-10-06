<?php

ini_set('display_errors', 1);
ini_set('display_errors', TRUE);


	class Setup {
	public static function Link($rows, $Var, $College) {
			$i = -1;
			foreach($rows as $row) {
				$i++;
				echo '<a href="?' . $Var . '=' . $i . '">' . $row[$College] . '</a>' . '<br>'; 
			}
		}

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
