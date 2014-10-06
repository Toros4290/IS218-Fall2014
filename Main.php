<!DOCTYPE html>

<body>
<h1>Universities</h1>
<link rel="stylesheet" type="text/css" href="tb.css">
<?php
	
	ini_set('display_errors', 1);
	ini_set('display_errors', TRUE);
	require 'Setup.php';
	
class Main {
	private $fileName;
		
		public function __construct($fileName) {
			$this->fileName = $fileName;
		} 

		public function detect() {
			$first_column = TRUE;
			ini_set('auto_detect_line_endings', TRUE);
			if(($handle = fopen($this->fileName, "r")) !== FALSE) {
				while($row = fgetcsv($handle, ",")) {
					if($first_column) {
						$column_header = $row;
						$first_column = FALSE;
					} else {
						$rows[] = array_combine($column_header, $row);
					}
				}
				fclose($handle);
			} 
			$this->rows = $rows;
		}

		public function Rows() {
			$rows = $this->rows;
			$Var = 'university';
			$College = 'INSTNM';

			if(empty($_GET)) {
				Setup::Link($rows, $Var, $College);
			}

			$row = $rows[$_GET[$Var]];
			Setup::Table($row);
		}

	}

	$file = new Main('hd2013.csv'); 
	$file->detect();
	$file->Rows();
?>
</body>
</html>
