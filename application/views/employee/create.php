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
                <h2> Registro de Empleado </h2><?php
                    $this->load->helper('url');
                ?>
                <form action="<?php echo site_url('index.php/Employee/new_employee');?>"  method="post">
                    <div class="alert alert-danger hide" role="alert">
                        No se pudo registrar el empleado, existen campos vacios. 
                    </div>
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Ingresa el Nombre del Empleado" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="admission_date">Fecha Ingreso</label>
                        <input type="text" class="form-control" id="admission_date" name="admission_date" placeholder="Ingresa su Fecha de Ingreso" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="salary">Salario</label>
                        <input type="number" class="form-control" id="salary" name="salary" placeholder="Ingresa el Salario" required autocomplete="off">
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