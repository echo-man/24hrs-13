<?php

 // @version    1.2 2011-02-03
 // @package    Smithside Auctions
 // copyright  Copyright (c) 2011 Smithside Auctions
 // @license    GNU General Public License
 // @since      Since Release 1.0

	class Contact {
		
		public $first_name;
			// string
		public $last_name;
			//string
		public $position;
			// string
		public $email;
			// string
		public $phone;
			// string
		
		// Concatenating first and last names
		 
		public function name() {
		$name = $this->first_name . ' ' . $this->last_name;
		return $name;
		}
	}

?>