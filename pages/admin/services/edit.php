<?php
    $app = App::getInstance();

    if($_POST){
        if(!empty($_POST['id'] && $_POST['name'] && $_POST['description'])){
            $res = $app->getTable('service')->update($_POST['id'], [
                                                                'name'=>$_POST['name'],
                                                                'description'=>$_POST['description']
                                                                ]);
            if($res){
                echo "<div class='alert alert-success'>La modification du service <em>« ".$_POST['name']." »</em> a été enregistré avec succès.</div>";
            }
        }
    }

    $service = $app->getTable('service')->find($_GET['id']);
    if ($service===false) {
        $app->notFound();
    }
    $app->name = $service->name;
?>

<div class="row">

    <h1>Edition de l'utilisateur</h1>

    <hr class="my-separator">

    <form class="form-horizontal" method="post" action="admin.php?p=services.edit&id=<?= $service->id; ?>">
        <input type="hidden" name="id" value="<?= $service->id; ?>" />

        <!-- NOM DU SERVICE -->
        <div class="form-group">
            <label for="name" class="col-sm-1 control-label">Nom</label>
            <div class="col-sm-11">
                <input class="form-control" type="text" name="name" value="<?= $service->name ?>" required maxlength="50" />
            </div>
        </div>

        <!-- DESCRIPTION DU SERVICE -->
        <div class="form-group">
            <label for="description" class="col-sm-1 control-label">Description</label>
            <div class="col-sm-11">
                <input class="form-control" type="text" name="description" value="<?= $service->description ?>" required maxlength="100" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-1 col-sm-11">
                <button type="submit" class="btn btn-info size">Sauvegarder</button>
            </div>
        </div>
    </form>

    <a href="admin.php?p=services.list" style="width:91.66666667%" class="btn btn-default pull-right" role="button">Retour</a>

    </br>
    </br>
    </br>
</div>