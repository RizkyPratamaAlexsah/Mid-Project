<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mid Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body, html{
            height: 100%;
        }

        .img-thumbnail{
            width: 60px;
            background-color: #3d6efd;
            border-color: #3d6efd;
        }

        p{
            font-style: cheque;
        }

        .nav-link-manage:hover{
            color: violet;
            background-color: violet;
        }

        .nav-link-add:hover{
            color: darkgreen;
            background-color: darkgreen;
        }

        .nav-link-delete:hover{
            color:red;
            background-color: red;
        }

        .home-background{
            background-image: url("/assets/library.jpg");
            background-color: black;
            height: 88vh;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .addForm{
          width: 50%;
        }

    </style>

</head>
<body>

<!-- BAGIAN NAVBAR: -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('booklist')}}">
        <img src="/assets/Musang-Library.png" class="img-thumbnail d-inline-block align-text-center" alt="logolib" >
        <p class="d-inline-block align-text-center">M.Lib</p>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">HOME</a>
        </li> -->
        <li class="nav-item dropdown">
          <!-- <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            BOOKS
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">ADD BOOK</a></li>
            <li><a class="dropdown-item" href="#">MANAGE BOOK</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">DELETE BOOK</a></li>
          </ul> -->
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-add active" href="">ADD BOOK</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-manage link-light active" href="">MANAGE BOOK</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-delete link-light active" href="">DELETE BOOK</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- BAGIAN ISI HOME -->
<div class="home-background">
  <div class="addForm" >
        <!-- BAGIAN FORM BOOK -->
    <form action="{{route('addbook')}}" method="GET" class="addForm"> 
        @csrf
        <div class="mb-3">
          <label for="bookTitle" class="form-label">Book Title</label>
          <input type="text" class="form-control" id="bookTitle" name="bookTitle">
        </div>
        <div class="mb-3">
          <label for="yearPublished" class="form-label">Year Published</label>
          <input type="number" class="form-control" id="yearPublished" name="yearPublished">
        </div>
        <div class="mb-3">
          <label for="author" class="form-label">Author Name</label>
          <input type="text" class="form-control" id="author" name="author">
        </div>
        <div class="mb-3">
          <label for="language" class="form-label">Book Language</label>
          <input type="text" class="form-control" id="language" name="language">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </div>

</div>
</body>
</html>