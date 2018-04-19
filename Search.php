<?php
/**
 * Created by PhpStorm.
 * User: ntea222
 * Date: 4/19/2018
 * Time: 3:34 PM
 */
require_once("connect.php");
?>
<!-- Team 16 Bookstore (search.html) -->
<!-- Author: Ben Holzhauer -->
<!-- Class: CS 405G-001 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Team 16 Bookstore - Search</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles/main.css">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="scripts/jquery.tablesorter.js"></script>
    <script type="text/javascript" src="scripts/main.js"></script>
</head>

<body>
<div id="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">Team 16 Bookstore</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li id="loginNav" class="nav-item">
                    <a class="nav-link" href="/~bgho224/CS405G/web-app/">Log In</a>
                </li>
                <li id="signupNav" class="nav-item">
                    <a class="nav-link" href="/~bgho224/CS405G/web-app/signup">Sign Up</a>
                </li>
                <li id="logoutNav" class="nav-item" style="display: none">
                    <a class="nav-link" href="/~bgho224/CS405G/web-app/">Log Out</a>
                </li>
            </ul>
            <ul id="features" class="navbar-nav ml-auto" style="display: none">
                <li class="nav-item">
                    <a class="nav-link" href="/~bgho224/CS405G/web-app/search">Search</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/~bgho224/CS405G/web-app/order">Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/~bgho224/CS405G/web-app/review">Review</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/~bgho224/CS405G/web-app/history">History</a>
                </li>
                <li id="manageNav" class="nav-item" style="display: none">
                    <a class="nav-link" href="/~bgho224/CS405G/web-app/manage">Manage</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="search" class="container mt-4 pb-4">
        <h3>Search for books</h3>
        <br>
        <form method="POST" action="Search.php">
            <div class="form-group">
                <input type="text" class="form-control" id="searchWords" name="searchWords" placeholder="SEARCH" required>
                <select class="form-control" id="searchTerm" name="searchTerm" required>
                    <option value="name">Title</option>
                    <option value="author">Author</option>
                    <option value="pubDate">Date Published</option>
                    <option value="subject">Subject</option>
                    <option value="price">Max Price</option>
                    <option value="keyword">Keyword</option>
                </select>
            </div>
            <input type="hidden" name="searchForm">
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
        <br>
        <?php
            if(isset($_POST['name'])){
                $searchTerm = $_POST['name'];
                $recordPrep = $conn->prepare("SELECT * FROM book_db.books WHERE name LIKE '%{$searchTerm}%'");
            }
            if(isset($_POST['author'])){
                $searchTerm = $_POST['author'];
                $recordPrep = $conn->prepare("SELECT * FROM book_db.books WHERE ")
            }
        ?>
        <table id="results" class="table tablesorter" style="display: none">
            <thead>
            <tr>
                <th>ISBN</th>
                <th id="name">Book Title</th>
                <th id="author">Author</th>
                <th>Publisher</th>
                <th id="pubDate">Date Published</th>
                <th id="subject">Subject</th>
                <th id="price">Price</th>
                <th># In Stock</th>
                <th id="keyword">Keywords</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1234</td>
                <td>The first book</td>
                <td>John Smith</td>
                <td>Wing Press</td>
                <td>09/20/1996</td>
                <td>Dogs</td>
                <td>$10.00</td>
                <td>1</td>
                <td>dogs, pets</td>
            </tr>
            <tr>
                <td>5678</td>
                <td>The second book</td>
                <td>Kurt Smith</td>
                <td>NYC</td>
                <td>12/22/2000</td>
                <td>Mathematics</td>
                <td>$15.00</td>
                <td>2</td>
                <td>school, math</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</body>

</html>
