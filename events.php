<?php

/**
 * events
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootloader
require('bootloader.php');

// events enabled
if (!$system['events_enabled']) {
	_error(404);
}

try {

	// get view content
	switch ($_GET['view']) {
		case '':
			// user access
			if ($user->_logged_in || !$system['system_public']) {
				user_access();
			}

			// page header
			page_header(__("Discover Events"));

			// get new events
			$events = $user->get_events(array('suggested' => true));
			
			
			//$newevents =array();
			$i=0;
			foreach($events as $event){
			 
			 $newevents[$i] =$event;	
			
			 //echo strpos($event['event_cover'],'https');
			 if( strpos($event['event_cover'], 'https') !== false){
				 $event['event_picture'];
				 $newevents[$i]['event_cover'] = str_replace('https://anywhereanycity.com/network/content/uploads/','',$event['event_cover']);
			      $newevents[$i]['event_picture'] = str_replace('https://anywhereanycity.com/network/content/uploads/','',$event['event_picture']);
			 
			 }else{
				  $newevents[$i]['event_cover'] 	= 'https://anywhereanycity.com/network/content/uploads/'.$event['event_cover'];
			      $newevents[$i]['event_picture'] 	=  $event['event_picture'];
			 
			
			 }
			
			
			 
			 $i++;	
			
			}
			 //echo "<pre>";
            // print_r($newevents);
			/* assign variables */
			$smarty->assign('events', $newevents);
			$smarty->assign('get', "suggested_events");
			break;

		case 'going':
			// user access
			user_access();

			// page header
			page_header(__("Going Events"));

			// get going events
			$events = $user->get_events(array('filter' => 'going'));
			
			$i=0;
			foreach($events as $event){
			 
			 $newevents[$i] =$event;	
			
			 //echo strpos($event['event_cover'],'https');
			 if( strpos($event['event_cover'], 'https') !== false){
				 $event['event_picture'];
				 $newevents[$i]['event_cover'] = str_replace('https://anywhereanycity.com/network/content/uploads/','',$event['event_cover']);
			      $newevents[$i]['event_picture'] = str_replace('https://anywhereanycity.com/network/content/uploads/','',$event['event_picture']);
			 
			 }else{
				  $newevents[$i]['event_cover'] 	= 'https://anywhereanycity.com/network/content/uploads/'.$event['event_cover'];
			      $newevents[$i]['event_picture'] 	=  $event['event_picture'];
			 
			
			 }
			
			
			 
			 $i++;	
			
			}
			/* assign variables */
			$smarty->assign('events', $newevents);
			$smarty->assign('get', "going_events");
			break;

		case 'interested':
			// user access
			user_access();

			// page header
			page_header(__("Interested Events"));

			// get interested events
			$events = $user->get_events(array('filter' => 'interested'));
			/* assign variables */
						$i=0;
			foreach($events as $event){
			 
			 $newevents[$i] =$event;	
			
			 //echo strpos($event['event_cover'],'https');
			 if( strpos($event['event_cover'], 'https') !== false){
				 $event['event_picture'];
				 $newevents[$i]['event_cover'] = str_replace('https://anywhereanycity.com/network/content/uploads/','',$event['event_cover']);
			      $newevents[$i]['event_picture'] = str_replace('https://anywhereanycity.com/network/content/uploads/','',$event['event_picture']);
			 
			 }else{
				  $newevents[$i]['event_cover'] 	= 'https://anywhereanycity.com/network/content/uploads/'.$event['event_cover'];
			      $newevents[$i]['event_picture'] 	=  $event['event_picture'];
			 
			
			 }
			
			
			 
			 $i++;	
			
			}
			/* assign variables */
			$smarty->assign('events', $newevents);
			$smarty->assign('get', "interested_events");
			break;

		case 'invited':
			// user access
			user_access();

			// page header
			page_header(__("Invited Events"));

			// get invited events
			$events = $user->get_events(array('filter' => 'invited'));
			/* assign variables */
						$i=0;
			foreach($events as $event){
			 
			 $newevents[$i] =$event;	
			
			 //echo strpos($event['event_cover'],'https');
			 if( strpos($event['event_cover'], 'https') !== false){
				 $event['event_picture'];
				 $newevents[$i]['event_cover'] = str_replace('https://anywhereanycity.com/network/content/uploads/','',$event['event_cover']);
			      $newevents[$i]['event_picture'] = str_replace('https://anywhereanycity.com/network/content/uploads/','',$event['event_picture']);
			 
			 }else{
				  $newevents[$i]['event_cover'] 	= 'https://anywhereanycity.com/network/content/uploads/'.$event['event_cover'];
			      $newevents[$i]['event_picture'] 	=  $event['event_picture'];
			 
			
			 }
			
			
			 
			 $i++;	
			
			}
			/* assign variables */
			$smarty->assign('events', $newevents);
			$smarty->assign('get', "invited_events");
			break;

		case 'manage':
			// user access
			user_access();

			// page header
			page_header(__("Your Events"));

			// get events
			$events = $user->get_events();
			/* assign variables */
							$i=0;
			foreach($events as $event){
			 
			 $newevents[$i] =$event;	
			
			 //echo strpos($event['event_cover'],'https');
			 if( strpos($event['event_cover'], 'https') !== false){
				 $event['event_picture'];
				 $newevents[$i]['event_cover'] = str_replace('https://anywhereanycity.com/network/content/uploads/','',$event['event_cover']);
			      $newevents[$i]['event_picture'] = str_replace('https://anywhereanycity.com/network/content/uploads/','',$event['event_picture']);
			 
			 }else{
				  $newevents[$i]['event_cover'] 	= 'https://anywhereanycity.com/network/content/uploads/'.$event['event_cover'];
			      $newevents[$i]['event_picture'] 	=  $event['event_picture'];
			 
			
			 }
			
			
			 
			 $i++;	
			
			}
			/* assign variables */
			$smarty->assign('events', $newevents);
			$smarty->assign('get', "events");
			break;

		default:
			_error(404);
			break;
	}
	/* assign variables */
	$smarty->assign('view', $_GET['view']);
} catch (Exception $e) {
	_error(__("Error"), $e->getMessage());
}

// page footer
page_footer("events");
