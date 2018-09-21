<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>WebBoostrap</title>
        <link rel ="stylesheet" href="css/normalize.css"/> 
        <link rel ="stylesheet" href="css/bootstrap.css"/>
        <link rel ="stylesheet" href="css/newCascadeStyleSheet.css"/>
    </head>
    <body>
        <header>
            <!-- Image and text -->
                <nav class="navbar navbar-light barra-nav">
                  <a class="navbar-brand" href="#">
                      <img src="img/VENTAS.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
                    Bootstrap
                  </a>
                </nav>
         </header>
        <section>
        <div class="container Contenedor">
            <div class="Registro">
            
                <img class="img-reponsive logo" src="img/descarga.jpg">
            </div>
            <form class="my-5">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="Nombre">Nombre</label>
                            <input type="text" class="form-control" id="Nombre" placeholder="Ingrese Nombre"name="nombre">
                            <small id="Nombrehelp" class="form-text text-muted">Sus Datos nunca seran compartidos</small>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="Apellido">Apellido</label>
                            <input type="text" class="form-control" id="Apellido" placeholder="Ingrese Apellido"name="apellido">
                            <small id="Apellidoehelp" class="form-text text-muted">Sus Datos nunca seran compartidos</small>
                        </div>  
                    </div> 
             
                         
                        
                  <div class="row">
                    <div class="col">
                        <div class="form-group">
                        <label for="Pais">Pais</label>
                        <select class="form-control" id="pais"name="pais">
                            <option value="colombia">colombia</option>
                          <option value="peru">peru</option>
                          <option value="brasil">brasil</option>
                          <option value="chile">chile</option>
                          <option value="argentina">argentina</option>
                        </select> 
                        </div>
                   </div>
                    <div class="col">
                        
                        <div class="form-group">
                            
                    <label for="Departamento">Departamento</label>
                        <select class="form-control" id="departamento"name="departamento">
                          <option value="Antioquia">Antioquia</option>
                          <option value="Amazonas">Amazonas</option>
                          <option value="Bolivia">Bolivar</option>
                          <option value="Valle" >Valle</option>
                          <option>Choco</option>
                        </select> 
                        </div>  
                       </div>  
                        
                    <div class="col">
                        <div class="form-group">
                        <label for="Ciudad">Ciudad</label>
                     <select class="form-control" id="ciudad"name="ciudad">
                          <option>medellin</option>
                          <option>cali</option>
                          <option>Bogota</option>
                          <option>cartagena</option>
                          <option>cucuta</option>
                        </select> 
                        
                      </div>   
                      </div>  
                      <div class="row">
                          <div class="col">
                      <div class="form-group">
                     <label for="telefono">Telefono</label>
                     <input type="text" class="form-control" id="telefono" placeholder="Ingrese telefono">
                     <small id="telhelp" class="form-text text-muted">Sus Datos nunca seran compartidos</small>
                     </div>
                              </div>
                     <div class="row">
                          <div class="col">
                      <div class="form-group">
                     <label for="Email">Email</label>
                     <input type="email" class="form-control" id="email" placeholder="Ingrese email">
                     <small id="emailhelp" class="form-text text-muted">Sus Datos nunca seran compartidos</small>
                     </div>     
                        </div>         
                    </div> 
                           
                </div>
             </div>        
             <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
             </div>
             <div class="form-group form-check">
             <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
             <button type="submit" class="btn btn-primary">Submit</button>
             </form>
        </div>
        </section>
        <footer>
            <div class="container-fluid style-footer">
                <h2>&copy DERECHOS RESERVADOS</h2>
            </div>
            
        </footer>
       
            <script src="js/jquery-3.3.1.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.bundle.min.js"></script>
    </body>
    <?php
        // put your code here
        ?>
</html>
