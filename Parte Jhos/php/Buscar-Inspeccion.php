<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
         <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet"> 

    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <link rel="stylesheet" href="Estilos/style-BuscarInsp.css">
    <link rel="stylesheet" type="text/css" href="Estilos/Boton.css">
    <title>Continuar Inspección</title>


</head>
<body>
    <!-- Para que haya una caja que contenga al registro y la imagen -->
    <section class="contact-box">
        <div class="row no-gutters bg-dark">


           <!-- Caja de la izquierda -->
            <div class="col-xl-7 col-lg-12 d-flex ">
               <div class="container align-self-center p-6">
                   <h1 class="font-weight-bold mb-3">Ingrese o busque el código de la inspección</h1>

                   <!-- <div class="form-group">
                       <button class="btn btn-outline-dark d-inline-block text-light mr-2 mb-3 width-100"><i class="icon ion-logo-google lead align-middle mr-2"></i> Google </button>
                       <button class="btn btn-outline-dark d-inline-block text-light mb-3 width-100"><i class="icon ion-logo-facebook lead align-middle mr-2"></i> Facebook</button>
                   </div> -->

                   <p class="text-muted mb-5"></p>
                   <form>
                       <div class="form-row mb-2">
                           <div class="form-group col-md-6">
                               <label class="font-weight-bold">Codigo de inspección <span class="text-danger">*</span></label>
                               <input type="text" class="form-control" placeholder="Ingrese código">
                           </div>
                           
                       </div>
                       <div class="form-group col-md-6">
                           <label class="font-weight-bold">Buscar <span class="text-danger"></span></label>
                            <div class="box" >
                                <input type="text" name="search" placeholder="Buscar código" class="src" autocomplete="off">
                            </div>
                       </div>

                       <div>
                        <textarea rows="10" cols="50"></textarea>
                       </div>
                       

                       <div class="form-group mb-5">
                           
                       </div>
                       

                       <button class="btn btn-primary width-100">Regresar</button>
           
                       <button class="btn btn-primary width-100">Ingresar</button>

                   </form>

                   <small class="d-inline-block text-muted mt-5"> </small>
               </div>
           </div>






           <!-- Caja de la derecha -->
           <div class="col-xl-5 col-lg-12 register-bg ">
               <div class="position-absolute testiomonial p-4">
                   <!-- <h3 class="font-weight-bold text-light">MBH Capacitaciones - Cajamarca </h3>
                   <p class="lead text-light">La nueva etapa de la revolución digital se aproxima.</p> -->
               </div>

            </div>
        </div> 
     </section>
  

   <!-- Optional JavaScript; choose one of the two! -->

   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <!-- Option 2: Separate Popper and Bootstrap JS -->
   <!--
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   -->
    
    
</body>
</html>