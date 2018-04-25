<?php

/*
FireBird & InterBase functions for TinyButStrong Template Engine
Version 1.00, 2004-09-22, Skrol29
http://www.tinybutstrong.com

Example:
	$conn = ibase_connect("/database.gdb","uid","pwd", "ISO8859_1");
	... 
	$TBS->MergeBlock('blk1',$conn,'SELECT * FROM t_examples');
	...
	ibase_close($conn);
*/

function tbsdb_firebird_open(&$Source, &$Query) {
	return ibase_query($Source, $Query);
}

function tbsdb_firebird_fetch(&$Rs) {
	return ibase_fetch_assoc($Rs);
}

function tbsdb_firebird_close(&$Rs) {
	return ibase_free_result($Rs);
}

?>