<?php
$listID = $_GET['id'];
switch ($listID) {
    case '01': //Alabanzas
		?>
        <div class="col-md-6 col-md-offset-3 text-center wrap_title">
            <h2>Alabanzas</h2>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center wrap_title embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" frameborder="0" src="https://www.youtube.com/embed/?listType=playlist&list=PLv8zMDl0a1X-OB_h238Kzqh-7tWcljpPY" allowfullscreen></iframe>
            </div>
        </div>
		<?php
        break;
    case '02': //Predicaciones
		?>
        <div class="col-md-6 col-md-offset-3 text-center wrap_title">
            <h2>Predicaciones</h2>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center wrap_title embed-responsive embed-responsive-16by9">
            <!-- <iframe class="embed-responsive-item" frameborder="0" src="https://www.youtube.com/embed/?listType=user_uploads&list=cccuernavacaoficial" allowfullscreen></iframe> -->
            <iframe class="embed-responsive-item" frameborder="0" src="https://www.youtube.com/embed/?listType=playlist&list=PLv8zMDl0a1X_a64AfrIR42X0ciVEXgK8r" allowfullscreen></iframe>
            </div>
        </div>
		<?php
        break;
    case '03': //Pregúntale al Pastor
        ?>
        <div class="col-md-10 col-md-offset-1 text-center wrap_title">
            <h2>Pregúntale al Pastor</h2>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center wrap_title embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" frameborder="0" src="https://www.youtube.com/embed/?listType=playlist&list=PLv8zMDl0a1X88qerBxZ_HxXMSYglGMX0-" allowfullscreen></iframe>
            </div>
        </div>
        <?php
        break;
    case '04': //Te habla la Pastora
        ?>
        <div class="col-md-10 col-md-offset-1 text-center wrap_title">
            <h2>Te habla la Pastora</h2>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center wrap_title embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" frameborder="0" src="https://www.youtube.com/embed/?listType=playlist&list=PLv8zMDl0a1X9Z_ceeDSLGY1JbaWR1kgSl" allowfullscreen></iframe>
            </div>
        </div>
        <?php
        break;
    case '05': //Hablando de...
		?>
        <div class="col-md-6 col-md-offset-3 text-center wrap_title">
            <h2>Hablando de</h2>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center wrap_title embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" frameborder="0" src="https://www.youtube.com/embed/?listType=playlist&list=PLv8zMDl0a1X95p8GX-JjoI-P0uRo_lUmz" allowfullscreen></iframe>
            </div>
        </div>
		<?php
        break;

    default:
        ?>
        <div class="col-md-10 col-md-offset-1 text-center wrap_title">
            <h2>Video del día</h2>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center wrap_title embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" frameborder="0" src="https://www.youtube.com/embed/?listType=user_uploads&list=cccuernavacaoficial" allowfullscreen></iframe>
            </div>
        </div>
        <?php
        break;
}
?>