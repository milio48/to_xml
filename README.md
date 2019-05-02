# to_xml
array php to simple xml

first : you must know about xml rules

### example
```
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
```

### created
```
<?xml version="1.0" encoding="UTF-8"?>
<list>
	<friend>2551</friend>
	<gf>48</gf>
	<ex>69</ex>
</list>
```
