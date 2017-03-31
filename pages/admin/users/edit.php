<?php
    $app = App::getInstance();

    if($_POST){
        if(!empty($_POST['id'] && $_POST['first_name'] && $_POST['last_name'] && $_POST['birth_date'] && $_POST['adress'] && $_POST['postal_code'] && $_POST['phone'] && $_POST['service'])){
            $res = $app->getTable('user')->update($_POST['id'], [
                                                                'first_name'=>$_POST['first_name'],
                                                                'last_name'=>$_POST['last_name'],
                                                                'birth_date'=>$_POST['birth_date'],
                                                                'adress'=>$_POST['adress'],
                                                                'postal_code'=>$_POST['postal_code'],
                                                                'phone'=>$_POST['phone'],
                                                                'service_id'=>$_POST['service']
                                                                ]);
            if($res){
                echo "<div class='alert alert-success'>La modification de l'utilisateur <em>« ".$_POST['first_name']." ".$_POST['last_name']." »</em> a été enregistré avec succès.</div>";
            }
        }
    }

    $user = $app->getTable('user')->find($_GET['id']);
    if ($user===false) {
        $app->notFound();
    }
    $app->first_name = $user->first_name;
?>

<div class="row">

    <h1>Edition de l'utilisateur</h1>

    <hr class="my-separator">

    <form class="form-horizontal" method="post" action="admin.php?p=users.edit&id=<?= $user->id; ?>">
        <input type="hidden" name="id" value="<?= $user->id; ?>" />

        <!-- NOM DE L'UTILISATEUR -->
        <div class="form-group">
            <label for="first_name" class="col-sm-1 control-label">Nom</label>
            <div class="col-sm-11">
                <input class="form-control" type="text" name="first_name" value="<?= $user->first_name ?>" required maxlength="50" />
            </div>
        </div>

        <!-- PRÉNOM DE L'UTILISATEUR -->
        <div class="form-group">
            <label for="last_name" class="col-sm-1 control-label">Prénom</label>
            <div class="col-sm-11">
                <input class="form-control" type="text" name="last_name" value="<?= $user->last_name ?>" required maxlength="50" />
            </div>
        </div>

        <!-- DATE DE NAISSANCE DE L'UTILISATEUR -->
        <div class="form-group">
            <label for="birth_date" class="col-sm-1 control-label">Date de naissance</label>
            <div class="col-sm-11">
                <input class="form-control" type="date" name="birth_date" value="<?= $user->birth_date ?>" required />
            </div>
        </div>

        <!-- ADRESSE DE L'UTILISATEUR -->
        <div class="form-group">
            <label for="adress" class="col-sm-1 control-label">Adresse</label>
            <div class="col-sm-11">
                <input class="form-control" type="text" name="adress" value="<?= $user->adress ?>" required maxlength="100" />
            </div>
        </div>

        <!-- CODE POSTAL DE L'UTILISATEUR -->
        <div class="form-group">
            <label for="postal_code" class="col-sm-1 control-label">Code postal</label>
            <div class="col-sm-11">
                <input class="form-control" type="text" name="postal_code" value="<?= $user->postal_code ?>" required maxlength="5" />
            </div>
        </div>

        <!-- TÉLÉPHONE DE L'UTILISATEUR -->
        <div class="form-group">
            <label for="phone" class="col-sm-1 control-label">Téléphone</label>
            <div class="col-sm-11">
                <input class="form-control" type="text" name="phone" value="<?= $user->phone ?>" required maxlength="10" />
            </div>
        </div>

        <!-- SERVICE DE L'UTILISATEUR -->
        <div class="form-group">
            <label for="service" class="col-sm-1 control-label">Service</label>
            <div class="col-sm-11">
                <select class="form-control" name="service">
                    <?php foreach(App::getInstance()->getTable('service')->all() as $service): ?>
                        <option value="<?= $service->id ?>" <?= ($user->service_id==$service->id)?'selected="selected"' : ''?>>
                            <?= $service->name ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-1 col-sm-11">
                <button type="submit" class="btn btn-info size">Sauvegarder</button>
            </div>
        </div>
    </form>

    <a href="admin.php?p=users.list" style="width:91.66666667%" class="btn btn-default pull-right" role="button">Retour</a>

    </br>
    </br>
    </br>
</div>