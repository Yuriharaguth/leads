<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.ico">
  
    <title>Apae</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/alteracoes.css" rel="stylesheet">

  </head>

  <body>


          <div class="row retira-margin-top">
            <div class="col-md-8 col-md-offset-2">

              <div class="panel-body">
                <div class="page-header">
                  <h2>Cadastro LEADS</h2>
                </div>
              </div>

              <div class="row">
                <div class="panel-body">
                  <div class="col-md-10">
                    <p>Ajude com qualquer valor, cadastre seu telefone para entrarmos em contato</p>
                  </div>
                </div>
              </div>


          </div>
        </div>

   

              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  @if (count($errors) > 0)
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif

                  @if (session('message'))
                  <div class="alert alert-danger">
                    {{ session('message') }}
                  </div>
                  @endif

                  <h3>Informações de Cadastro:</h3>
                  <form action="<?= route('cadastro.store') ?>" method="POST">
                    
                    <?= csrf_field(); ?>
                    
                    <div class="form-group">
                      <label for="nome">Nome *</label>
                      <input type="text" class="form-control" name="nome" placeholder="Nome">
                    </div>

                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    
                    <div class="form-group">
                      <label for="Telefone Residencial">Telefone *</label>
                      <input type="tel" class="form-control" name="telefone" placeholder="Telefone">
                    </div>
                    
                    <button type="submit" class="btn btn-default">Enviar</button>
                    
                  </form>
                </div>
              </div>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
