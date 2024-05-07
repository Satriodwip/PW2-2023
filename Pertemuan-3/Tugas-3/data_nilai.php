<?php
    include_once 'header.php'
?>

<div class="container">
  <h2>Data Mahasiswa</h2>
  <table class="table">
      <thead>
          <tr class="text-center">
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Praktikum</th>
              <th>Reta2</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody class="text-center">
          <tr>
              <td>1</td>
              <td>Fakhirul</td>
              <td>Statistika dan Probabilitas</td>
              <td>89</td>
              <td>95</td>
              <td>80</td>
              <td>87.95</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Rul</td>
              <td>Statistika dan Probabilitas</td>
              <td>78</td>
              <td>81</td>
              <td>80</td>
              <td>79.75</td>
              <td>B</td>
              <td>Memuaskan</td>
              <td>Lulus</td>
          </tr>

          <?php
					/**
					* Task 3
					* 1. Import libfungsi.php
					* 2. Tampilkan data dalam bentuk table
					* 3. Berikan error handling untuk mengatasi ketika form belum disubmit
					* Note: Sesuaikan dengan isi table yang sudah ada						
					*/
                    include_once 'libfungsi.php';
                    if (isset($_POST['submit'])) {
        
                        $nama_lengkap = $_POST['nama_lengkap'];
                        $matkul = $_POST['matkul'];
                        $nilai_uts = $_POST['nilai_uts'];
                        $nilai_uas = $_POST['nilai_uas'];
                        $nilai_praktik = $_POST['nilai_praktik'];

                        $uts = $_POST['nilai_uts'];
                        $uas = $_POST['nilai_uas'];
                        $praktik = $_POST['nilai_praktik'];
                        $rata_rata = rata_rata($uts, $uas, $praktik);

                        $nilai = grade($rata_rata);

                        $hasil =  kelulusan($nilai);

                        echo "<tr>";
                        echo "<td>3</td>"; 
                        echo "<td>$nama_lengkap</td>";
                        echo "<td>$matkul</td>";
                        echo "<td>$nilai_uts</td>";
                        echo "<td>$nilai_uas</td>";
                        echo "<td>$nilai_praktik</td>";
                        echo "<td>$rata_rata</td>";
                        echo "<td>$nilai[0]</td>";
                        echo "<td>$nilai[1]</td>";
                        echo "<td>$hasil</td>";
                        echo "</tr>";
                    }
            ?>
        </tbody>
    </table>
</div>