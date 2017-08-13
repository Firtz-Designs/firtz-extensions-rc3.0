<?php


function podtrac_episode($item) {

	global $main;
	
	foreach ($item['audiofiles'] as $key=>$audio) {
		$redir = '';
		switch ($key) {
		
			case 'mp3':
			case 'm4a':
			case 'ogg':
				$redir=$key;
				break;
				
			case 'opus':
				$redir = 'ogg';
				break;
				
			default:
				return $item;
				
		
		}
		$info = parse_url($audio['link']);
		$newlink = str_replace($info['scheme'].'://','',$audio['link']);
		$item['audiofiles'][$key]['link']='http://www.podtrac.com/pts/redirect.'.$redir.'/'.$newlink;
	
	}	
	return $item;
	
}


?>
