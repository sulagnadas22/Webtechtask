$(document).ready(function () {

    loadBooks();


    // ADD BOOK
    $('#addBtn').click(function () {

        var title = $('#title').val();
        var author = $('#author').val();
        var category = $('#category').val();
        var status = $('#status').val();

        $.ajax({

            url: '../ajax/handler.php',
            type: 'POST',

            data: {
                action: 'add',
                title: title,
                author: author,
                category: category,
                status: status
            },

            success: function () {

                alert('Book Added Successfully');

                loadBooks();

                clearForm();
            }

        });

    });



    // UPDATE BOOK
    $('#updateBtn').click(function () {

        var id = $('#book_id').val();

        var title = $('#title').val();
        var author = $('#author').val();
        var category = $('#category').val();
        var status = $('#status').val();

        $.ajax({

            url: '../ajax/handler.php',

            type: 'POST',

            data: {
                action: 'update',
                id: id,
                title: title,
                author: author,
                category: category,
                status: status
            },

            success: function () {

                alert('Book Updated Successfully');

                loadBooks();

                clearForm();
            }

        });

    });

});



// LOAD BOOKS
function loadBooks() {

    $.ajax({

        url: '../ajax/handler.php',

        type: 'POST',

        data: {
            action: 'fetch'
        },

        success: function (data) {

            $('#bookData').html(data);

        }

    });

}



// DELETE BOOK
function deleteBook(id) {

    if (confirm('Are you sure?')) {

        $.ajax({

            url: '../ajax/handler.php',

            type: 'POST',

            data: {
                action: 'delete',
                id: id
            },

            success: function () {

                alert('Book Deleted Successfully');

                loadBooks();

            }

        });

    }

}



// EDIT BOOK
function editBook(id, title, author, category, status) {

    $('#book_id').val(id);

    $('#title').val(title);

    $('#author').val(author);

    $('#category').val(category);

    $('#status').val(status);
}



// CLEAR FORM
function clearForm() {

    $('#book_id').val('');

    $('#title').val('');

    $('#author').val('');

    $('#category').val('');

    $('#status').val('Available');

}