<?php
class Colin {

	public function __construct($x) {
		echo 'you never called me ' . $x . '!';
	}

//useful for initializing vars etc.

	public function __destruct() {
		echo 'destruction!';
	}
}
?>
