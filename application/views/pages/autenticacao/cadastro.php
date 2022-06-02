<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
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
    </nav>
    <div class="card" id="cardlogin">
        <div class="card-body">
            <h5 class="card-title text-center text-light">CADASTRO</h5>
            <br>
            <form>
                <div class="row">
                      <div class="col">
                        <label class="text-light">Nome</label>
                        <input type="text" class="form-control" id= "txtNome">
                      </div>
                      <div class="col">
                        <label class="text-light" >Sobrenome</label>
                        <input type="text" id="txtSobreNome" class="form-control">
                      </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="text-light">RA</label>
                        <input type="number" class="form-control" id= "numRa" aria-describedby="emailHelp">
                        <div class="invalid-feedback">
                          Por favor insira um RA Valido.
                        </div>
                    </div>
                    <div class="form-group" style="width: 150px">
                      <label class= "text-light">Tipo</label>
                      <select class="bs-select form-control" id="cmbOpcao">
                          <option value="0" selected>Aluno</option>
                          <option value="1">Professor</option>
                      </select>
                    </div>
                <div class="form-group">
                  <label class="text-light">E-mail</label>
                  <input type="email" class="form-control" id="txtEmail" aria-describedby="emailHelp">
                  <div class="invalid-feedback">
                    Por favor insira um E-mail Válido.
                  </div>
                </div>
                <div class="form-group">
                  <label class="exampleInputPassword1 text-light">Senha</label>
                  <input type="password" class="form-control" id= "txtSenha">
                  <br>
                  <div class="invalid-feedback">
                    Senha incorreta.
                  </div>
                </div>
                 <button type="button" class="btn btn-block" id="btnCadastro">CRIAR CONTA</button>
              </form>
        </div>
    </div>
    <footer>
        <!-- JS -->
        <script src="<?=base_url('public/js/jquery.min.js');?>"></script>
        <script src="<?=base_url('public/js/bootstrap.bundle.min.js');?>"></script>
    </footer>
</body>
</html>

<script>

  var base = '<?=base_url('cadastro')?>'
  $('#txtNome').val('Kevin');
  $('#txtSobreNome').val('Lima');
  $('#numRa').val(601969);
  $('#txtEmail').val('kevinlima138@gmail.com');

  $("#btnCadastro").click(function()
  {
    enviaDadosCadastro();
  });

  function enviaDadosCadastro()
  {
    $.post(
      base + '/dadosCadastro',
      {
        nome:$('#txtNome').val(),
        sobreNome:$('#txtSobreNome').val(),
        ra: $('#numRa').val(),
        email:$('#txtEmail').val(),
        senha: $("#txtSenha").val(),
        valorOption: $('#cmbOpcao').val()
      }
    );
  }

</script>