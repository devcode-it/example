<?php

include_once __DIR__.'/../../core.php';

if (isset($id_record)) {
    $records = $dbo->fetchArray('SELECT * FROM am_autori WHERE id='.prepare($id_record));
}
