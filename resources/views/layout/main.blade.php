<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>@yield('title')</title>
  </head>
  <style>
            * {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        padding: 0;
        }
        
        .background{
          background-color: #C8E6C9;
        }

        .toggle-sidebar {
        border: none;
        background-color: #3097af;
        color: white;
        font-weight: bold;
        padding: 10px;
        position: left;
        right: 10px;
        top: 10px;
        cursor: pointer;
        transition:0.5s;
        }

        .sidebar {
        
        position: fixed;
        left: -360px;
        top: 60px;
        transition: 0.5s;
        }

        .sidebar-open {
        left: -35px;
        }
        
        .sidebar a, .dropdown-btn {
          padding: 10px 23px;
          text-decoration: none;
          display: block;
          border: none;
          background: none;
          color: black;
          cursor: pointer;
          outline: none;
        }

        .sidebar a:hover, .dropdown-btn:hover {
          color: #f1f1f1;
        }

        .active {
          background-color: #C5E1A5;
          padding: 10px 11px;
        }

        .dropdown-container {
          display: none;
          padding-left: 8px;
        }

        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }

        .fa-caret-down{
          margin: 0px 5px
        }

        .content { 
        position: fixed;
        left: 40px;
        transition: 0.5s;
        }

        .content-open {
        left: 330px;
        }
        
        .navbar-toggler{
          padding: 0px 0px 10px;
          width: 45px; 
          height: 30px;
          background-color: #4CAF50;

        
        }

        
        
  </style>
  <body class="background">
    <nav class="navbar navbar-dark" style="background-color: #4CAF50; height: 60px;">
    <div class="container">
 
      <div class="col-0" style="padding: 0px 0px 30px;">
        <button class="navbar-toggler" id="navbar-toggler" type="button" data-bs-toggle="collapse" 
        data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" 
        aria-expanded="false" aria-label="Toggle navigation">
          <i class="navbar-toggler-icon"></i>
        </button>
      </div>
        
      <div class="col-9">
        <p style="font-size: 12px; text-align: right; padding: 0px 0px 30px;margin: 0px 0px;"><b>Rumah Sakit <br>Ernaldi Bahar Palembang</b></p>
      </div>
      <div class="col-0">
      <img class="image" src="img/logo.png" width="50px" style="padding: 0px 0px 30px;" >
      </div>
        
  </div>     

    </nav>
    <ul class="content">

  @yield('container')
      </ul>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
    const toggleSidebar = document.querySelector("#navbar-toggler");
const sidebar = document.querySelector(".sidebar");

toggleSidebar.addEventListener("click", () => {
  sidebar.classList.toggle("sidebar-open");
});
</script>
<script>
    const togglecontent = document.querySelector("#navbar-toggler");
const content = document.querySelector(".content");

toggleSidebar.addEventListener("click", () => {
  content.classList.toggle("content-open");
});
</script>
  </body>
</html>