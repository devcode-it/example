<?php

include_once __DIR__.'/../../core.php';

switch (post('op')) {
    case 'add':
        $dbo->insert('am_album', [
            'nome' => post('nome'),
        ]);
        $id_record = $dbo->last_inserted_id();

        $_SESSION['infos'][] = tr('Aggiunto un nuovo album!');

        break;

    case 'update':
        $dbo->update('am_album', [
            'nome' => post('nome'),
        ], ['id' => $id_record]);

        $_SESSION['infos'][] = tr('Album modificato!');

        break;

    case 'delete':
        $dbo->delete('am_album', ['id' => $id_record]);

        $_SESSION['infos'][] = tr('Album eliminato!');

        break;

    case 'row':
        if (empty($id_record)) {
            Filter::set('post', 'op', 'add');
        } else {
            Filter::set('post', 'op', 'update');
        }

        include DOCROOT.'/modules/brani/actions.php';

        $id_record = get('id_album');

        break;
}
