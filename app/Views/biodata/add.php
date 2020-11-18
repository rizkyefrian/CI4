<form action="/biodata/save" method="post">
<?= csrf_field(); ?>
    <table >
        <tr>
            <td>
                1. POSISI YANG DILAMAR
            </td>
            <td>:</td>
            <td>
                <input type="text" class="form-control <?= ($validation->hasError('posisi')) ? 'is-invalid':''; ?>" name=="posisi" id="posisi" autofocus value="<?= old('posisi'); ?>">
                <div class="invalid-feedback">
                <?= $validation->getError('posisi'); ?>
                </div>
            </td>
        </tr>
        <tr>
            <td>
            2. NAMA
            </td>
            <td>:</td>
            <td>
            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid':''; ?>" name=="nama" id="nama" autofocus value="<?= old('nama'); ?>">
            <div class="invalid-feedback">
            <?= $validation->getError('nama'); ?>
            </div>
            </td>
            </tr>


    <tr>
        <td>
        3. NO.KTP
            </td>
            <td>:</td>
            <td>
        <input type="number" class="form-control <?= ($validation->hasError('ktp')) ? 'is-invalid':''; ?>" name="ktp" id="ktp" autofocus value="<?= old('ktp'); ?>">
        <div class="invalid-feedback">
          <?= $validation->getError('ktp'); ?>
        </div>
            </td>
    </tr>
    <tr>
        <td>
        4. TEMPAT LAHIR
            </td>
            <td>:</td>
            <td>
        <input type="text" class="form-control <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid':''; ?>" name="tempat_lahir" id="tempat_lahir" autofocus value="<?= old('tempat_lahir'); ?>">
        <div class="invalid-feedback">
          <?= $validation->getError('tempat_lahir'); ?>
        </div>
            </td>
    </tr>
    <tr>
        <td>
        TANGGAL LAHIR
            </td>
            <td>:</td>
            <td>
        <input type="date" class="form-control <?= ($validation->hasError('tanggal_lahir')) ? 'is-invalid':''; ?>" name="tanggal_lahir" id="tanggal_lahir" autofocus value="<?= old('tanggal_lahir'); ?>">
        <div class="invalid-feedback">
          <?= $validation->getError('tanggal_lahir'); ?>
        </div>
            </td>
    </tr>
    <tr>
    <td>
    5. JENIS KELAMIN
            </td>
            <td>:</td>
            <td>
                <select name="jk">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </td>
    </tr>
    <tr>
    <td>
    6. AGAMA
            </td>
            <td>:</td>
            <td>
        <input type="text" class="form-control <?= ($validation->hasError('agama')) ? 'is-invalid':''; ?>" name="agama" id="agama" autofocus value="<?= old('agama'); ?>">
        <div class="invalid-feedback">
          <?= $validation->getError('agama'); ?>
        </div>
            </td>
    </tr>
    <tr>
        <td>
        7. GOLONGAN DARAH
            </td>
            <td>:</td>
            <td>
        <input type="text" class="form-control <?= ($validation->hasError('gol_darah')) ? 'is-invalid':''; ?>" name="gol_darah" id="gol_darah" autofocus value="<?= old('gol_darah'); ?>">
        <div class="invalid-feedback">
          <?= $validation->getError('gol_darah'); ?>
        </div>
            </td>
    </tr>
    <tr>
        <td>
        8. STATUS
            </td>
            <td>:</td>
            <td>
        <input type="text" class="form-control <?= ($validation->hasError('status')) ? 'is-invalid':''; ?>" name="status" id="status" autofocus value="<?= old('status'); ?>">
        <div class="invalid-feedback">
          <?= $validation->getError('status'); ?>
        </div>
</td>
    </tr>
    <tr>
        <td>
        9. ALAMAT KTP
            </td>
            <td>:</td>
            <td>
        <input type="text" class="form-control <?= ($validation->hasError('alamat_ktp')) ? 'is-invalid':''; ?>" name="alamat_ktp" id="alamat_ktp" autofocus value="<?= old('alamat_ktp'); ?>">
        <div class="invalid-feedback">
          <?= $validation->getError('alamat_ktp'); ?>
        </div>
</td>
    </tr>
    <tr>
        <td>
        10. ALAMAT TINGGAL
            </td>
            <td>:</td>
            <td>
        <input type="text" class="form-control <?= ($validation->hasError('alamat_tinggal')) ? 'is-invalid':''; ?>" name="alamat_tinggal" id="alamat_tinggal" autofocus value="<?= old('alamat_tinggal'); ?>">
        <div class="invalid-feedback">
          <?= $validation->getError('alamat_tinggal'); ?>
        </div>
            </td>
    </tr>
    <tr>
        <td>
        11. EMAIL
            </td>
            <td>:</td>
            <td>
        <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid':''; ?>" name="email" id="email" autofocus value="<?= old('email'); ?>">
        <div class="invalid-feedback">
          <?= $validation->getError('email'); ?>
        </div>
            </td>
    </tr>
    <tr>
        <td>
        12. NO.TELP
            </td>
            <td>:</td>
            <td>
        <input type="text" class="form-control <?= ($validation->hasError('no_telp')) ? 'is-invalid':''; ?>" name="no_telp" id="no_telp" autofocus value="<?= old('no_telp'); ?>">
        <div class="invalid-feedback">
          <?= $validation->getError('no_telp'); ?>
        </div>
            </td>
    </tr>
    <tr>
        <td>
        13. ORANG TERDEKAT YANG DAPAT DIHUBUNGI
            </td>
            <td>:</td>
            <td>
        <input type="text" class="form-control <?= ($validation->hasError('no_lain')) ? 'is-invalid':''; ?>" name="no_lain" id="no_lain" autofocus value="<?= old('no_lain'); ?>">
        <div class="invalid-feedback">
          <?= $validation->getError('no_lain'); ?>
        </div>
            </td>
    </tr>
    <tr>
        <td>
        17. SKILL
            </td>
            <td>:</td>
            <td>
            <textarea id="skill" name="skill" rows="4" cols="32" value=""> </textarea>
            </td>
    </tr>
    <tr>
    <td>
        18. BERSEDIA DITEMPATKAN DI SELURUH KANTOR PERUSAHAAN : YA/TIDAK*
            </td>
            <td>:</td>
            <td>
                <select name="penempatan">
                    <option value="">...Choose...</option>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                </select>
            </td>
    </tr>
    <tr>
    <td>
        19. PENGHASILAN YANG DIHARAPKAN
            </td>
            <td>:</td>
            <td>
                <input type="text" class="form-control <?= ($validation->hasError('gaji')) ? 'is-invalid':''; ?>" name="gaji" id="gaji" autofocus value="<?= old('gaji'); ?>">
        <div class="invalid-feedback">
          <?= $validation->getError('gaji'); ?>
        </div>/BULAN
            </td>
    </tr>
    </table>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>