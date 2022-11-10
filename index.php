<?php // config
    include "tables.php";

    $GLOBALS['index'] = 1;
        
    echo '
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select file to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Spreadsheet" name="submit">
        </form>
    ';
?>
<?php // TI 1A
    makeTable("TI 1A");
    
    // SENIN
    makeDays("SENIN");

    // matkul 1
    $jj = 6;
    $matkul = "Pengantar Multimedia";
    $dosen = "Ella";
    $ruang = "AA302";
    makeMatkul($index, $matkul, $dosen, $ruang, $jj);
    $index = $jj + 1;
    
    // matkul 2
    $jj = 3;
    $matkul = "Pendidikan agama dalam tik";
    $dosen = "Adi";
    $ruang = "AA302";
    makeMatkul($index, $matkul, $dosen, $ruang, $jj);

    $index = $index + $jj;
    $batas_akhir = 12 - ($index - 1);

    // fill sisa row
    for($i = 1; $i <= $batas_akhir; $i++) {
        fillRow($index);
        $index++;
    }
    $index = 1;
    closeRow();
    closeCol();

    // SELASA
    makeDays("SELASA");

    $jj = 3;
    $matkul = "Pendidikan Kewarganegaraan";
    $dosen = "Ayres";
    $ruang = "GSG202";
    makeMatkul($index, $matkul, $dosen, $ruang, $jj);
    $index = $jj + 1;
    
    $jj = 4;
    $matkul = "Bahasa Inggris TIK 1";
    $dosen = "Dewi K";
    $ruang = "GSG202";
    makeMatkul($index, $matkul, $dosen, $ruang, $jj);
    $index = $index + $jj;

    $batas_akhir = 12 - ($index - 1);

    for($i = 1; $i <= $batas_akhir; $i++) {
        fillRow($index);
        $index++;
    }
    $index = 1;
    closeRow();
    closeCol();

    // RABU
    makeDays("RABU");

    $jj = 4;
    $matkul = "Pengantar Teknologi Informasi dan Komunikasi";
    $dosen = "Mera";
    $ruang = "GSG207";
    makeMatkul($index, $matkul, $dosen, $ruang, $jj);
    $index = $jj + 1;
    
    $jj = 4;
    $matkul = "Matematika Diskrit";
    $dosen = "Agus";
    $ruang = "GSG207";
    makeMatkul($index, $matkul, $dosen, $ruang, $jj);
    $index = $index + $jj;

    $batas_akhir = 12 - ($index - 1);

    for($i = 1; $i <= $batas_akhir; $i++) {
        fillRow($index);
        $index++;
    }
    $index = 1;
    closeRow();
    closeCol();

    // KAMIS
    makeDays("KAMIS");

    $jj = 6;
    $matkul = "Algoritma & Pemrograman";
    $dosen = "Dewiyanti";
    $ruang = "AA301";
    makeMatkul($index, $matkul, $dosen, $ruang, $jj);
    $index = $jj + 1;
    
    $jj = 5;
    $matkul = "Sistem Operasi";
    $dosen = "Chandra";
    $ruang = "GSG201";
    makeMatkul($index, $matkul, $dosen, $ruang, $jj);
    $index = $index + $jj;

    $batas_akhir = 12 - ($index - 1);

    for($i = 1; $i <= $batas_akhir; $i++) {
        fillRow($index);
        $index++;
    }
    $index = 1;
    closeRow();
    closeCol();

    // JUMAT
    makeDays("JUMAT");

    $batas_akhir = 12;

    for($i = 1; $i <= $batas_akhir; $i++) {
        fillRow($index);
        $index++;
    }
    $index = 1;
    closeRow();
    closeCol();

    // SABTU
    makeDays("SABTU");

    $batas_akhir = 12;

    for($i = 1; $i <= $batas_akhir; $i++) {
        fillRow($index);
        $index++;
    }
    $index = 1;
    closeRow();
    closeCol();

    closeTable();
?>
<br>
<?php // TI 1B
    makeTable("TI 1B");
    
    // SENIN
    makeDays("SENIN");

    // fill row awal
    $jj = 3;
    for($i = 1; $i <= $jj; $i++) {
        fillRow($index);
        $index++;
    }
    $index = $jj + 1;
    
    // matkul
    $jj = 3;
    $matkul = "Pendidikan agama dalam tik";
    $dosen = "Adi";
    $ruang = "GSG10";
    makeMatkul($index, $matkul, $dosen, $ruang, $jj);
    $index = $index + $jj;

    $batas_akhir = 12 - ($index - 1);

    // fill row akhir
    for($i = 1; $i <= $batas_akhir; $i++) {
        fillRow($index);
        $index++;
    }
    $index = 1;
    closeRow();
    closeCol();

    // SELASA
    makeDays("SELASA");

    $jj = 6;
    $matkul = "Pengantar Multimedia";
    $dosen = "Weldy";
    $ruang = "AA003";
    makeMatkul($index, $matkul, $dosen, $ruang, $jj);
    $index = $jj + 1;
    
    $jj = 3;
    $matkul = "Pendidikan Kewarganegaraan";
    $dosen = "Ayres";
    $ruang = "AA205";
    makeMatkul($index, $matkul, $dosen, $ruang, $jj);
    $index = $index + $jj;

    $batas_akhir = 12 - ($index - 1);

    for($i = 1; $i <= $batas_akhir; $i++) {
        fillRow($index);
        $index++;
    }
    $index = 1;
    closeRow();
    closeCol();

    // RABU
    makeDays("RABU");

    $jj = 4;
    $matkul = "Matematika Diskrit";
    $dosen = "Agus";
    $ruang = "GSG206";
    makeMatkul($index, $matkul, $dosen, $ruang, $jj);
    $index = $jj + 1;
    
    $jj = 4;
    $matkul = "Pengantar Teknologi Informasi dan Komunikasi";
    $dosen = "Mera";
    $ruang = "GSG206";
    makeMatkul($index, $matkul, $dosen, $ruang, $jj);
    $index = $index + $jj;

    $batas_akhir = 12 - ($index - 1);

    for($i = 1; $i <= $batas_akhir; $i++) {
        fillRow($index);
        $index++;
    }
    $index = 1;
    closeRow();
    closeCol();

    // KAMIS
    makeDays("KAMIS");

    $jj = 6;
    $matkul = "Sistem Operasi";
    $dosen = "Chandra";
    $ruang = "GSG201";
    makeMatkul($index, $matkul, $dosen, $ruang, $jj);
    $index = $jj + 1;
    
    $jj = 5;
    $matkul = "Algoritma & Pemrograman";
    $dosen = "Dewiyanti";
    $ruang = "AA301";
    makeMatkul($index, $matkul, $dosen, $ruang, $jj);
    
    $index = $index + $jj;

    $batas_akhir = 12 - ($index - 1);

    for($i = 1; $i <= $batas_akhir; $i++) {
        fillRow($index);
        $index++;
    }
    $index = 1;
    closeRow();
    closeCol();

    // JUMAT
    makeDays("JUMAT");

    $jj = 4;
    $matkul = "Bahasa Inggris TIK 1";
    $dosen = "Dewi K";
    $ruang = "AA304";
    makeMatkul($index, $matkul, $dosen, $ruang, $jj);
    $index = $jj + 1;

    $batas_akhir = 12 - ($index - 1);

    for($i = 1; $i <= $batas_akhir; $i++) {
        fillRow($index);
        $index++;
    }
    $index = 1;
    closeRow();
    closeCol();

    // SABTU
    makeDays("SABTU");

    $batas_akhir = 12;

    for($i = 1; $i <= $batas_akhir; $i++) {
        fillRow($index);
        $index++;
    }
    $index = 1;
    closeRow();
    closeCol();

    closeTable();
?>