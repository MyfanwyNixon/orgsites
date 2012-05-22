<?php
	// a quick script to ge the correct subheading for a page base don the template
	function entitle($post){
		switch(get_post_type( $post )){
			case 'ms_org':
		        return 'for&nbspOrganisations';
		        break;
		    case 'ms_council':
		        return "for&nbspCouncils";
		        break;
		    case 'ms_public':
		        return "for&nbspthe&nbspPublic";
		        break;
			case 'ms_volunteer':
		        return "for&nbspVolunteers";	
				break;
			default :
				return null;
		}		
    }
?>