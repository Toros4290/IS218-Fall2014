class Main {
		
		public function __construct() {
			ini_set('auto_detect_line_endings', TRUE);
		} 

		public function detect($fileName) {
			$first_column = TRUE;
			if(($handle = Fileloader:LoadFile($fileName,$mode)) !== FALSE) {
				while($row = fgetcsv($handle, ",")) {
					if($first_column) {
						$column_header = $row;
						$first_column = FALSE;
					} else {
						$rows[] = array_combine($column_header, $row);
					}
				}
				Fileloader:: CloseFile();

			}
	}
}		
?>
