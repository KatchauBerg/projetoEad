<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
        <!-- CSS - BOOTSTRAP -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #25AAE1;">
      <ul class="navbar-nav" id="navbar">
        <li class="nav-item align-center" >
          <img src="css/LOGO-UNIVEM.png" width="25" height="35"class="d-inline-block align-middle shadow" alt="">
          <b class="text-brand h4 align-middle" >MDC -   UNIVEM</b>
        </li>
    </nav>
    <div class="card" id="cardlogin">
        <div class="card-body">
            <h5 class="card-title text-center text-light">CADASTRO</h5>
            <br>
            <form>
                <div class="row">
                      <div class="col">
                        <label class="text-light">Nome</label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="col">
                        <label class="text-light">Sobrenome</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="text-light">RA</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div class="invalid-feedback">
                          Por favor insira um RA Valido.
                        </div>
                    </div>
                <div class="form-group">
                  <label class="text-light">E-mail</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div class="invalid-feedback">
                    Por favor insira um E-mail Válido.
                  </div>
                </div>
                <div class="form-group">
                  <label class="exampleInputPassword1 text-light">Senha</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                  <br>
                  <div class="invalid-feedback">
                    Senha incorreta.
                  </div>
                </div>
                <!-- <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
                 <a href="" type="submit" class="btn btn-block" id="btnlogin"> <b id="textbtn"> CRIAR CONTA </b></a>
              </form>
        </div>
      </div>
    <footer>
        <!-- JS -->
        <script src="public/js/jquery.min.js"></script>
        <script src="public/js/bootstrap.bundle.min.js"></script>
    </footer>
</body>
</html>
