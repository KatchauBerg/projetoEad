<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respostas</title>
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
    <div class="container-xl text-left text-brand h5"> RESPOSTAS </div>
    <div class="container-xl" style="background-color:#1A7BA3; height: 100vh;">
      <div class="card" style="max-width:1000px;" id="cardreclamalistaresponde">
          <div class="card-body">
            <div class="row justify-content-md-center" style="margin:auto;">
              <div class="col col-sm">
                <h6 class="text-left"> "nome mediador do que respondeu"  </h6>
              </div>
              <div class="col-sm">
                <h6 class="text-right">"Assunto"</h6>
              </div>
           </div>
            <hr>
            <div class="row justify-content-md-center" style="margin:auto; height: 220px;">
                <div class="col col-sm text-left">
                   "Resposta da reclamação"  "Resposta da reclamação" "Resposta da reclamação" "Resposta da reclamação" "Resposta da reclamação" "Resposta da reclamação" "Resposta da reclamação" "Resposta da reclamação"
                </div>
                  </div>
            </div>
        </div>
      </div>
    <footer>
        <!-- JS -->
        <script src="public/js/jquery.min.js"></script>
        <script src="public/js/bootstrap.bundle.min.js"></script>
    </footer>
</body>
</html>