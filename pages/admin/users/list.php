<div class="row">
    <div class="col-md-12">
        <h2>Liste des utilisateurs</h2>
        <hr class="my-separator">
        <table class="col-md-12 table table-hover">
            <thead>
                <tr>
                    <th>Prénom / Nom</th>
                    <th>Âge</th>
                    <th>Adresse / Code postal</th>
                    <th>Téléphone</th>
                    <th>Service</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach(App::getInstance()->getTable('user')->byServiceName() as $user): ?>
                    <tr>
                        <td><?= $user->first_name .' '. $user->last_name ?></td>
                        <td><?= $user->age ?></td>
                        <td><?= $user->adress .' - '. $user->postal_code ?></td>
                        <td><?= $user->phone ?></td>
                        <td><?= $user->service ?></td>
                        <td>
                            <form style="display: inline-block;" action="admin.php?p=users.delete" method="post">
                            <input type="hidden" name="id" value="<?= $user->id; ?>">
                            <input type="submit" class="btn btn-xs btn-danger" name="OK" value="Supprimer">
                        </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="admin.php" class="btn btn-default pull-right" role="button">Retour</a>
    </div>

</div>

</br>
</br>
</br>