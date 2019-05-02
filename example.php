<?php
// include file
include('toxml.php');

// example supported array
$me = array("friend"=>"2551", "gf"=>"48", "ex"=>"69");

// example not supported array
$d = array(4, 8, 6, 9);

// change dir to db
chdir('./db');

//to_xml(filename, array)
echo to_xml('list', $me);
