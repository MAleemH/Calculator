<?php 

	class Calculator {

		// properties

		public $first_num;
		public $operator;
		public $second_num;

		// constructor

		public function __construct (int $first_number, string $operator, int $second_number) {

			$this->first_num = $first_number;
			$this->operator = $operator;
			$this->second_num = $second_number;

		}

		// methods

		public function calculate () {

			switch ($this->operator) {
				case 'add':
					$result = $this->first_num + $this->second_num;
					return $result;
					break;

				case 'sub':
					$result = $this->first_num - $this->second_num;
					return $result;
					break;

				case 'mul':
					$result = $this->first_num * $this->second_num;
					return $result;
					break;

				case 'div':
					$result = $this->first_num / $this->second_num;
					return $result;
					break;
				
				default:
					echo "Calculation Error!";
					break;
			}

		}

	}

 ?>