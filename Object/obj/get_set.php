<?php
class getSet {
	private $cowsName;

	//setter - can change private var's with this.
	public function setCowsName($x) {
		$this->cowsName = $x;
	}

	//getter - retrieves private var and allows to echo it out
	public function getCowsName() {
		return $this->cowsName;
	}
}
?>