<style>
    td {
        padding:10px;
    }

    .highlighted {
        background-color:pink;
    }
</style>

<?php

    function makeTable(string $judul = "Kelas") {
        echo "<table border=1>";
        echo "<tr>
            <th rowspan='3'> Hari </th>
            <th colspan='2'> Slot Waktu </th>        
            <th colspan='4'></th>
        </tr>";
        echo "<tr>
            <th rowspan='2' colspan='2'> PAGI </th>
            <th colspan='4'>" . $judul . "</th>
        </tr>";
        echo "<tr>
            <th> Mata Kuliah </th>
            <th> Dosen </th>
            <th> Ruang </th>
            <th> JJ </th>
        </tr>";
    }

    function closeTable() {
        echo "</table>";
    }

    function cekWaktu($n) {
        $slot_waktu = array(
            "07.30",
            "08.20",
            "09.10",
            "10.00",
            "10.15",
            "11.05",
            "11.55",
            "12.45",
            "13.35",
            "14.25",
            "15.15",
            "15.45",
            "16.35",
            "17.25",
            "18.15",
            "18.45",
            "19.35"
        );

        if($n <= 3) {
            echo $slot_waktu[$n - 1] . " - " . $slot_waktu[$n];
        } else if ($n <= 5) {
            echo $slot_waktu[$n] . " - " . $slot_waktu[$n + 1];
        } else if ($n <= 8) {
            echo $slot_waktu[$n + 1] . " - " . $slot_waktu[$n + 2];
        } else if ($n <= 11) {
            echo $slot_waktu[$n + 2] . " - " . $slot_waktu[$n + 3];
        } else {
            echo $slot_waktu[$n + 3] . " - " . $slot_waktu[$n + 4];
        }
    }

    // int $n, string $matkul, string $dosen, string $ruang
    function makeRow(int $n, string $matkul, string $dosen, string $ruang, string $jj=null, $i) {
        if($i == 1) {
            echo "<tr>";
            echo "<td>";
                echo $n;
            echo "</td>";
            echo "<td>";
                cekWaktu($n);
            echo "</td>";
            echo "<td>";
                echo $matkul;
            echo "</td>";
            echo "<td>";
                echo $dosen;
            echo "</td>";
            echo "<td>";
                echo $ruang;
            echo "</td>";
            echo "<td class='highlighted'>";
                echo $jj;
            echo "</td>";
        echo "</tr>";
        } else {
            echo "<tr>";
            echo "<td>";
                echo $n;
            echo "</td>";
            echo "<td>";
                cekWaktu($n);
            echo "</td>";
            echo "<td>";
                echo $matkul;
            echo "</td>";
            echo "<td>";
                echo $dosen;
            echo "</td>";
            echo "<td>";
                echo $ruang;
            echo "</td>";
            echo "<td>";

            echo "</td>";
        }
        
    }

    function fillRow(int $n) {
        echo "<tr>";
            echo "<td>";
                echo $n;
            echo "</td>";
            echo "<td>";
                cekWaktu($n);
            echo "</td>";
            echo "<td>";

            echo "</td>";
            echo "<td>";

            echo "</td>";
            echo "<td>";

            echo "</td>";
            echo "<td>";

            echo "</td>";
        echo "</tr>";
    }

    function makeMatkul($n, $matkul, $dosen, $ruang, $jj) {
        for($i = 1; $i <= $jj; $i++) {
            makeRow($n, $matkul, $dosen, $ruang, $jj, $i);
            $n++;
        }
    }

    function closeRow() {
        echo "</tr>";
    }

    function closeCol() {
        echo "</td>";
    }

    function makeDays(string $day) {
        echo "<tr>";
            echo "<td rowspan='13'>";
                echo $day;
    }

    function resetIndex($n) {
        if($n == 12) {
            return $n = 1;
        }
    }
?>