<?php

include_once __DIR__.'/../../core.php';

?><form action="" method="post" role="form">
    <input type="hidden" name="backto" value="record-edit">
    <input type="hidden" name="op" value="update">

    <!-- DATI -->
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo tr('Dati'); ?></h3>
        </div>

        <div class="panel-body">
            <div class="col-md-6">
                {[ "type": "text", "label": "<?php echo tr('Nome'); ?>", "name": "nome", "required": 1, "value": "$nome$" ]}
            </div>

            <div class="col-md-6">
                {[ "type": "number", "label": "<?php echo tr('Durata'); ?>", "name": "durata", "required": 1, "value": "$durata$" ]}
            </div>

            <div class="col-md-6">
                {[ "type": "select", "label": "<?php echo tr('Autore'); ?>", "name": "autore", "required": 1, "values": "query=SELECT id, nome AS descrizione FROM am_autori ORDER BY nome", "value": "$id_autore$" ]}
            </div>

            <div class="col-md-6">
                {[ "type": "select", "label": "<?php echo tr('Album'); ?>", "name": "album", "required": 1, "values": "query=SELECT id, nome AS descrizione FROM am_album ORDER BY nome", "value": "$id_album$" ]}
            </div>

        </div>
    </div>
</form>

<a class="btn btn-danger ask" data-backto="record-list">
    <i class="fa fa-trash"></i> <?php echo tr('Elimina'); ?>
</a>
