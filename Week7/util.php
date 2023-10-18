<?php
// username/action/message
function logInfo ($event)
{
    $f = fopen('data' . DIRECTORY_SEPARATOR . 'log.txt','a');
    if($f)
    {

        //fwrite($f,$event . ',' . Date('m-d-Y H:i:s.u'). PHP_EOL);
        $rec = explode(',',$event . ',' . Date('m-d-Y H:i:s.u'));
        fputcsv($f,$rec);
    }
    fclose($f);
}