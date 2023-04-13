<?php

class LibraryController {

    function __construct(){}

    function index() {
		require_once('./Views/Library/home.php');
	}

	function showBooks() {
		$books = Library::getBooks();  
		require_once('./Views/Library/showBooks.php');
	}

	function addBook() {
		require_once('./Views/Library/addBook.php');
	}

	function save() {
		$author = array(
			'name' => $_POST['name'],
			'surname' => $_POST['surname']
		);
		
		$id_author = Library::addAuthor($author);

		$book = array(
			'id_author' => $id_author,
			'title' => $_POST['title'],
			'category' => $_POST['category'],
			'publish_date' => date('Y-m-d', strtotime($_POST['publish_date'])),
			'rate' => $_POST['rate']
		);

		Library::addBook($book);
		header("Location: ?controller=Library&action=showBooks");
		exit;
	}

	function updateBook() {
		$id_book = $_GET['id_book'];
		$books = Library::getBooks();
		$book = null;

		foreach ($books as $for_book) {
			if ($id_book == $for_book['id_book']) {
				$book = $for_book;
			}
		}

		require_once('./Views/Library/updateBook.php');
	}

	function edit() {
		$author = array(
			'name' => $_POST['name'],
			'surname' => $_POST['surname']
		);
	
		echo $id_author = Library::addAuthor($author);
		
		$book = array(
			'id_book' => $_POST['id_book'],
			'id_author' => $id_author,
			'title' => $_POST['title'],
			'category' => $_POST['category'],
			'publish_date' => date('Y-m-d', strtotime($_POST['publish_date'])),
			'rate' => $_POST['rate']
		);

		Library::updateBook($book);
		header("Location: ?controller=Library&action=showBooks");
		exit;
	}

	function delete() {
		$id_book = $_GET['id_book'];
		
		Library::deleteBook($id_book);
		header("Location: ?controller=Library&action=showBooks");
		exit;
	}

	function search() {  
		if ( !empty($_POST['title']) ) { 
			$title = $_POST['title'];
			$books = Library::searchByTitle($title); 
			require_once('Views/Library/showBooks.php');
		} else {
			$books = Library::getBooks(); 
			require_once('Views/Library/showBooks.php');
		} 
		
	}

	function error() {
		require_once('Views/Library/error.php');
	}
}

?>