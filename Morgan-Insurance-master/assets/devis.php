<?php include_once('sections/header.php'); ?>

<!-- Header Background -->
    <div class="bg-header">
        <div class="heading-txt">
            <h1 class="">Votre devis Morgan oTo personnalisé</h1>
            <h5>Votre devis Morgan oTo personnaliséVous souhaitez avoir plus de garanties? renseignez ce formulaire et obtenez la formule avec un prix adapté à votre besoin</h5>
        </div>
    </div>
<!-- end of Header Background -->

<!-- Devis Calculation -->
<div class="cal-sec">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <form>
                    <h2>Remplir le formulaire</h2>
                    <!-- Alert Danger -->
                    <style>#danger-notification { display:none;}</style>
                    <div id="danger-notification" class="alert alert-danger" role="alert"></div>

                    <div class="form-group">
                        <select id ="list_carburant" class="form-control">
                            <option>-- Type Carburant --</option>
                            <option value="Diesel">Diesel</option>
                            <option value="Essence">Essence</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select id="list_yn" class="form-control">
                            <option>-- Assistance --</option>
                            <option value="OUI">OUI</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" id="num_cv" placeholder="Nombre de chevaux">
                    </div>
                    <button type="button" onclick="myCalc()" class="btn btn-primary">Calculez</button>
                </form>
            </div>
            <div class="col-sm">
                <div class="result-cal">
                    <div class="row dh-value">
                        <div class="col">
                            <h6>Trif TTC / 1 ans</h6>
                            <h5 id="price_year">---- Dhs</h5>
                        </div>
                        <div class="col">
                            <h6>Trif TTC / 6 mois</h6>
                            <h5 id="price_six_mounth">---- Dhs</h5>
                        </div>
                    </div>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                            Responsabilité civile <span>+</span></a>
                        </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">C’est une garantie obligatoire. Elle couvre l’indemnisation des dommages corporels et matériels causés à des tiers par le véhicule assuré.
                            <p>Dans les limites prévues par le contrat d’assurance Morgan.</p>
                            <p>Capital assuré: <span>1000000 Dhs</span></p> 
                        </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                            Défense et recours <span>+</span></a>
                        </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">Garantie la défense des intérêts des personnes assurées dès lors qu’elles sont poursuivies à la suite d’un événement en relation avec le véhicule assuré. Elle permet aussi l’obtention de la réparation pécuniaire des dommages subis par le véhicule ainsi que les dommages non indemnisés par une autre assurance, subis par le véhicule assuré.</div>
                        <p>Dans les limites prévues par le contrat d’assurance Morgan.</p>
                        <p>Capital assuré: <span>10000 Dhs</span></p>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                            Assistance <span>+</span></a>
                        </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">Prestation optionnelle disponible 24/24 et 7j/7 , qui permet de fournir une aide rapide aux assurés en cas de difficultés rencontrées ( en cas de panne ou d’accident ) lors des déplacements du véhicule assuré</div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                            Évènement catastrophiques <span>+</span></a>
                        </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">Garantie régie par la loi n° 110-14 instituant le régime de couverture des événements catastrophiques et obligatoire à effet de janvier 2020.
                            <p>Conséquences d’évènements catastrophiques adossées à la garantie RC automobile:corporel 0 Dhs</p>
                            <p>Conséquences d’évènements catastrophiques adossées à la garantie RC automobile:materiel Valeur vénale Max. 200 000 DH</p>
                            <p>Conséquences d’évènements catastrophiques adossées aux garanties dommages au véhicule Valeur vénale Max. 200 000 DH</p>
                        </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                            Protection Passagers <span>+</span></a>
                        </h4>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">Protège toutes les personnes transportées gracieusement à bord de son véhicule, et ce indépendamment de sa responsabilité dans la survenance du sinistre. <br> <br>
                            <p> Décès               <span>10000 Dhs</span></p>
                            <p>Incapacité           <span>20000 Dhs</span></p>
                            <p>Frais hospitalisation<span>5000 Dhs</span></p>
                            <p>Frais médicaux       <span>1000 Dhs</span></p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of Devis Calculation -->

<?php include_once('sections/footer.php'); ?>