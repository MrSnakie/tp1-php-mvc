<div class="row">
    <div class="col-md-9">
        <h2>Liste des utilisateurs</h2>
        <hr class="my-separator">
        <table class="col-md-12 table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Date de naissance</th>
                    <th>Adresse</th>
                    <th>Code postal</th>
                    <th>Téléphone</th>
                    <th>Service</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach(App::getInstance()->getTable('users')->all() as $user): ?>
                    <tr>
                        <td><?= $user->id ?></td>
                        <td><?= $user->first_name ?></td>
                        <td><?= $user->last_name ?></td>
                        <td><?= $user->birth_date ?></td>
                        <td><?= $user->adress ?></td>
                        <td><?= $user->postal_code ?></td>
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
        <ul>
            
        </ul>
    </div> 
</div>