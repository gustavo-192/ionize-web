<!doctype html>
<html lang="pt-br">
  <head>
    <title>Ionize - Sessão</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/background-font.css">
    <link rel="stylesheet" href="css/box.css">
  </head>
  <body>

    <?php
        include_once('template/navbar-travel.php');
    ?>

    <div class="container" id="box">
        <form action="back/try-login.php" method="POST" class="box-form">
            <div class="center" id="title">
              <h1>Entre!</h1>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
            </div>
            <!-- <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <div class="center">
              <input type="submit" class="btn btn-dark" id="submit-btn" value="Enviar"></input><br>
            </div>   
        </form>
        <div class="center">
          <a href="sign-up.php"><button class="btn btn-dark" id="register-btn">Cadastre-se</button></a>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>