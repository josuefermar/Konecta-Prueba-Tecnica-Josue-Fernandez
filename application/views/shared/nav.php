
<div class="title text-center">
    <h1 style="margin-top: 2%">Prueba Práctica</h1>
</div>
<ul class="nav nav-tabs actions">
    <li class="nav-item">
        <?php
            $this->load->helper('url');
            echo($action == "show-employee" ? '<a href="'.site_url('index.php/Employee/show').'" class="nav-link active">Ver Empleados</a>' : ' <a href="'.site_url('index.php/Employee/show').'" class="nav-link">Ver Empleados</a>');
        ?>
    </li>
    <li class="nav-item">
        <?php
            echo($action == "create-employee" ? '<a href="'.site_url("index.php/Employee/create").'" class="nav-link active">Registrar Empleados</a>' : '<a href="'.site_url("index.php/Employee/create").'" class="nav-link">Registrar Empleados</a>');
        ?>
    </li>
    <li class="nav-item">
        <?php
            echo($action == "show-aplication" ? '<a href="'.site_url("index.php/Aplication/show").'" class="nav-link active">Ver Solicitudes</a>' : '<a href="'.site_url("index.php/Aplication/show").'" class="nav-link">Ver Solicitudes</a>');
        ?>
    </li>
    <li class="nav-item">
        <?php
            echo($action == "create-aplication" ? '<a href="'.site_url("index.php/Aplication/create").'" class="nav-link active">Crear Solicitud</a>' : '<a href="'.site_url("index.php/Aplication/create").'" class="nav-link">Crear Solicitud</a>');
        ?>
    </li>
</ul>