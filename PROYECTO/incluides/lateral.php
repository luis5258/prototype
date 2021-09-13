<?php require_once 'incluides/helpers.php'; ?>

<aside id="sidebar">
    <div id="login" class="bloque">
            <h3>Identificarse</h3>
                <form action="login.php" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                    <label for="email">Password</label>
                    <input type="password" name="password">
                    <input type="submit" value="Iniciar sesión">
                </form>
            </div>

            <div id="register" class="bloque">
                <?php if(isset($_SESSION['errores'])) :  ?>
                    <?php var_dump($_SESSION['errores']);   ?> 
                <?php endif; ?>    
                
                <h3>Registrarse</h3>  
                <form action="registro.php" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
                    <label for="email">Password</label>
                    <input type="password" name="password">

                    <input type="submit" name="submit" value="Registrarse">
                </form>
            </div>
        </aside>
    
