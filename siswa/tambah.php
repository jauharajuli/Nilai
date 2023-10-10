<section class="contet">
    <div class="row">
        <div class="col-8">
            <h1>Modul siswa</h1>
        </div>
        <div class="col-4">
            <a href="?m=siswa&s=tampil" class="btn btn-large btn-info float-end">Kembali</a>
        </div>
        <div class="col">
            <form action="?m=siswa&s=simpan" method="post">
                    <div class="mb-2">
                    <label for="">Nama siswa</label>
                    <input type="text" name="nama_siswa" class="form-control" required>
                    </div>
                <div class="mb-2">
                    <label for="">Jenis Kelamin</label>>&nbsp;
                    <input type="radio" name="jk" class="form-control" value="L" checked>Laki-laki &nbsp;
                    <input type="radio" name="jk" value="P">Perempuan
                </div>
                <div class="mb-2">
                    <label for="">Tempat Lahir</label>
                    <input type="number" name="terisi" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">Tanggal Lahir</label>
                    <input type="number" name="terisi" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">Nama Jurusan</label>
                    <select name="jurusan" required>
                        <option value="">Pilih Jurusan</option>
                        <option value="">TKJ</option>
                        <option value="">AP</option>
                    </select>
                </div>
                <div class="mb-2">
                    <input type="reset" class="btn btn-warning">
                    <input type="submit" name="simpan" class="btn btn-primary">
                </div>
            </form>

        </div>
        
    </div>
</section>