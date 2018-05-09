

<?php session_start();
$_SESSION["page"]="index";
require_once "header.php"?>
    <div class="img-acc text-center">
        <h1 class="titre">Projet transdisciplinaire "Cessna"</h1>
    </div>

<div class="presentation-projet">
	Ici, on présente tout le sujet.
</div>
<div class="img-acc2"></div>

<div class="container arborescence text-center">
    <div class="row" style="margin-top: 15px;margin-bottom: 15px;">
        <h3> Organisation du site : </h3>
        <br>
        <h5> <em>L'objectif de ce site étant en partie la transmission du savoir, voici l'organisation du site, il permet d'accéder rapidemment à un contenu. </em></h5>
    </div>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4 text-center">		<button type="button" class="btn btn-danger">Accueil</button>

        </div>
    </div>
    <div class="row text-center">
        <canvas id="lien1" width="1000" height="70" style="margin-left: 75px;"></canvas>
    </div>
    <div class="row">
        <div class="col-4 text-center">	<a href="Aeronautique/Aeronautique.php"><button type="button" class="btn btn-primary">Aéronautique</button></a>
        </div>
        <div class="col-4 text-center">	<a href="Software/BonneSimulation.php"><button type="button" class="btn btn-primary">Simulation</button></a>
        </div>
        <div class="col-4 text-center"> <a href="Hardware/MaterielADisposition.php"><button type="button" class="btn btn-primary">Matériel</button></a>
        </div>
    </div>
    <div class="row text-center">
        <canvas id="lien2" width="1000" height="50" style="margin-left: 75px;"></canvas>
    </div>
    <div class="row">
        <div class="col-4 text-center">	<a href="Aeronautique/Instrumentation.php"><button type="button" class="btn btn-outline-primary">Instrumentation</button></a>
        </div>
        <div class="col-4 text-center">	<a href="Software/BonneSimulation.php"><button type="button" class="btn btn-outline-primary">Bonne Simulation</button></a>
        </div>
        <div class="col-4 text-center">	<a href="Hardware/NoticeUtilisation.php"><button type="button" class="btn btn-outline-primary">Notice d'utilisation</button></a>
        </div>
    </div>
    <div class="row text-center">
        <canvas id="lien3" width="1000" height="50" style="margin-left: 75px;"></canvas>
    </div>
    <div class="row">
        <div class="col-4 text-center">	<a href="Aeronautique/PhaseVol.php"><button type="button" class="btn btn-outline-primary">Phase de vol</button></a>
        </div>
        <div class="col-4 text-center">	<a href="Software/FSX.php"><button type="button" class="btn btn-outline-primary">Flight Simulator X</button></a>
        </div>
        <div class="row text-center">
            <canvas id="lien4" width="1000" height="50" style="margin-left: 75px;"></canvas>
        </div>
    </div>
    <div class="row">
        <div class="col-4 text-center">	<a href="Aeronautique/NouvelleTechnologie.php"><button type="button" class="btn btn-outline-primary">Nouvelle technologie</button></a>
        </div>
        <div class="col-4 text-center">	<a href="Software/AttributionCommandes.php"><button type="button" class="btn btn-outline-primary">Attribution commandes</button></a>
        </div>
    </div>
    <div class="row text-center">
        <canvas id="lien5" width="1000" height="50" style="margin-left: 75px;"></canvas>
    </div>
    <div class="row">
        <div class="col-4 text-center"></div>
        <div class="col-4 text-center">	<a href="Software/CreationScenario.php"><button type="button" class="btn btn-outline-primary">Créer un scénario de Vol</button></a>
        </div>
    </div>
    <div class="row text-center">
        <canvas id="lien6" width="1000" height="50" style="margin-left: 75px;"></canvas>
    </div>
    <div class="row">
        <div class="col-4 text-center"></div>
        <div class="col-4 text-center">	<a href="Software/CreationScenarioPanne.php"><button type="button" class="btn btn-outline-primary">Scénario avec pannes</button></a>
        </div>
    </div>
</div>
<?php require_once "footer.php"?>
