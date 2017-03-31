<div class="row">
    <div class="col-md-9">
        <h2>Liste des utilisateurs</h2>
        <hr class="my-separator">
        <table class="col-md-12 table table-hover">
            <thead>
                <tr>
                    <th>Nom / Prénom</th>
                    <th>Âge</th>
                    <th>Adresse / Code postal</th>
                    <th>Téléphone</th>
                    <th>Service</th>
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
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="col-md-3">
        <h2>Trier par services</h2>
        <hr class="my-separator">
        <form action="index.php" method="post">
            <select class="form-control" name="service">
                <option disabled selected hidden>Sélectionner un service</option>
                <?php foreach(App::getInstance()->getTable('service')->all() as $service): ?>
                    <option value="<?= $service->id ?>"><?= $service->name ?></option>
                <?php endforeach; ?>
            </select>
            </br>
            <input type="submit" class="btn btn-info size" value="Lancer le tri" />
        </form>
    </div> 
</div>