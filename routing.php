<?php 

$controllers = array(
	'Library'=>['index', 'addBook', 'showBooks', 'save', 'delete', 'updateBook', 'edit', 'search', 'error']
);

if (array_key_exists($controller, $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller, $action);

	} else {
		call('Library', 'error');
	}

} else {
	call('Library', 'error');
}

function call($controller, $action) {
 
	require_once('Controllers/'.$controller.'Controller.php');

	switch ($controller) {
		case 'Library':
			require_once('Models/Library.php');
			$controller = new LibraryController();
			break;
	}

	$controller->{$action}();
}

?>