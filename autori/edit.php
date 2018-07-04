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
            <div class="col-xs-12">
                {[ "type": "text", "label": "<?php echo tr('Nome'); ?>", "name": "nome", "required": 1, "value": "$nome$" ]}
            </div>
        </div>
    </div>

    <!-- BRANI -->
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo tr('Dati'); ?>Brani disponibili</h3>
        </div>

        <div class="panel-body">
            <table class="table table-hover table-responsive">
                <tr>
                    <th><?php echo tr('Nome brano'); ?></th>
                    <th><?php echo tr('Durata'); ?></th>
                    <th><?php echo tr('Autore'); ?></th>
                </tr>
<?php

$brani = $dbo->fetchArray('SELECT id, nome, durata, id_album, (SELECT am_album.nome FROM am_album INNER JOIN am_brani ON am_brani.id_album=am_album.id GROUP BY am_album.id HAVING am_album.id=am_brani.id_album) AS album FROM am_brani WHERE id_autore='.prepare($id_record));
foreach ($brani as $brano) {
    echo '
                <tr>
                    <td><a href="editor.php?id_module='.Modules::get('Brani')['id'].'&id_record='.$brano['id'].'">'.$brano['nome'].'</a></td>
                    <td>'.$brano['durata'].'</td>
                    <td><a href="editor.php?id_module='.Modules::get('Album')['id'].'&id_record='.$brano['id_album'].'">'.$brano['album'].'</a></td>
                </tr>';
}
?>
            </table>
        </div>
    </div>
</form>

<a class="btn btn-danger ask" data-backto="record-list">
    <i class="fa fa-trash"></i> <?php echo tr('Elimina'); ?>
</a>

