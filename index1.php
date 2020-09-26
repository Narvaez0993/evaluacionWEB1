<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo1.css">
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
        
                <form class="mt-5" action="index1.php" method="POST">
                    <h4 class="mt-3">#1. Operaciones Matematicas</h4>
                    <div class="form-group">
                     
                     <input type="number" class="form-control" placeholder="numero 1" name="num1">
                  </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Tipo de operacion</label>
                      <select class="form-control" name="opciones">
                         <option value="1">+</option>
                         <option value="2">-</option>
                         <option value="3">*</option>
                         <option value="4">/</option>
        
                         </select>
                    </div>
                    <div class="form-group">
                     
                     <input type="number" class="form-control" placeholder="numero 2" name="num2">
                  </div>
                    
                    
                    <button type="submit" class="btn btn-primary mt-3" name="botoncalcular">CALCULAR</button>

                </form>


                <?php if(isset($_POST["botoncalcular"])): ?>
                    <h4 class="text-danger mt-5 text-center">
                      <?php
                         $numero1 = $_POST["num1"];
                         $numero2 = $_POST["num2"];
                  

                         switch ($_POST["opciones"]){

                         case 1: echo("$numero1 + $numero2 = ").matematica::sumar($numero1,$numero2);break;
                         case 2: echo("$numero1 - $numero2 = ").matematica::restar($numero1,$numero2);break;
                         case 3: echo("$numero1 * $numero2 = ").matematica::multiplicar($numero1,$numero2);break;
                         case 4: echo("$numero1 / $numero2 = ").matematica::dividir($numero1,$numero2);break;
                    }
                ?>
                
                </h4>
                <?php endif  ?>

                    <?php 

                      class matematica{
                        public static function sumar($numero1,$numero2){
                        $suma = $numero1+$numero2;
                        return $suma;
                        }

                      public static function restar($numero1,$numero2){
                      $resta=$numero1-$numero2;
                      return $resta;
                       }

                      public static function multiplicar($numero1,$numero2){
                      $multipli=$numero1*$numero2;
                      return $multipli;
                      } 

                     public static function dividir($numero1,$numero2){
                     $divi=$numero1/$numero2;
                     return $divi;
                     }

                      }
      
                    ?>
              
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