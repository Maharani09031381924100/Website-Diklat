<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>@yield('title')</title>
  </head>
  <style>
            * {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        padding: 0;
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
        transition:0.5s
        }
        .sidebar {
        
        position: fixed;
        left: -360px;
        top: 60px;
        transition: 0.5s;
        }
        .sidebar-open {
        left: -30px;
        }

        .content {
        
        position: fixed;
        left: 40px;
        transition: 0.5s;
        }
        .content-open {
        left: 330px;
        }
        
  </style>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <button class="navbar-toggler" id="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
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