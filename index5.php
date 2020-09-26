<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     <a class="navbar-brand" href="#">EVALUACIONWEB1</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
     </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index1.php">punto 1<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index2.php">punto 2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index3.php">punto 3</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index4.php">punto 4</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index5.php">punto 5</a>
      </li>
      
      
     </ul>
     
     </div>
     </nav>
    </header>

    <main>
       <div class="container">
          <div class="row justify-content-center">
             <div class="col-4">
             
             <form class="mt-5" action="index5.php" method="POST">
             <h4 class="row justify-content-center">#9. BIOTIPO </h4>
             <div class="row">
             <div class="col">
             <input type="text" class="form-control mt-4" placeholder="ESTATURA" name="altura">
             </div>
             <button type="submit" class="btn btn-primary mt-3" name="botoncalcular2">CALCULAR </button>
             </form>


              <?php if(isset($_POST["botoncalcular2"])): ?>

              <h4 class="text-danger mt-5 "> <?php 
                
                if(isset($_POST["botoncalcular2"])){
                    $estatura = $_POST["altura"];
 
                    if($estatura <"1.70"  ){
 
                      echo("EL BIO TIPO ES BAJO              ");
                    }
 
 
                    if($estatura  >= "1.70"   && $estatura < "1.80"){
 
                     echo("EL BIOTIPO ES PROMEDIO...");
 
 
                    }
 
                    if($estatura >= "1.80"){
 
                     echo("EL BIOTIPO ES SUPERIOR...");
 
 
                    }
 
 
 
                 }
                
                
                
                
                ?> </h4>

               
               <?php endif ?>




             </div>
          
          </div>
       
       </div>
    </main>

    <footer>
    
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>