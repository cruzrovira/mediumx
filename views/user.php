 <div class="rows justify-center-s">
            <div  class="rows col-s-12 justify-center-s">
                 <table>
                    <thead>
                        <tr>
                            <th>N</th>
                            <th>Correo</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datos as $key => $user):?>
                                <tr>
                                    <td><?= $key+1 ?></td>
                                    <td><?= $user['email'] ?></td>

                                    <?php if($user['id_role']!=1):?>    
                                        <td> <a href="?url=user&action=delete&id=<?=$user['id_user']?>" class="btn btn--alert">Eliminar</a> </td>
                                    <?php endif ?>
                                    <?php if($user['id_role']==1):?>    
                                        <td> <a href="" class="btn ">Eliminar</a> </td>
                                    <?php endif ?>

                                </tr>
                        <?php endforeach?>
                    </tbody>
                 </table>
            </div>
        </div>
       </div>
       
</body>
</html>