<?php
$eventID = $_GET['id'];
switch ($eventID) {
    case '01':
		?>
        <p class="event-title">Congreso Chazaq</p>
		<p class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" height="240" frameborder="0" src="https://www.youtube.com/embed/oHpIVlIG3nA"></iframe>
		</p>
		<p><a class="btn btn-embossed btn-primary" href="#" role="button">Ver Detalles</a> 
		<a class="btn btn-embossed btn-info" href="#" role="button">Registro</a></p>
		<?php
        break;
    case '02':
		?>
        <p class="event-title">Vida Victoriosa</p>
		<?php
        break;
    case '03':
		?>
        <p class="event-title">Congreso Nacional de Líderes</p>
		<?php
        break;
    case '04':
		?>
        <p class="event-title">Oración por las Naciones</p>
		<?php
        break;
    case '05':
		?>
        <p class="event-title">Retiro para Matrimonios / Contra Viento y Marea</p>
		<?php
        break;
    default:
        echo '<img class="img-responsive " src="img/ipad.png" alt="">';	
}
?>