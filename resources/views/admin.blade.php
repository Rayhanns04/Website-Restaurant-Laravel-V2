<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <link rel="icon" href="/img/favicon.png" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />
    <script
      src="https://kit.fontawesome.com/f99e0cbd69.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
    />
    <style>
      .container-admin{
        margin-top: 280px;
      }
      .menu{
        margin-top: 200px;
      }
      .btn-admin{
        margin-bottom: 30px
      }
    </style>
</head>
<body>
    <div class="container-admin container text-center">
        <h1>Admin Privillage</h1>
        <br/>
        <button type="button" class="btn-admin btn btn-warning btn-lg btn-block text-light"><a href="/breakfastMenu" class="menu text-decoration-none text-reset"><h3>Manage Brekfast Menu</h3></a></button>
        <button type="button" class="btn-admin btn btn-warning btn-lg btn-block text-light"><a href="/cartItem" class="menu text-decoration-none text-reset"><h3>Manage Shopping Cart</h3></a></button>
    </div>
</body>
</html>