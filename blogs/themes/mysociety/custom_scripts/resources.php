<?php
	//functions to assist in the placement of resource boxes	
	function resource_cols($li) {
		if(count($li) % 4){
			return 'four_up';
		}else if(count($li) % 3){
			return 'three_up';
		}else if(count($li) % 2){
			return 'two_up';
		}else{
			return 'four_up';
		}
	}
	
	function feature_cols($li) {
		if(count($li) % 3 || count($li)+1 % 3){
			return 'three_up';
		}else if(count($li) % 2 || count($li)+1 % 2){
			return 'two_up';
		}else{
			return 'two_up';
		}
	}
?>