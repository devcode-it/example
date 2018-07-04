<?php

include_once __DIR__.'/../../core.php';

switch (post('op')) {
    case 'add':
        $dbo->insert('am_autori', [
            'nome' => post('nome'),
        ]);
        $id_record = $dbo->last_inserted_id();

        $_SESSION['infos'][] = tr('Aggiunto un nuovo autore!');

        break;

    case 'update':
        $dbo->update('am_autori', [
            'nome' => post('nome'),
        ], ['id' => $id_record]);

        $_SESSION['infos'][] = tr('Autore modificato!');

        break;

    case 'delete':
        $dbo->delete('am_autori', ['id' => $id_record]);

        $_SESSION['infos'][] = tr('Autore eliminato!');

        break;
}
