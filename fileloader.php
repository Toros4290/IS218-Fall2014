<?php
	class Fileloader
	{
		protected $handle;

		public static function LoadFile($fileName, $mode) {
			$handle = fopen($fileName, $mode);
			return $handle;
		}

		public static function CloseFile($handle) {
			fclose($handle);
		}
	}
?>
