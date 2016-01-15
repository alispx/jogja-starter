<?php

class Jogja_Extensions_Loader {
	/**
	 * Keep a copy of file names.
	*/
	private $names 	= array();
	private $path 	= array();

	function __construct() {
		$this->path = JOGJA_THEME_FRAMEWORK_DIR . '/extensions';
		$this->setup( $this->path );
	}

	/**
	 * Scan the directory at the given path and include
	 * all files. Only 1 level iteration.
	 *
	 * @param string $path The directory/file path.
	 * @return bool True. False if not appended.
	 */
	private function setup( $path ) {

		if ( is_dir( $path ) ) {
			$dir = new \DirectoryIterator( $path );

			foreach ( $dir as $file ) {
				if ( ! $file->isDot() || ! $file->isDir() ) {
					$file_extension = pathinfo( $file->getFilename(), PATHINFO_EXTENSION );

					if ( $file_extension === 'php' ) {
						$this->names[] = $file->getBasename( '.php' );
						require_once $file->getPath().DIRECTORY_SEPARATOR.$file->getBasename();
					}
				}
			}

			return true;
		}

		return false;
	}
}