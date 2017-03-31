<div class="row">
    <div class="col-md-12">
        <h2>Liste des services</h2>
        <hr class="my-separator">
        <table class="col-md-12 table table-hover">
            <thead>
                <tr>
                    <th>Nom du service</th>
                    <th>Description du service</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach(App::getInstance()->getTable('service')->all() as $service): ?>
                    <tr>
                        <td><?= $service->name ?></td>
                        <td><?= $service->description ?></td>
                        <td>
                            <a class="btn btn-xs btn-info" href="admin.php?p=services.edit&id=<?= $service->id ?>">Modifier</a>
                            <form style="display: inline-block;" action="admin.php?p=services.delete" method="post">
                            <input type="hidden" name="id" value="<?= $service->id; ?>">
                            <input type="submit" class="btn btn-xs btn-danger" name="OK" value="X">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="admin.php" class="btn btn-default pull-right" role="button">Retour</a>
    </div>
</div>