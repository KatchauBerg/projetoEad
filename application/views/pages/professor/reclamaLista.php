<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de reclamações</title>
        <!-- CSS - BOOTSTRAP -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
   <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #25AAE1;">
      <ul class="navbar-nav">
        <li class="nav-item align-center" >
          <img src="public/css/LOGO-UNIVEM.png" width="25" height="35"class="d-inline-block align-middle shadow" alt="">
          <b class="text-brand h4 align-middle" >MDC -   UNIVEM</b>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto ">
        <li class="nav-item">
            <a class="nav-link" href="<?=base_url('login')?>"><img src="public/css/pepicons_leave.png" width="30px" padding="10px 2px"></a>
        </li>
      </ul>
    </nav>
    <br>
    <p class="text-brand h5 text-center">LISTA DE RECLAMAÇÕES</p>
    <div class="container-xl" style="background-color:#1A7BA3; height: 100vh;">
      <a href="<?=base_url('responder')?>" style="text-decoration: none; color:black">  <div class="card" style="max-width:1000px;" id="cardreclamalistaresponde">
          <div class="card-body">
            <div class="row justify-content-md-center" style="margin:auto;">
              <div class="col col-sm">
                <h6 class="text-left"> Nome aluno:"Kevin De Souza Lima"  </h6>
              </div>
              <div class="col-md-auto">
                <h6 class="text-right">RA:"601969"</h6>
              </div>
              <div class="col-sm">
                <h6 class="text-right">Data de envio</h6>
              </div>
           </div>
           <div class="row justify-content-md-center" style="margin:auto;">
            <div class="col col-sm">
              <h6 class="text-left"> Assunto: "Erro ao gerar Login"  </h6>
            </div>
            <div class="col-sm">
              <h6 class="text-right">03/06/2022 às 10:38</h6>
            </div>
         </div>
            </div>
        </div>
      </a>
      </div>
    <footer>
        <!-- JS -->
        <script src="public/js/jquery.min.js"></script>
        <script src="public/js/bootstrap.bundle.min.js"></script>
    </footer>
</body>
</html>