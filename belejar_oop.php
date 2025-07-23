
<?php
class buah {
    // properties / ciri-ciri / karakteristik
    public $nama;
    public $warna;
    public $rasa;
    public $musim;
    public $berat;

    // method 1: Profil buah
    public function ProfilBuah() {
        echo "<h3>Profil Buah</h3> <br>";
        echo "Nama : ". $this->nama ."<br>";
        echo "Warna : ". $this->warna ."<br>";
        echo "Rasa : ". $this->rasa ."<br>";
        echo "Musim : ". $this->musim ."<br>";
        echo "Berat : ". $this->berat ." gram<br>";
    }

    // method 2: Menentukan kategori berat
    public function KategoriBerat() {
        if ($this->berat < 100) {
            echo "Buah ini termasuk ringan.<br>";
        } elseif ($this->berat >= 100 && $this->berat <= 500) {
            echo "Buah ini termasuk sedang.<br>";
        } else {
            echo "Buah ini termasuk berat.<br>";
        }
    }

    // method 3: Menampilkan musim panen
    public function MusimPanen() {
        echo "Buah ini biasanya dipanen pada musim : ". $this->musim ."<br>";
    }
}

    // Membuat 5 objek buah
    $apel = new buah();
    $apel->nama = "Apel";
    $apel->warna = "Merah";
    $apel->rasa = "Manis";
    $apel->musim = "Gugur";
    $apel->berat = 150;

    $mangga = new buah();
    $mangga->nama = "Mangga";
    $mangga->warna = "Hijau";
    $mangga->rasa = "Asam Manis";
    $mangga->musim = "Kemarau";
    $mangga->berat = 350;

    $pisang = new buah();
    $pisang->nama = "Pisang";
    $pisang->warna = "Kuning";
    $pisang->rasa = "Manis";
    $pisang->musim = "Sepanjang Tahun";
    $pisang->berat = 120;

    $semangka = new buah();
    $semangka->nama = "Semangka";
    $semangka->warna = "Hijau Merah";
    $semangka->rasa = "Manis";
    $semangka->musim = "Panas";
    $semangka->berat = 2000;

    $jeruk = new buah();
    $jeruk->nama = "Jeruk";
    $jeruk->warna = "Oranye";
    $jeruk->rasa = "Asam";
    $jeruk->musim = "Hujan";
    $jeruk->berat = 80;

    // Menampilkan semua objek dan methods nya
    $apel->ProfilBuah();
    $apel->KategoriBerat();
    $apel->MusimPanen();
    echo "<hr>";

    $mangga->ProfilBuah();
    $mangga->KategoriBerat();
    $mangga->MusimPanen();
    echo "<hr>";

    $pisang->ProfilBuah();
    $pisang->KategoriBerat();
    $pisang->MusimPanen();
    echo "<hr>";

    $semangka->ProfilBuah();
    $semangka->KategoriBerat();
    $semangka->MusimPanen();
    echo "<hr>";

    $jeruk->ProfilBuah();
    $jeruk->KategoriBerat();
    $jeruk->MusimPanen();
    echo "<hr>";
?>