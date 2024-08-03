<?php
class Cuenta {
    private $file = '../Data/Cuenta.json';

    public function getObservaciones() {
        if (!file_exists($this->file)) {
            file_put_contents($this->file, '[]');
        }
        $data = file_get_contents($this->file);
        return json_decode($data, true);
    }

    public function saveObservacion($observacion) {
        $observaciones = $this->getObservaciones();
        array_push($observaciones, $observacion);
        file_put_contents($this->file, json_encode($observaciones, JSON_PRETTY_PRINT));
    }
}
?>
