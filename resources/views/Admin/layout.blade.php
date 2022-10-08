<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>  </title>
</head>
<style>
    nav{
        box-shadow: 2px 2px rgba(0,0,0,0.5);
        border-radius: 25px;
    }
</style>
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <img src={{url('/images/pnc.png')}} width="90rem" alt="PNC" >
          <img src={{url('/images/pama.png')}} width="500px" alt="">

        </div>
      </nav>

      <div class="container">
         @yield('content')
      </div>


</body>
</html>
