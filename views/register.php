      <div class="rows justify-center-s">
            <form action="?url=register&action=add" method="post" class="" class="col-4-s">
                <p>Email:
                    <input type="text" name="email" class="control control-box full">
                </p>
                <p>Contraseña:
                <input type="password" name="password" class="control control-box full">
                </p>
                <p>Confirmar contraseña:
                    <input type="password" name="password2" class="control control-box full">
                </p>
                <input type="submit"  class="btn btn--primary" value="Enviar">
                <input type="reset"  class="btn btn--primary" value="Cancelar">
                <ul>
                
                <?php foreach ($errores as $key => $error):?>
                    <li class="color--alert"><?= $error?></li>
                <?php endforeach?>
                </ul>
            </form>
        </div>
       </div>
</body>
</html>