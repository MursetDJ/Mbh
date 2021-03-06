<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet"> 

    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">


    <title>Datos de la inspeccion a realizar</title>


    <link rel="stylesheet" href="Estilos/style-registro.css">
    <link rel="stylesheet" href="Estilos/style-datosinspector.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <section class="contact-box">

        <h1 class="font-weight-bold mb-3"> Datos de Inspeccion </h1>


        <div class="row no-gutters bg-dark">

            <!-- Caja de la izquierda-->
            <div class="col-xl-6 col-lg-12 d-flex">

                <div class="container align-self-center p-6">


                    <form >

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Nombre de la inspección<span class="text-danger"></span></label>
                            <input type="text" class="form-control" placeholder="Nombre de la inspección">
                        </div>


                        <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Fecha de inspección</label>
                                <input type="date" class="form-control" placeholder="Ingrese Fecha">
                            </div>
                            
                        </div>

                        <div class="form-group mb-3">
                            <p>
                                Periodicidad
                                <select class="clase-lista-desplegable">
                                    <option disabled selected = "">Seleccionar</option>
                                    <optgroup label="No Periodica"></optgroup>
                                    <option >No periodica</option>
                                    <optgroup label="Periodica">
                                        <option >Diaria</option>
                                        <option >Semanal</option>
                                        <option >Mensual</option>
                                        <option >Trimestral</option>
                                        <option >Anual</option>
                                    </optgroup>
                                </select>
                            </p>
                        </div>

                        <div class="form-group mb-3">
                            <p>
                                Clasificación
                                <select class="clase-lista-desplegable" >
                                    <option disabled selected = "">Seleccionar</option>
                                    <option >Planificada</option>
                                    <option >No planificada</option>
                                </select>
                            </p>
                        </div>


                        <div class="form-group ">
                            <label class="font-weight-bold">Tipo<span class="text-danger" ></span></label>
                            <input type="text" class="form-control" placeholder="Ingrese Tipo">                           
            
                        </div>


                        <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Área Inspeccionada<span class="text-danger" ></span></label>
                                <input type="text" class="form-control" placeholder="Ingrese área inspeccionada">                           
                
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Sub área Inspeccionada<span class="text-danger" ></span></label>
                                <input type="text" class="form-control" placeholder="Ingrese sub área inspeccionada"> 
                            </div>
                        </div>


                        <div class="form-row mb-2">

                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Empresa Inspeccionada<span class="text-danger" ></span></label>
                                <input type="text" class="form-control" placeholder="Ingrese empresa inspeccionada">                           
                
                            </div>

                            <div class="form-group col-md-6 ">
                                <!-- Colocamos el checklist.
                                <input  type="checkbox" >
                                <label for=""> Es interno</label> -->
                            </div>
                        
                            
                        </div>

                        <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Responsable de Área<span class="text-danger" ></span></label>
                                <input type="text" class="form-control" placeholder="Ingrese responsable del área">                           
                
                            </div>
                            
                        </div>

                        

                    </form>
                </div>
            </div>



            <!-- Caja de la derecha -->
            <div class="col-xl-5 col-lg-12  ">
                <div class="p-4">
                    <form >
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Descripción de la inspección<span class="text-danger"></span></label>
                            <textarea rows="10" cols="50"></textarea>
                        </div>


                        <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                                <!-- <label class="font-weight-bold">Evidencia (Max 2Mb)<span class="text-danger" ></span></label> -->
                                <h3> Evidencia Max(2Mb) <input type="file" id="file"> <label for="file" class="btn-submit"> Subir Evidencia</label> </h3>
                
                            </div>

                        </div>

                        <p>
                            <div class="position-absolute testiomonial">

                        
                                <button class="btn btn-primary width-100">Guardar Inspección</button>
                
                                <button class="btn btn-primary width-100">Enviar Inspección</button>
                                
                            </div>
                        </p>
                        
                
                    </form>

        
                </div>

            </div>


        </div>
    </section>
    
</body>
</html>