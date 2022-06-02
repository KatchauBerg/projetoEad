<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reclamação</title>
        <!-- CSS - BOOTSTRAP -->
    <link rel="stylesheet" href="<?=base_url('public/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?=base_url('public/css/style.css');?>">
</head>
<body>
    <!-- Image and text -->
   <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #25AAE1;">
      <ul class="navbar-nav">
        <li class="nav-item align-center" >
          <img src="public/css/LOGO-UNIVEM.png" width="25" height="35"class="d-inline-block align-middle shadow" alt="">
          <b class="text-brand h4 align-middle" >MDC - UNIVEM</b>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="<?=base_url('login')?>"><img src="<?=base_url('public/css/pepicons_leave.png')?>" width="30px" padding="10px 2px"></a>
        </li>
      </ul>
    </nav>
    <div class="card" id="cardlogin">
        <div class="card-body">
            <br>
            <br>
            <h6 class="card-title text-center text-light">Digite aqui o assunto e sua reclamação sobre a nossa instituição </h6>
            <form>
                <div class="form-group">
                <div style="padding: 8px 0px;">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Assunto ">
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                    <br>
                    <button class="btn float-right" style="padding: 8px 0px;"></svg><img src='<?=base_url('public/css/send.png');?>' width="50px" height="40px" id="btnEnviar"> </button>
                  </div>
                  <br>
              <a href="<?=base_url('respostas')?>" class="btn btn-block" id="btnlogin"> <b id="textbtn"> VER RESPOSTAS </b></a>
              </form>
        </div>
      </div>

    <footer>
        <!-- JS -->
        <script src="<?=base_url('public/js/jquery.min.js')?>"></script>
        <script src="<?=base_url('public/js/bootstrap.bundle.min.js')?>"></script>
    </footer>
</body>
</html>