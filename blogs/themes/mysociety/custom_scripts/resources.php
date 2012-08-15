<?php
	//functions to assist in the placement of resource boxes	
	function resource_cols($li) {
		if(!(count($li) % 4)){
			return 'four_up';
		}else if(!(count($li) % 3)){
			return 'three_up';
		}else if(!(count($li) % 2)){
			return 'two_up';
		}else{
			return 'four_up';
		}
	}

  function clear_col($li) {
		if(!(count($li) % 4)){
			return 4;
		}else if(!(count($li) % 3)){
			return 3;
		}else if(!(count($li) % 2)){
			return 2;
		}else{
			return 4;
		}
  }
	
	function feature_cols($li) {
		if(!(count($li) % 3)){
			return 'three_up';
		}else if(!(count($li) % 2)){
			return 'two_up';
		}else{
			return 'two_up';
		}
	}
?>
