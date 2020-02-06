<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Currículo Gabriel Garcia</title>

    <link rel="stylesheet" href="<?php BASE_URL;?>assets/css/master.css">
    <link rel="stylesheet" href="<?php BASE_URL;?>assets/css/media.css">
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:400,500,700" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7302aef868.js" crossorigin="anonymous"></script>

</head>
<body>
    <header id="menu">
        <nav class="navbar">
            <ul>
                <li class="li__closebtn"><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
                <li><a href="#banner">Início</a></li>
                <li><a href="#perfil">Perfil</a></li>
                <li><a href="#experiencia">Experiências</a></li>
                <li><a href="#habilidades">Proficiência</a></li>
                <li><a href="#projetos">Projetos</a></li>
                <li><a href="#outros">Cursos e Certificados</a></li>
            </ul>
        </nav>
        <button class="openbtn" onclick="openNav()"><i class="fas fa-bars"></i></button>
    </header>
    <?php $this->loadViewInTemplate($viewName, $viewData); ?>
    <footer>
        <p>Pouso Alegre - MG <br> 2020</p>
        <div>
            <a href="https://www.linkedin.com/in/glggarcia/" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://github.com/glggarcia" target="_blank"><i class="fab fa-github" target="_blank"></i></a>
        </div>
        <!--
        -->
    </footer>
    <script src="<?php BASE_URL; ?>assets/js/master.js"></script>
</body>
</html>

