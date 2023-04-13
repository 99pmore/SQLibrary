<?php

class Library {

    public static function getBooks() {
        $db = Db::getConnect();
		$books = [];

		try {
			$select = $db->query('SELECT books.*, authors.name, authors.surname FROM books INNER JOIN authors ON books.id_author = authors.id_author');
			$books = $select->fetchAll();  
	
			return $books;

		} catch(Exception $e) {
			header("Location: ?controller=Library&action=error");
		}
    }

	public static function addBook($book) {
		$db = Db::getConnect(); 

		$insert = $db->prepare('INSERT INTO books VALUES (NULL, :id_author, :title, :category, :publish_date, :rate)');
		$insert->bindValue('id_author', $book['id_author']);
		$insert->bindValue('title', $book['title']);
		$insert->bindValue('category', $book['category']);
		$insert->bindValue('publish_date', $book['publish_date']);
		$insert->bindValue('rate', $book['rate']);
		$insert->execute();
	}

	public static function addAuthor($author) {
		$db = Db::getConnect();

		$select = $db->prepare('SELECT id_author FROM authors WHERE name = :name AND surname = :surname');
		$select->execute(array(':name' => $author['name'], ':surname' => $author['surname']));
		$result = $select->fetchAll();
	
		if ($result) {
			return $result[0]['id_author'];

		} else {
			$insert = $db->prepare('INSERT INTO authors VALUES (NULL, :name, :surname)');
			$insert->bindValue('name', $author['name']);
			$insert->bindValue('surname', $author['surname']);
			$insert->execute();
		
			$id_author = $db->lastInsertId();
			return $id_author;
		}
	}

	public static function updateBook($book){
		$db = Db::getConnect(); 

		$update = $db->prepare('UPDATE books SET id_author=:id_author, title=:title, category=:category, publish_date=:publish_date, rate=:rate WHERE id_book=:id_book');
		$update->bindValue('id_book', $book['id_book']);
		$update->bindValue('id_author', $book['id_author']);
		$update->bindValue('title', $book['title']);
		$update->bindValue('category', $book['category']);
		$update->bindValue('publish_date', $book['publish_date']);
		$update->bindValue('rate', $book['rate']);
		$update->execute();
	}

	public static function deleteBook($id_book) {
		$db = Db::getConnect();
		$delete = $db->prepare('DELETE FROM books WHERE id_book=:id_book');
		$delete->bindValue('id_book', $id_book);
		$delete->execute();	
	}

	public static function searchByTitle($title){ 
		$db = Db::getConnect();
		$select = $db->prepare('SELECT * FROM books WHERE UPPER(title) LIKE UPPER(:title)');
		
		$title = "%$title%";
		$title = strtoupper($title);
		$select->bindValue('title', $title);
		$select->execute();

		$books = $select->fetchAll();  
		return $books;
	}
    
}

?>