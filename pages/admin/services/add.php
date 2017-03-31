<?php
    $app = App::getInstance();

    if($_POST){
        if(!empty($_POST['name'] && $_POST['description'])){
            $res = $app->getTable('service')->create([
                                                    'name'=>$_POST['name'],
                                                    'description'=>$_POST['description']
                                                    ]);
            if($res){
                // message flash
                header('location: admin.php');
            }
        }
    }
?>

<div class="row">

    <h1>Ajouter un service</h1>

    <hr class="my-separator">

    <form class="form-horizontal" method="post" action="admin.php?p=services.add">

        <!-- NOM DU SERVICE -->
        <div class="form-group">
            <label for="name" class="col-sm-1 control-label">Nom</label>
            <div class="col-sm-11">
                <input class="form-control" type="text" name="name" placeholder="Veuillez entrer le nom du service" required maxlength="50" />
            </div>
        </div>

        <!-- DESCRIPTION DU SERVICE -->
        <div class="form-group">
            <label for="description" class="col-sm-1 control-label">Description</label>
            <div class="col-sm-11">
                <input class="form-control" type="text" name="description" placeholder="Veuillez entrer une courte description" required maxlength="100" />
            </div>
        </div>

        <!-- BOUTON SAUVEGARDER -->
        <div class="form-group">
            <div class="col-sm-offset-1 col-sm-11">
                <button type="submit" class="btn btn-info size">Ajouter</button>
            </div>
        </div>
    </form>

    <a href="admin.php" style="width:91.66666667%" class="btn btn-default pull-right" role="button">Retour</a>

    </br>
    </br>
    </br>
</div>