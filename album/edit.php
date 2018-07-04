<?php

include_once __DIR__.'/../../core.php';

?>
<!-- DATI -->
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo tr('Dati'); ?></h3>
    </div>

    <div class="panel-body">
        <form action="" method="post" role="form">
            <input type="hidden" name="backto" value="record-edit">
            <input type="hidden" name="op" value="update">

            <div class="col-xs-12">
                {[ "type": "text", "label": "<?php echo tr('Nome'); ?>", "name": "nome", "required": 1, "value": "$nome$" ]}
            </div>
        </form>

    </div>
</div>

<!-- BRANI -->
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo tr('Brani disponibili'); ?></h3>
    </div>

    <div class="panel-body">
        <div class="pull-right">
            <a class="btn btn-primary" data-href="<?php echo ROOTDIR; ?>/modules/album/row-edit.php?id_module=<?php echo $id_module; ?>&id_album=<?php echo $id_record; ?>" data-toggle="modal" data-title="Aggiungi riga" data-target="#bs-popup"><i class="fa fa-plus"></i> <?php echo tr('Riga'); ?></a><br>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-hover table-condensed">
                <tr>
                    <th><?php echo tr('Nome brano'); ?></th>
                    <th><?php echo tr('Durata'); ?></th>
                    <th><?php echo tr('Autore'); ?></th>
                    <th><?php echo tr('Opzioni'); ?></th>
                </tr>

<?php
include DOCROOT.'/modules/album/row-list.php';
?>
                </table>
            </div>
        </div>
    </div>
</div>

<a class="btn btn-danger ask" data-backto="record-list">
    <i class="fa fa-trash"></i> <?php echo tr('Elimina'); ?>
</a>
