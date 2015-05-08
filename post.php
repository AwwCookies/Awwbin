<?PHP
	function getRandomString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

	$gotID = false;
	$id = getRandomString(5);

	while (!$gotID) {
		if (file_exists('./pastes/' . $id . '.txt')) {
			$id = getRandomString(5);
		} else {
			$gotID = true;
		}
	}


	$filename = './pastes/' . $id . '.txt';

	file_put_contents($filename, $_POST['text']);
	echo $id;
?>
