<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODOs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/login.css" media="screen" />
</head>
<body>
    <div class="container">
        <h1>TODOs - Login</h1>
        <form action="/login/auth" method="POST">
          @csrf
          <hr>
            <div class="mb-2">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu email">

            </div>
            <div class="mb-2">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <div class="input-group mb-3">
              <input type="password" name="password" id="input-password" class="form-control" >
              <span id="btn-eye" class="input-group-text" id="basic-addon2"><i id="icon-eye" class="fa-solid fa-eye-slash"></i></span>
            </div>
            </div>

            <button type="submit" class="btn btn-primary">Conectar-se</button>
          </form>
          <hr>
          <p>Ainda não possui login? <a href="/register"> Cadastrar-se </a> </p>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="js/login.js"></script>
</body>
</html>