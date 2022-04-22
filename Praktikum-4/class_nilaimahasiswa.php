<?php
class NilaiMahasiswa
{ // buka class
    var $nim;
    var $nilai;
    var $matkul;

    function __construct($nim, $nilai, $matkul)
    {
        $this->nim = $nim;
        $this->nilai = $nilai;
        $this->matkul = $matkul;
    }

    function grade(){
        switch($this->nilai){
            case $this->nilai <= 35:
                $grade = 'E';
                break;

            case $this->nilai >= 36 && $this->nilai <= 55:
                $grade = 'D';
                break;
            
            case $this->nilai >= 56 && $this->nilai <= 69:
                $grade = 'C';
                break;

            case $this->nilai >= 70 && $this->nilai <= 84:
                $grade = 'B';
                break;

            case $this->nilai >= 85 && $this->nilai <= 100:
                $grade = 'A';
                break;
            
            default: 
                $grade = 'I';
            }

        return $grade;
    }

    function hasil(){
        if($this->nilai > 56){
            return 'LULUS';
        } else {
            return 'TIDAK LULUS';
        }
    }
} // tutup class