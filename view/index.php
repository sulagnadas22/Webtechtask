<!DOCTYPE html>
<html>

<head>

    <title>Library Management System</title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <style>

        body{
            font-family: Arial;
            padding:20px;
        }

        input, select{
            padding:8px;
            margin:5px;
        }

        button{
            padding:8px 15px;
            cursor:pointer;
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:20px;
        }

        table, th, td{
            border:1px solid black;
        }

        th, td{
            padding:10px;
            text-align:center;
        }

    </style>

</head>

<body>

<h2>Library Management System</h2>

<input type="hidden" id="book_id">

<input type="text" id="title" placeholder="Book Title">

<input type="text" id="author" placeholder="Author Name">

<input type="text" id="category" placeholder="Category">

<select id="status">

    <option value="Available">Available</option>
    <option value="Not Available">Not Available</option>

</select>

<button id="addBtn">Add Book</button>

<button id="updateBtn">Update Book</button>


<table>

    <thead>

        <tr>

            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Category</th>
            <th>Status</th>
            <th>Action</th>

        </tr>

    </thead>

    <tbody id="bookData">

    </tbody>

</table>

<script src="script.js"></script>

</body>
</html>