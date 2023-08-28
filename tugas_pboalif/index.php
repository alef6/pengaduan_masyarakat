<?php
class rumah{
    public $warna = "merah";
    public $pintu = 2;
    public $jendela = 4;

    public function bukapintu(){
        echo "pintu telah di buka";
    }
}
$rumah_siti = new rumah();
echo $rumah_siti->warna;
echo"<br />";
$rumah_siti->bukapintu();
?>