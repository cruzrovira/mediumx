    <script src="public/js/ckeditor5/ckeditor.js"></script>
   <script src="public/js/ckeditor5/translations/es.js"></script>
   
   <div class="rows justify-center-s">
            <form action="?url=publication&action=add" method="post"  class="col-s-6">
                <p>Titulo:
                    <input type="text" name="title" class="control control-box full">
                </p>
                <p>
                <textarea name="publication"  id="editor"  class="control control-box full">                
                </textarea>

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
       <script src="public/js/ckeditor5/config.js"></script>
</body>
</html>