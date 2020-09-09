<!DOCTYPE html>
<html>
    <head>
        <title>Konecta Prueba Practica Josue Fernandez</title>
    </head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <style>
        .actions{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }
        .main-container{
            height: 100%;
            border: 1px solid lightgray;
            border-radius: 17px;
            margin-top: 3%;
            width: 65%;
            padding: 4%;
        }
        .hide{
            display: none;
        }
    </style>
    <body>
        <div class="container">
            <?php 
                $this->load->view ('shared/nav', ['action' => $action]);
            ?>

            <div class="container main-container">
                <h2> Crear Solicitud </h2>
                <?php
                    $this->load->helper('url');
                ?>
                <form action="<?php echo site_url('index.php/Aplication/new_aplication');?>" method="post">
                    <div class="alert alert-danger hide" role="alert">
                        No se pudo registrar el empleado, existen campos vacios. 
                    </div>
                    <div class="form-group">
                        <label for="id_employee">Empleado</label>
                        <select name="id_employee" id="id_employee" class="form-control" require>
                            <?php
                                foreach ($employees as &$employee) {
                                    echo '
                                        <option value='.$employee->id.'>'.$employee->name.'</option>
                                    ';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="code">Codigo</label>
                        <input type="text" class="form-control" id="code" name="code" placeholder="Ingresa el Codigo de la solicitud" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="description">Descripcion</label>
                        <textarea type="text" class="form-control" id="description" name="description" placeholder="" required autocomplete="off"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="summary">Resumen</label>
                        <textarea type="text" class="form-control" id="summary" name="summary" placeholder="" required autocomplete="off"></textarea>
                    </div>
                    <button type="submit" onclick="validateData()" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( document ).ready(() => {
            $( "#admission_date" ).datepicker();
        });

        function validateData(){
            let fields = document.getElementsByClassName('form-control');
            $( ".alert" ).addClass("hide");
            for (let index = 0; index < fields.length; index++) {
                const field = fields[index];
                if(field.value == null || field.value == undefined || field.value == 0){
                    $(field).css("border","1px solid red");
                    $( ".alert" ).removeClass("hide");
                }else{
                    $(field).css("border","1px solid #ced4da");
                }
            }
        }
    </script>
</html>