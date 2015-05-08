<?PHP
if ($_GET['id']) {
	if ($_GET['raw'] == "true") {
	    if (file_exists('./pastes/' . $_GET['id'] . '.txt')) {
	    header('Content-Type:text/plain');
		// echo file_get_contents("./pastes/" . $_GET['id'] . '.txt', true);
		$handle = fopen("./pastes/" . $_GET['id'] . '.txt', "r");
		if ($handle) {
		    while (($line = fgets($handle)) !== false) {
		        echo $line;
		    }

		    fclose($handle);
		} else {
		    // error opening the file.
		} 
	    } else {
		echo 'This paste id does not exists.';
	    }
	} else {

	}
} else {

}
