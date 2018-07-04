<?php

include_once __DIR__.'/../../core.php';

$brani = $dbo->fetchArray('SELECT id, nome, durata, id_autore, (SELECT am_autori.nome FROM am_autori INNER JOIN am_brani ON am_brani.id_autore=am_autori.id GROUP BY am_autori.id HAVING am_autori.id=am_brani.id_autore) AS autore FROM am_brani WHERE id_album='.prepare($id_record));

foreach ($brani as $brano) {
    echo '
            <tr>
                <td>'.Modules::link('Brani', $brano['id'], $brano['nome']).'</td>
                <td>'.$brano['durata'].'</td>
                <td>'.Modules::link('Autori', $brano['id_autore'], $brano['autore']).'</td>
                <td>
                    <a class="btn btn-info" title="Modifica riga" onclick="launch_modal( \'Modifica riga\', \''.ROOTDIR.'/modules/album/row-edit.php?id_module='.$id_module.'&id_record='.$brano['id'].'&id_album='.$id_record.'\', 1 );"><i class="fa fa-edit"></i></a>
                </td>
            </tr>';
}
