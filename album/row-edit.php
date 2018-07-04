<?php

include_once __DIR__.'/../../core.php';

$brano = $dbo->fetchOne('SELECT * FROM am_brani WHERE id='.prepare($id_record));

echo '
<form action="'.ROOTDIR.'/editor.php?id_module='.$id_module.'&id_record='.$id_record.'&id_album='.get('id_album').'" method="post">
    <input type="hidden" name="op" value="row">
    <input type="hidden" name="backto" value="record-edit">

    <div class="row">
        <div class="col-md-6">
            {[ "type": "text", "label": "'.tr('Nome').'", "name": "nome", "required": 1, "value": "'.$brano['nome'].'" ]}
        </div>

        <div class="col-md-6">
            {[ "type": "number", "label": "'.tr('Durata').'", "name": "durata", "required": 1, "value": "'.$brano['durata'].'" ]}
        </div>

        <div class="col-md-6">
            {[ "type": "select", "label": "'.tr('Autore').'", "name": "autore", "required": 1, "values": "query=SELECT id, nome AS descrizione FROM am_autori ORDER BY nome", "value": "'.$brano['id_autore'].'"  ]}
        </div>

        <div class="col-md-6">
            {[ "type": "select", "label": "'.tr('Album').'", "name": "album", "required": 1, "values": "query=SELECT id, nome AS descrizione FROM am_album ORDER BY nome", "value": "'.$brano['id_album'].'" ]}
        </div>
    </div>

    <!-- PULSANTI -->
	<div class="row">
		<div class="col-md-12 text-right">
			<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> '.tr('Salva').'</button>
		</div>
	</div>
</form>';

echo '
	<script src="'.ROOTDIR.'/lib/init.js"></script>';
