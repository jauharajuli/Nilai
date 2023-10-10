<div class="content">
    <div class="row">
        <a href="?m=matadiklat&s=tambah" class="btn btn-info btn-large">Tambah Mata Diklat</a>
        <h2>Modul mata diklat</h2>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr class="table-primary">
                    <th>No</th>
                    <th>Mata Diklat</th>
                    <th>SKS</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody> 
                <?php 
                include_once('koneksi.php');
                $sql ='SELECT * FROM matadiklat';
                $query = mysqli_query($koneksi, $sql);
                if (mysqli_num_rows($query) == 0) {
                    echo "<tr><td> colspan='5'>Data Kosong</td></tr>";
                }else {
                    $no = 1;
                    while ($r = mysqli_fetch_assoc($query)) {
                        echo "<tr>";
                        echo "<td>$no</td>";
                        echo "<td>" . $r['mata_diklat'] . "</td>";
                        echo "<td>" . $r['sks'] . "</td>";
                        echo '<td><a href="?m=matadiklat&s=edit&id=' . $r['id'] . '" class="btn btn-sm btn-warning">Edit</a>&nbsp;
                        <a href="?m=matadiklat&s=hapus&id=' . $r['id'] . '" onclick="return confirm(\'Menghapus matadiklat akan menghilangkan SEMUA data siswa yang ada pada matadiklat tersebut, yakin matadiklat ini akan dihapus?\')" class="btn btn-sm btn-danger">Hapus</a></td>';
                        echo "</tr>";
                        $no++;
                    }
                    
                }


                ?>
        </table>
    </div>
</div>