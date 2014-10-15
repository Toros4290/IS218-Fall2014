<?php

class linker {
public static function Link($rows, $Var, $College) {
			$i = -1;
			foreach($rows as $row) {
				$i++;
				echo '<a href="?' . $Var . '=' . $i . '">' . $row[$College] . '</a>' . '<br>'; 
			}
		}
}
?>
