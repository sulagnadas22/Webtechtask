<?php

require_once '../model/BookModel.php';

function addBookController($title, $author, $category, $status)
{
    return insertBook($title, $author, $category, $status);
}

function showBooksController()
{
    return getAllBooks();
}

function editBookController($id, $title, $author, $category, $status)
{
    return updateBook($id, $title, $author, $category, $status);
}

function removeBookController($id)
{
    return deleteBook($id);
}

?>