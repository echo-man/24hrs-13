<?php

	// @version    1.2 2011-02-03
	// @package    Example
	// @copyright  Copyright (c) 2011 Myself
	// @license    GNU General Public License
	// @since      Since Release 1.0
	 
	// class
	class Cellphone {
		
		// properties
		public $phoneNumber;
		public $model;
		public $color;
		public $contacts;
		public $songs;
		
		
		// Create a new Contact
		// @param string $number
		// @param string $name

		public function addContact($number, $name) {
			$this->contacts[$name] = $number;
		}
		
		
		// Add an array mp3 filename to the Songs array,
		// if it isn't an array, then just add the single song
		// @param array|string $songs

		public function addSongs($songs) {
			if (is_array($songs)) {
				foreach ($songs as $song) {
					$this->songs[] = $song;
				}
			} else {
				$this->songs[] = $songs;
			}
		}
		

		// Display a list of the Contacts

		public function displayContacts() { 
			foreach ($this->contacts as $name=>$number) {
				echo  $name . ' - ' . $number . '<br />'; 
			}
		}


		// Create a new contact and then display 
		// @param string $newname
		// @param string $newnumber

		public function addThenDisplayContacts($newname, $newnumber) {
			$this->addContacts($newnumber, $newname);
			$this->displayContacts(); 
		}
		

		// Count the songs
		// @return int
		
		public function countSongs() {
			$result = count($this->songs);
			return $result;  
		}
		
	}

?>