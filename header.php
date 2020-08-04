<?php include_once 'includes/config.inc.php'; ?>

<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
            <title>My Notes</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
            <!-- CK Editor -->
            <script src="ckeditor/ckeditor.js"></script>
            <!-- Custom JS -->
            <script src="script/script.js"></script>
            <!-- Customer Stylesheet -->
            <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= ROOT_URL; ?>">My Notes</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mr-4">
                        <a class="nav-link text-light" href="<?= ROOT_URL; ?>">Home</a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link text-light" href="<?= ROOT_URL; ?>list.php">Notes List</a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link text-light" href="<?= ROOT_URL; ?>insert.php">Create Note</a>
                    </li>
                </ul>
                <!-- Search Field -->
                <form class="form-inline ml-auto" action="search.php" method="POST">
                    <div class="nav-search-input form-group mb-0 header-search-input-container">
                        <input type="text" class="header-search-input form-control h-100" name="search" placeholder="Search notes here...">
                    </div>
                    <button type="submit" class="header-search-btn btn btn-light btn-sm" name="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <br>
    <div class="add-note rounded-circle">
        <a href="<?= ROOT_URL; ?>insert.php">
            <img src="images/add_note.png" alt="add_note_icon">
        </a>
    </div>

    <div class="container mt-2" style="min-height: calc(100vh - 144px);">       <!-- Container For all the pages -->