
<?
function makeAuth() {
	return [
		"localhost",  // database host location name
		"a_store_manager", // username database
		"N!matrix01", // password database
		"audiostore" // database name
	];
}



function makePDOAuth() {
	return [
		"mysql:host=localhost;dbname=audiostore",
		"a_store_manager",
		"N!matrix01",
		[PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]
	];
}

?>