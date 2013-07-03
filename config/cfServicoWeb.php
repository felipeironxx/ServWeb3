<?php

class cfServicoWeb {

    public function dateToBr($dataAmericana) {
        $d = explode('-',$dataAmericana);
        $dOk = $d[2].'/'.$d[1].'/'.$d[0];
        return $dOk;
    }

    public function dateToUS($dataBrasil) {
        $d = explode('/', $dataBrasil);
        $dOk = $d[2].'-'.$d[1].'-'.$d[0];
        return $dOk;
    }

}

?>
