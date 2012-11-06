<?php
function getCategoryByDomain($categoryslugs, $domain_lists){
	$server_name =  preg_replace('#www.#', '', $_SERVER['SERVER_NAME']);
    if(empty($categoryslugs) && !empty($server_name) && in_array($server_name, $domain_lists) ){
		$cityName = preg_replace('#www.|question.com#', '', $server_name);
	    $categoryslugs = array($cityName);
    }
	return $categoryslugs;
}