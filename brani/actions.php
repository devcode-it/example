<?php

include_once __DIR__.'/../../core.php';

switch (post('op')) {
    case 'add':
        $dbo->insert('am_brani', [
            'nome' => post('nome'),
            'durata' => post('durata'),
            'id_autore' => post('autore'),
            'id_album' => post('album'),
        ]);
        $id_record = $dbo->last_inserted_id();

        $_SESSION['infos'][] = tr('Aggiunto un nuovo brano!');

        break;

    case 'update':
        $dbo->update('am_brani', [
            'nome' => post('nome'),
            'durata' => post('durata'),
            'id_autore' => post('autore'),
            'id_album' => post('album'),
        ], ['id' => $id_record]);

        $_SESSION['infos'][] = tr('Brano modificato!');

        break;

    case 'delete':
        $dbo->delete('am_brani', ['id' => $id_record]);

        $_SESSION['infos'][] = tr('Brano eliminato!');

        break;
}
