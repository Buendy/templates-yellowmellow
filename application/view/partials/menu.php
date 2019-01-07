<?php  ?>

<div class="content">
    <div class="navbar">
        <a href="<?php echo URL; ?>">INICIO</a>
        <?php if(!isset($_SESSION['userConSesionIniciada']['rol'])) : ?>
            <a href="<?php echo URL; ?>login" class="float-left">INICIAR SESION</a>
        <?php endif ?>
        <?php if(isset($_SESSION['userConSesionIniciada']['rol'])) : ?>
            <a href="<?php echo URL; ?>logOut" >Cerrar sesión</a>
        <?php endif ?>
        <a href="<?php echo URL; ?>home/ejemplo1">EJEMPLO 1</a>
        <a href="<?php echo URL; ?>home/ejemplo2">EJEMPLO 2</a>


    </div>
</div>
