<?php

// Class baru untuk Biota Laut
class BiotaLaut {

    // Properties
    public $nama;
    public $jenis;
    public $warna;
    public $pemakan;           
    public $berkembangBiak;    

    // Method 1 profil biota laut
    public function profilBiotaLaut() {
        echo "<h3>Profil Biota Laut</h3>";
        echo "Nama: $this->nama <br/>";
        echo "Jenis: $this->jenis <br/>";
        echo "Warna: $this->warna <br/>";
        echo "Pemakan: $this->pemakan <br/>";
        echo "Jumlah Anak per Tahun: $this->berkembangBiak <br/>";
    }

    // Method 2 
    public function infoBiota() {
        echo "<em>Ini adalah $this->nama, termasuk jenis $this->jenis dan pemakan $this->pemakan.</em><br/>";
    }

    // Method 3 Kategori berkembang biak
    public function kategoriBerkembangBiak() {
        if ($this->berkembangBiak >= 200) {
            echo "Kategori Perkembangbiakan: Sangat Produktif <br/><br/>";
        } elseif ($this->berkembangBiak >= 100) {
            echo "Kategori Perkembangbiakan: Cukup Produktif <br/><br/>";
        } else {
            echo "Kategori Perkembangbiakan: Kurang Produktif <br/><br/>";
        }
    }
}

// Objek 1
$paus = new BiotaLaut();
$paus->nama = "Paus Biru";
$paus->jenis = "Mamalia Laut";
$paus->warna = "Biru Abu";
$paus->pemakan = "Karnivora";
$paus->berkembangBiak = 1;
$paus->profilBiotaLaut();
$paus->kategoriBerkembangBiak();
$paus->infoBiota();

// Objek 2
$ubur = new BiotaLaut();
$ubur->nama = "Ubur-ubur";
$ubur->jenis = "Invertebrata";
$ubur->warna = "Transparan";
$ubur->pemakan = "Karnivora";
$ubur->berkembangBiak = 300;
$ubur->profilBiotaLaut();
$ubur->kategoriBerkembangBiak();
$ubur->infoBiota();

// Objek 3
$ikanBadut = new BiotaLaut();
$ikanBadut->nama = "Ikan Badut";
$ikanBadut->jenis = "Ikan";
$ikanBadut->warna = "Oranye Putih";
$ikanBadut->pemakan = "Omnivora";
$ikanBadut->berkembangBiak = 150;
$ikanBadut->profilBiotaLaut();
$ikanBadut->kategoriBerkembangBiak();
$ikanBadut->infoBiota();

// Objek 4
$penyu = new BiotaLaut();
$penyu->nama = "Penyu Hijau";
$penyu->jenis = "Reptil Laut";
$penyu->warna = "Hijau Coklat";
$penyu->pemakan = "Herbivora";
$penyu->berkembangBiak = 100;
$penyu->profilBiotaLaut();
$penyu->kategoriBerkembangBiak();
$penyu->infoBiota();

// Objek 5
$bintangLaut = new BiotaLaut();
$bintangLaut->nama = "Bintang Laut";
$bintangLaut->jenis = "Echinodermata";
$bintangLaut->warna = "Merah Muda";
$bintangLaut->pemakan = "Karnivora";
$bintangLaut->berkembangBiak = 500;
$bintangLaut->profilBiotaLaut();
$bintangLaut->kategoriBerkembangBiak();
$bintangLaut->infoBiota();

// nama kelompok
echo '<div style="text-align: right; margin-top: 50px;">
    <strong> Anggota Kelompok</strong><br/>
    Azka Azkiya / 6<br/>
    Chikal Adillya / 7<br/>
    Jonathan / 17<br/>
    M Syahrul / 21
</div>';

?>