<?php
/**
 * Created by PhpStorm.
 * User: ntea222
 * Date: 4/19/2018
 * Time: 3:34 PM
 */
require_once("connect.php");
            if(isset($_POST['name'])){
                $searchTerm = $_POST['name'];
                $recordPrep = $conn->prepare("SELECT * FROM bgho224.books, bgho224.authors WHERE name LIKE '%{$searchTerm}%' AND books.ISBN = authors.ISBN");
            }
            if(isset($_POST['author'])){
                $searchTerm = $_POST['author'];
                $recordPrep = $conn->prepare("SELECT * FROM bgho224.books, bgho224.authors WHERE author LIKE '%{$searchTerm}%' AND authors.ISBN = books.ISBN");
            }
            if(isset($_POST['pubDate'])){
                $searchTerm = $_POST['pubDate'];
                $recordPrep = $conn->prepare("SELECT * FROM bgho224.books, bgho224.authors WHERE pubDate LIKE '%{$searchTerm}%' AND books.ISBN = authors.ISBN");
            }
            if(isset($_POST['subject'])){
                $searchTerm = $_POST['subject'];
                $recordPrep = $conn->prepare("SELECT * FROM bgho224.books, bgho224.authors WHERE subject LIKE '%{$searchTerm}%' AND books.ISBN = authors.ISBN");
            }
            if(isset($_POST['price'])){
                $searchTerm = $_POST['price'];
                $recordPrep = $conn->prepare("SELECT * FROM bgho224.books, bgho224.authors WHERE price LIKE '%{$searchTerm}%' AND books.ISBN = authors.ISBN");
            }
            if(isset($_POST['keyword'])){
                $searchTerm = $_POST['keyword'];
                $recordPrep = $conn->prepare("SELECT * FROM bgho224.books, bgho224.authors, bgho224.book_keywords WHERE keywords LIKE '%{$searchTerm}%' AND book_keywords.ISBN = books.ISBN AND books.ISBN = authors.ISBN");
            }
        ?>