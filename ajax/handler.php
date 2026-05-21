<?php

require_once '../controller/BookController.php';

if (isset($_POST['action'])) {

    // ADD
    if ($_POST['action'] == 'add') {

        $title = $_POST['title'];
        $author = $_POST['author'];
        $category = $_POST['category'];
        $status = $_POST['status'];

        addBookController($title, $author, $category, $status);
    }


    // FETCH
    if ($_POST['action'] == 'fetch') {

        $result = showBooksController();

        while ($row = mysqli_fetch_assoc($result)) {

            echo "
            <tr>
                <td>{$row['id']}</td>
                <td>{$row['title']}</td>
                <td>{$row['author']}</td>
                <td>{$row['category']}</td>
                <td>{$row['status']}</td>

                <td>

                    <button onclick=\"editBook(
                    '{$row['id']}',
                    '{$row['title']}',
                    '{$row['author']}',
                    '{$row['category']}',
                    '{$row['status']}'
                    )\">Edit</button>

                    <button onclick=\"deleteBook({$row['id']})\">
                    Delete
                    </button>

                </td>
            </tr>
            ";
        }
    }


    // UPDATE
    if ($_POST['action'] == 'update') {

        $id = $_POST['id'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $category = $_POST['category'];
        $status = $_POST['status'];

        editBookController($id, $title, $author, $category, $status);
    }


    // DELETE
    if ($_POST['action'] == 'delete') {

        $id = $_POST['id'];

        removeBookController($id);
    }
}

?>