<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



    <title>Teste para estagio</title>
  </head>
  <body>
    
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a href="#" class="navbar-brand"><img src="images/branco.png" width="100px" height="50px"></a> 
        
        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="nav">
          
          <ul class="navbar-nav ml-auto">
            <li class="navbar-item">
                <a href="#" class="nav-link">Home</a>
            </li>

            <li class="navbar-item">
                <a href="#" class="nav-link">Quem somos</a>
            </li>

            <li class="navbar-item dropdown ">
                <a href="#" class="nav-link navbar-toggle" data-toggle="dropdown">Contato</a>

                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Telefone</a>
                    <a href="#" class="dropdown-item">Endereco</a>
                    <a href="#" class="dropdown-item">Whatsapp</a>
                </div>
            </li>
          </ul>          
        </div>
      </nav>

<div class="container">

    <h2 class="display-4 text-muted">Cadastre-se</h2>
    <hr>
      <form action="form.php" method="POST">
      
        <div class="form-group">
            <label for="nome">Nome:</label>
              <input class="form-control" type="text" name="name" placeholder="Digite seu nome completo"> <br>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
              <input class="form-control" type="text" name="email" placeholder="Digite seu nome email"> <br>
        </div>

      
    <p>Deseja receber informacoes sobre o curso?</p>  
    <div class="input-group">
           <div class="input-group-prepend">    
             <div class="radio"> 
                    <input type="radio" name="notification" value="sim">Sim <br>
                <input type="radio" name="notification" value="Nao">Nao <br>
             </div>                                
          </div>
    </div>      

       <input type="submit" class="btn btn-sucess">
        

      </form>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
