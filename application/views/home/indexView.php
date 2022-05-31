<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login</title>
          <!-- CSS - BOOTSTRAP -->
      <link rel="stylesheet" href="<?=base_url('public/css/bootstrap.min.css');?>">
      <link rel="stylesheet" href="<?=base_url('public/css/style.css');?>">
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #25AAE1;">
        <ul class="navbar-nav" id="navbar">
          <li class="nav-item align-center" >
            <img src="<?=base_url('public/css/LOGO-UNIVEM.png');?>" width="25" height="35"class="d-inline-block align-middle shadow" alt="">
            <b class="text-brand h4 align-middle" >MDC -   UNIVEM</b>
          </li>
        </ul>
      </nav>
      <div class="card" id="cardlogin">
          <div class="card-body">
              <h5 class="card-title text-center text-light">LOGIN</h5>
              <form>
                  <div class="form-group">
                    <label class="text-light">RA</label>
                    <input type="number" class="form-control" id="numRa" aria-describedby="emailHelp">
                    <div class="invalid-feedback">
                      Por favor insira um RA Valido.
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="exampleInputPassword1 text-light">Senha</label>
                    <input type="password" class="form-control" id="txtPassword"> <!-- Input SENHA -->
                    <small  id="emailHelp" class="form-text text-muted text-light"> <a href="Cadastro.html" > Não tenho conta </a></small>
                    <div class="invalid-feedback">
                      Senha incorreta.
                    </div>

                  </div>
                  <!-- <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->
                  <button type="submit" class="btn btn-block" id="btnlogin"> <b id="textbtn"> ENTRAR </b></button> <!-- Botão Entrar (Envio Formulario) -->
                </form>
          </div>
        </div>

      <footer>
          <!-- JS -->
          <script src="<?=base_url('public/js/jquery.min.js');?>"</script>
          <script src="<?=base_url('public/js/bootstrap.bundle.min.js')?>"></script>
      </footer>
  </body>
</html>


function getDadosLogin()
{
  $('#txtPassword').val("");
  $('#numRa').val("");
}
