
        <div class="rows">
            <?php  foreach ($datos as $key => $publication):?>
            <article class="col-s-12 col-m-6 col-l-4 p4">
                <div class="card">
                <h3>
                    <?= $publication['title']?>
                </h3>
                <p>
                    <?= substr( $publication['publication'],0,300)?>
                </p>
                <a href="?url=detalle&action=view&id=<?=$publication['id_publication']?>" class="btn btn--primary ">Leer mas</a>
                
                <a href="?url=favorite&action=delete&id=<?=$publication['id_favorite']?>" class="btn btn--primary ">Eliminar</a>
                </div>
            </article>
            <?php endforeach ?>
    
        </div>

       </div>
</body>
</html>