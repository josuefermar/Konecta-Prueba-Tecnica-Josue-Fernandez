<!DOCTYPE html>
<html>
    <head>
        <title>Konecta Prueba Practica Josue Fernandez</title>
    </head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .actions{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }
        .main-container{
            height: 100%;
        }
        .table{
            height: 100%;
            border: 1px solid lightgray;
            border-radius: 17px;
            margin-top: 3%;
            padding: 4%;
        }
    </style>
    <body>
        <div class="container">
            <?php 
                $this->load->view ('shared/nav', ['action' => $action]);
                echo $message;
                // echo '<pre>'; print_r($employees); echo '</pre>';
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Fecha De Ingreso</th>
                        <th>Salario</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($employees as &$employee) {
                            echo '
                                <tr>
                                    <td>'.$employee->name.'</td>
                                    <td>'.$employee->admission_date.'</td>
                                    <td>'.$employee->salary.'</td>
                                </tr>
                            ';
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>