<?php

 // @version    1.2 2011-02-03
 // @package    Smithside Auctions
 // copyright  Copyright (c) 2011 Smithside Auctions
 // @license    GNU General Public License
 // @since      Since Release 1.0
	
	// class
	class Contact {
		
		// properties
		public $first_name;
		public $last_name;
		public $position;
		public $email;
		public $phone;
		
		// function to concatenating first and last names
		 
		public function name() {
		$name = $this->first_name . ' ' . $this->last_name;
		return $name;
		}
	}

?>