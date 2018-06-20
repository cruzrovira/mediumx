      <div class="rows">
            
        <article class="col-s-12  p4">
                
                    <h3 class="rows align-baseline-s justify-between-s">
                        <?= $title?>
                        <img src="public/img/<?= $img?>" class="round userimg" >
                    </h3>
                    <p>
                        <?= $date?>
                    </p>
                
                <p>
                    <?=  $publication?>
                </p>
                </div>
            </article>
            <?php  if (isset($_SESSION['user']) && $favoriteInclude == false ) :?>
            <a href="?url=favorite&action=add&id=<?=$id_publication?>" class="btn btn--primary">Agergar a lista de favorito</a>
            <?php endif ?>
        </div>

       </div>
</body>
</html>