<?php  include "includes/db.php"; ?>
<?php  include "includes/mainPageFunctions.php"; ?>

<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jember Combat Club</title>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Old+Standard+TT&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font awesome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    
    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">
    <style>
        .hero-section {
            background-size: cover;
            background-position: center;
            padding: 10px 0;
            color: white;
            text-align: center;
        }
        .hero-section h1 {
            color: #b60000;
            font-family: 'Libre Baskerville', serif;
            font-size: 48px;
        }
        .hero-section p {
            color: #000000;
            font-family: 'Old Standard TT', serif;
            font-size: 27px;
        }
        .services-section.bg-danger {
            background-color: #b60000;
        }
        .services-section, .coaches-section {
            color: #b60000;
            padding: 40px 0;
        }
        .coach-card {
            text-align: center;
            padding: 15px;
            border: 5px solid #b60000;
            border-radius: 8px;
            transition: 0.3s;
        }
        .coach-card:hover {
            background-color: #f8f9fa;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .btn-red {
            background-color: #b60000;
            color: white;
            border: none;
            width: 50%;
            padding: 12px 16px;
            font-size: 24px;
        }
        .btn-red:hover {
            background-color: #8e0000;
            color: white;
        }
        .btn-primary {
            background-color: #b60000;
            border-color: #b60000;
            color: white;
        }
        .btn-primary:hover {
            background-color: #8e0000;
            border-color: #8e0000;
            color: white;
        }
        .schedule-table {
            overflow-x: auto;
            color: black;
            border: 3px;
        }
        .schedule-title {
            text-align: center;
            padding: 15px;
            background-color: #b60000;
            color: white;
            border-radius: 8px;
            transition: 0.3s;
            font-family: 'Montserrat Classic' ;
        }
        .footer {
            background-color: #b60000;
            color: white;
            text-align: center;
            padding: 20px;
        }
        footer .fa {
            margin-right: 8px;
            font-size: 20px;
        }
        footer a {
            text-decoration: none;
            transition: 0.3s;
        }
        footer a:hover {
            text-decoration: underline;
        }
    </style>
  </head>

  <body>