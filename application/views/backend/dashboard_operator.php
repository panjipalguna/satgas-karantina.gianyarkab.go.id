<title><?php echo $title; ?></title>

<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modalTambahTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahTitle">Tambah Pasien</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display:block;">
                    <span aria-hidden="true" style="display:block;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form form_add">
                    <div class="card-body">
                        <div class="form-group">
                            <label>No. NIK<span style="color:red;">*</span></label><br>
                            <div class="d-flex">
                                <input type="number" class="form-control pasien_nik" placeholder="NIK"><button type="button" class="btn btn-primary btnCekNik font-weight-bolder ml-3"><i class="la la-search"></i></button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Nama<span style="color:red;">*</span></label><br>
                                <input type="text" class="form-control pasien_nama" placeholder="Nama">
                            </div>
                            <div class="col-lg-6">
                                <label>Jenis Kelamin<span style="color:red;">*</span></label><br>
                                <select style="width:100%" class="form-control pasien_jk" id="pasien_jk">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="1">Laki-laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Tempat Lahir<span style="color:red;">*</span></label><br>
                                <input type="text" class="form-control pasien_tempat_lahir" placeholder="Tempat Lahir">
                            </div>
                            <div class="col-lg-6">
                                <label>Tanggal Lahir<span style="color:red;">*</span></label><br>
                                <input type="date" class="form-control pasien_tgl_lahir" placeholder="Tanggal Lahir">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Pekerjaan<span style="color:red;">*</span></label><br>
                                <input type="text" class="form-control pasien_pekerjaan" placeholder="Pekerjaan">
                            </div>
                            <div class="col-lg-6">
                                <label>Alamat<span style="color:red;">*</span></label><br>
                                <input type="text" class="form-control pasien_alamat" placeholder="Alamat">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Umur<span style="color:red;">*</span></label><br>
                                <input type="number" class="form-control pasien_umur" placeholder="Umur">
                            </div>
                            <div class="col-lg-6">
                                <label>No. HP<span style="color:red;">*</span></label><br>
                                <input type="number" class="form-control pasien_hp" placeholder="No. HP">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Golongan Darah<span style="color:red;">*</span></label><br>
                                <select style="width:100%" class="form-control pasien_goldar" id="pasien_goldar">
                                    <option value="">Pilih Golongan Darah</option>
                                    <option value="O">O</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="A">Tidak Tahun</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label>Tanggal Mulai Karantina<span style="color:red;">*</span></label><br>
                                <input type="date" class="form-control pasien_masuk" placeholder="Tanggal Mulai Karantina">
                            </div>
                        </div>
                        <div class="separator separator-dashed my-8"></div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Apakah Pasien?<span style="color:red;">*</span></label><br>
                                <select style="width:100%" class="form-control pasien_pmi" id="pasien_pmi">
                                    <option value="">Apakah Pasien?</option>
                                    <option value="1">Pekerja Migran Indonesia (PMI)</option>
                                    <option value="2">Bukan Pekerja Migran Indonesia (PMI)</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label>Negara Tempat Bekerja (jika PMI)</label><br>
                                <input type="text" class="form-control pasien_negara_bekerja" placeholder="Negara Pekerja (jika PMI)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Riwayat Penerbangan (termasuk transit) contoh : London - Doha - Denpasar</label><br>
                                <input type="text" class="form-control pasien_penerbangan" placeholder="Riwayat Penerbangan">
                            </div>
                            <div class="col-lg-6">
                                <label>Keluhan Saat Ini</label><br>
                                <div class="checkbox-inline">
                                    <label class="checkbox">
                                        <input type="checkbox" name="pasien_keluhan_demam" id="pasien_keluhan_demam">
                                        <span></span>Demam</label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="pasien_keluhan_batuk" id="pasien_keluhan_batuk">
                                        <span></span>Batuk</label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="pasien_keluhan_sesak" id="pasien_keluhan_sesak">
                                        <span></span>Sesak</label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="pasien_keluhan_lain" id="pasien_keluhan_lain">
                                        <span></span>Lain-lain</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Pemeriksaan Laboratorium yang telah dilakukan</label><br>
                                <div class="checkbox-inline">
                                    <label class="checkbox">
                                        <input type="checkbox" name="pasien_pemeriksaan_covid" id="pasien_pemeriksaan_covid">
                                        <span></span>Covid 19 PCR test (Swab) POSITIF</label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="pasien_pemeriksaan_rapid" id="pasien_pemeriksaan_rapid">
                                        <span></span>Covid 19 Rapid Test REACTIVE</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label>Riwayat Sakit Sebelumnya</label><br>
                                <input type="text" class="form-control pasien_riwayat_sakit" placeholder="Riwayat Sakit">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Riwayat Minum Obat</label><br>
                                <input type="text" class="form-control pasien_riwayat_minum_obat" placeholder="Riwayat Minum Obat">
                            </div>
                            <div class="col-lg-6">
                                <label>No. HP Keluarga<span style="color:red;">*</span></label><br>
                                <input type="number" class="form-control pasien_hp_keluarga" placeholder="No. HP Keluarga">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Nama Puskesmas/Rumah Sakit Yg Merujuk<span style="color:red;">*</span></label><br>
                                <input type="text" class="form-control pasien_nama_rs" placeholder="Nama Puskesmas/Rumah Sakit Yg Merujuk">
                            </div>
                            <div class="col-lg-6">
                                <label>Nomor Kendaraan yg digunakan merujuk<span style="color:red;">*</span></label><br>
                                <input type="text" class="form-control pasien_nomor_kendaraan" placeholder="Nomor Kendaraan yg digunakan merujuk">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Nama Petugas yang merujuk 1<span style="color:red;">*</span></label><br>
                                <input type="text" class="form-control pasien_nama_petugas1" placeholder="Nama Petugas yang merujuk 1">
                            </div>
                            <div class="col-lg-6">
                                <label>No. HP Petugas yang merujuk 1<span style="color:red;">*</span></label><br>
                                <input type="number" class="form-control pasien_hp_petugas1" placeholder="No HP Petugas yang merujuk 1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Nama Petugas yang merujuk 2</label><br>
                                <input type="text" class="form-control pasien_nama_petugas2" placeholder="Nama Petugas yang merujuk 2">
                            </div>
                            <div class="col-lg-6">
                                <label>No. HP Petugas yang merujuk 2</label><br>
                                <input type="number" class="form-control pasien_hp_petugas2" placeholder="No HP Petugas yang merujuk 2">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btnSave">Simpan</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalDetil" tabindex="-1" role="dialog" aria-labelledby="modalTambahDetil" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDetilTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display:block;">
                    <span aria-hidden="true" style="display:block;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form form_detil">
                    <div class="card-body">
                        <input type="hidden" class="form-control pasien_id_detil">
                        <div class="form-group">
                            <label>No. NIK<span style="color:red;">*</span></label><br>
                            <div class="d-flex">
                                <input type="number" class="form-control pasien_nik_detil" placeholder="NIK">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Nama<span style="color:red;">*</span></label><br>
                                <input type="text" class="form-control pasien_nama_detil" placeholder="Nama">
                            </div>
                            <div class="col-lg-6">
                                <label>Jenis Kelamin<span style="color:red;">*</span></label><br>
                                <select style="width:100%" class="form-control pasien_jk_detil" id="pasien_jk_detil">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="1">Laki-laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Tempat Lahir<span style="color:red;">*</span></label><br>
                                <input type="text" class="form-control pasien_tempat_lahir_detil" placeholder="Tempat Lahir">
                            </div>
                            <div class="col-lg-6">
                                <label>Tanggal Lahir<span style="color:red;">*</span></label><br>
                                <input type="date" class="form-control pasien_tgl_lahir_detil" placeholder="Tanggal Lahir">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Pekerjaan<span style="color:red;">*</span></label><br>
                                <input type="text" class="form-control pasien_pekerjaan_detil" placeholder="Pekerjaan">
                            </div>
                            <div class="col-lg-6">
                                <label>Alamat<span style="color:red;">*</span></label><br>
                                <input type="text" class="form-control pasien_alamat_detil" placeholder="Alamat">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Umur<span style="color:red;">*</span></label><br>
                                <input type="number" class="form-control pasien_umur_detil" placeholder="Umur">
                            </div>
                            <div class="col-lg-6">
                                <label>No. HP<span style="color:red;">*</span></label><br>
                                <input type="number" class="form-control pasien_hp_detil" placeholder="No. HP">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Golongan Darah<span style="color:red;">*</span></label><br>
                                <select style="width:100%" class="form-control pasien_goldar_detil" id="pasien_goldar_detil">
                                    <option value="">Pilih Golongan Darah</option>
                                    <option value="O">O</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="A">Tidak Tahun</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label>Tanggal Mulai Karantina<span style="color:red;">*</span></label><br>
                                <input type="date" class="form-control pasien_masuk_detil" placeholder="Tanggal Mulai Karantina">
                            </div>
                        </div>
                        <div class="separator separator-dashed my-8"></div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Apakah Pasien?<span style="color:red;">*</span></label><br>
                                <select style="width:100%" class="form-control pasien_pmi_detil" id="pasien_pmi_detil">
                                    <option value="">Apakah Pasien?</option>
                                    <option value="1">Pekerja Migran Indonesia (PMI)</option>
                                    <option value="2">Bukan Pekerja Migran Indonesia (PMI)</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label>Negara Tempat Bekerja (jika PMI)</label><br>
                                <input type="text" class="form-control pasien_negara_bekerja_detil" placeholder="Negara Pekerja (jika PMI)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Riwayat Penerbangan (termasuk transit) contoh : London - Doha - Denpasar</label><br>
                                <input type="text" class="form-control pasien_penerbangan_detil" placeholder="Riwayat Penerbangan">
                            </div>
                            <div class="col-lg-6">
                                <label>Keluhan Saat Ini</label><br>
                                <div class="checkbox-inline">
                                    <label class="checkbox">
                                        <input type="checkbox" name="pasien_keluhan_demam_detil" id="pasien_keluhan_demam_detil">
                                        <span></span>Demam</label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="pasien_keluhan_batuk_detil" id="pasien_keluhan_batuk_detil">
                                        <span></span>Batuk</label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="pasien_keluhan_sesak_detil" id="pasien_keluhan_sesak_detil">
                                        <span></span>Sesak</label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="pasien_keluhan_lain_detil" id="pasien_keluhan_lain_detil">
                                        <span></span>Lain-lain</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Pemeriksaan Laboratorium yang telah dilakukan</label><br>
                                <div class="checkbox-inline">
                                    <label class="checkbox">
                                        <input type="checkbox" name="pasien_pemeriksaan_covid_detil" id="pasien_pemeriksaan_covid_detil">
                                        <span></span>Covid 19 PCR test (Swab) POSITIF</label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="pasien_pemeriksaan_rapid_detil" id="pasien_pemeriksaan_rapid_detil">
                                        <span></span>Covid 19 Rapid Test REACTIVE</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label>Riwayat Sakit Sebelumnya</label><br>
                                <input type="text" class="form-control pasien_riwayat_sakit_detil" placeholder="Riwayat Sakit">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Riwayat Minum Obat</label><br>
                                <input type="text" class="form-control pasien_riwayat_minum_obat_detil" placeholder="Riwayat Minum Obat">
                            </div>
                            <div class="col-lg-6">
                                <label>No. HP Keluarga<span style="color:red;">*</span></label><br>
                                <input type="number" class="form-control pasien_hp_keluarga_detil" placeholder="No. HP Keluarga">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Nama Puskesmas/Rumah Sakit Yg Merujuk<span style="color:red;">*</span></label><br>
                                <input type="text" class="form-control pasien_nama_rs_detil" placeholder="Nama Puskesmas/Rumah Sakit Yg Merujuk">
                            </div>
                            <div class="col-lg-6">
                                <label>Nomor Kendaraan yg digunakan merujuk<span style="color:red;">*</span></label><br>
                                <input type="text" class="form-control pasien_nomor_kendaraan_detil" placeholder="Nomor Kendaraan yg digunakan merujuk">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Nama Petugas yang merujuk 1<span style="color:red;">*</span></label><br>
                                <input type="text" class="form-control pasien_nama_petugas1_detil" placeholder="Nama Petugas yang merujuk 1">
                            </div>
                            <div class="col-lg-6">
                                <label>No. HP Petugas yang merujuk 1<span style="color:red;">*</span></label><br>
                                <input type="number" class="form-control pasien_hp_petugas1_detil" placeholder="No HP Petugas yang merujuk 1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Nama Petugas yang merujuk 2</label><br>
                                <input type="text" class="form-control pasien_nama_petugas2_detil" placeholder="Nama Petugas yang merujuk 2">
                            </div>
                            <div class="col-lg-6">
                                <label>No. HP Petugas yang merujuk 2</label><br>
                                <input type="number" class="form-control pasien_hp_petugas2_detil" placeholder="No HP Petugas yang merujuk 2">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btnSubmitDetil">Simpan</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalSelesai" tabindex="-1" role="dialog" aria-labelledby="modalSelesaiTitle" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditTitle">Selesai Karantina</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display:block;">
                    <span aria-hidden="true" style="display:block;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form form_selesai">
                    <div class="card-body">
                        <input type="hidden" class="form-control pasien_nik_selesai">
                        <input type="hidden" class="form-control pasien_id_selesai">
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label>Tanggal Selesai Karantina<span style="color:red;">*</span></label><br>
                                <input type="date" class="form-control pasien_keluar" placeholder="Tanggal Selesai Karantina">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btnSelesaiSubmit">Update</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalPindah" tabindex="-1" role="dialog" aria-labelledby="modalPindahTitle" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditTitle">Pindah Karantina</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display:block;">
                    <span aria-hidden="true" style="display:block;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form form_pindah">
                    <div class="card-body">
                        <input type="hidden" class="form-control pasien_nik_pindah">
                        <input type="hidden" class="form-control pasien_id_pindah">
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label>Tempat Karantina<span style="color:red;">*</span></label><br>
                                <select style="width:100%;" class="form-control lokasi_pindah">
                                    <option value="">Pilih Tempat Karantina</option>
                                    <option value="1">Suly Resort and Spa</option>
                                    <option value="2">Maxone Hotel</option>
                                    <option value="3">Desa Pramana Swan Villa</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btnPindahSubmit">Update</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalExport" tabindex="-1" role="dialog" aria-labelledby="modalExportTitle" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditTitle">Export Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display:block;">
                    <span aria-hidden="true" style="display:block;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form form_status">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label>Status Pasien<span style="color:red;">*</span></label><br>
                                <select style="width:100%" class="form-control status_pasien" id="status_pasien">
                                    <option value="">Pilih Status Pasien</option>
                                    <option value="1">Aktif</option>
                                    <option value="0">Tidak Aktif</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btnExportSubmit">Export</button>
            </div>
        </div>
    </div>
</div>

<!--begin::Subheader-->
<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-2">
            <!--begin::Page Title-->
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">List Pasien</h5>
            <!--end::Page Title-->
            <!--end::Actions-->
        </div>
        <!--end::Info-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <!--begin::Daterange-->
            <a href="#" class="btn btn-sm btn-light font-weight-bold mr-2" id="kt_dashboard_daterangepicker" data-toggle="tooltip" title="Tanggal hari ini" data-placement="left">
                <span class="text-muted font-size-base font-weight-bold mr-2" id="kt_dashboard_daterangepicker_title">Hari ini</span>
                <span class="text-primary font-size-base font-weight-bolder" id="kt_dashboard_daterangepicker_date"></span>
            </a>
            <!--end::Daterange-->
        </div>
        <!--end::Toolbar-->
    </div>
</div>
<!--end::Subheader-->
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <div class="row">
            <div class="card card-custom col-xl-12">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">List Pasien
                            <span class="d-block text-muted pt-2 font-size-sm">Data pasien karantina</span></h3>
                    </div>
                    <div class="card-toolbar">
                        <!-- <a href="#" class="btn btn-primary font-weight-bolder btnExport mr-3">
                            <span class="svg-icon svg-icon-md">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <circle fill="#000000" cx="9" cy="15" r="6" />
                                        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                </svg>
                            </span>Export Data</a>
                        -->
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Search Form-->
                    <!--begin::Search Form-->
                    <div class="mb-7">
                        <div class="row align-items-center">
                            <div class="col-lg-9 col-xl-12">
                                <div class="row align-items-center">
                                    <div class="col-md-3 my-2 my-md-0">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                            <span>
                                                <i class="flaticon2-search-1 text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 my-2 my-md-0">
                                        <div class="d-flex align-items-center">
                                            <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                            <select class="form-control" id="kt_datatable_search_status">
                                                <option value="">Status</option>
                                                <option value="0">Tidak Aktif</option>
                                                <option value="1">Aktif</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--begin: Datatable-->
                    <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
                    <!--end: Datatable-->
                </div>
            </div>
        </div>
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->

<script>
    $('.pasien_jk').select2();
    $('.pasien_goldar').select2();
    $('.pasien_pmi').select2();
    $('.pasien_keluhan').select2();
    $('.pasien_pemeriksaan').select2();
    $('.lokasi_pindah').select2();
    $('.btnCekNik').click(function() {
        if ($('.pasien_nik').val() == '') {
            bootbox.alert({
                message: "NIK tidak boleh kosong",
                backdrop: true,
                size: 'small'
            });
        } else {
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('dashboard/cek_nik') ?>',
                dataType: 'json',
                data: {
                    nik: $('.pasien_nik').val(),
                },
                success: function(data) {
                    if (data == null) {
                        bootbox.alert({
                            message: "Data NIK tidak ditemukan",
                            backdrop: true,
                            size: 'small'
                        });
                    } else {
                        $('.pasien_nama').val(data.NAMA_LGKP_EKTP);
                        $('.pasien_jk').val(data.JENIS_KLMIN).trigger("change");
                        $('.pasien_tempat_lahir').val(data.TMPT_LHR_EKTP);
                        $('.pasien_tgl_lahir').val(data.TGL_LHR_EKTP.substring(0, 10));
                        $('.pasien_pekerjaan').val(data.JENIS_PKRJN_EKTP);
                        $('.pasien_alamat').val(data.NAMA_KEL_EKTP + ', ' + data.NAMA_KEC_EKTP + '. ' + data.NAMA_KAB_EKTP);

                        var tanggal_awal_moment = moment(data.TGL_LHR_EKTP.substring(0, 10)).format('YYYY-MM-DD');
                        var tanggal_sekarang_moment = moment().format('YYYY-MM-DD')
                        var selisih_tahun = moment().diff(data.TGL_LHR_EKTP.substring(0, 10), 'years');
                        $('.pasien_umur').val(selisih_tahun);

                    }
                },
                error: function(xhr, desc, err) {
                    console.log(xhr.responseText);
                }
            });
        }
    });

    $('.btnTambah').click(function() {
        $(".form_add").trigger('reset');
        $('.pasien_pmi').val("").trigger("change");
        $('.pasien_goldar').val("").trigger("change");
        $('.pasien_jk').val("").trigger("change");

        $('#modalTambahTitle').html('Tambah Pasien');
        $('#modalTambah').modal();
    });

    var data_aktif = [
        [{
                "text": "NIK"
            }, {
                "text": "Nama"
            }, {
                "text": "Jenis Kelamin"
            }, {
                "text": "Tempat Lahir"
            }, {
                "text": "Tanggal Lahir"
            }, {
                "text": "Pekerjaan"
            }, {
                "text": "Alamat"
            },
            {
                "text": "Umur"
            }, {
                "text": "No HP"
            }, {
                "text": "Golongan Darah"
            }, {
                "text": "Apakah Pasien?"
            }, {
                "text": "Negara Tempat Bekerja (jika PMI)"
            },
            {
                "text": "Riwayat Penerbangan"
            }, {
                "text": "Demam"
            }, {
                "text": "Batuk"
            }, {
                "text": "Sesak"
            }, {
                "text": "Lain-lain"
            }, {
                "text": "Covid 19 PCR test (Swab) POSITIF"
            }, {
                "text": "Covid 19 Rapid Test REACTIVE"
            }, {
                "text": "Riwayat Sakit Sebelumnya"
            },
            {
                "text": "Riwayat Minum Obat"
            }, {
                "text": "No. HP Keluarga"
            }, {
                "text": "Nama Puskesmas/RS yang Merujuk"
            }, {
                "text": "Nomor Kendaraan yang digunakan Merujuk"
            },
            {
                "text": "Nama Petugas yang merujuk 1"
            }, {
                "text": "No. HP Petugas yang merujuk 1"
            }, {
                "text": "Nama Petugas yang merujuk 2"
            }, {
                "text": "No. HP Petugas yang merujuk 2"
            }, {
                "text": "Tanggal Mulai Karantina"
            }, {
                "text": "Tanggal Selesai Karantina"
            }, {
                "text": "Status Pasien"
            },
        ]
    ];
    var data_tidak_aktif = [
        [{
                "text": "NIK"
            }, {
                "text": "Nama"
            }, {
                "text": "Jenis Kelamin"
            }, {
                "text": "Tempat Lahir"
            }, {
                "text": "Tanggal Lahir"
            }, {
                "text": "Pekerjaan"
            }, {
                "text": "Alamat"
            },
            {
                "text": "Umur"
            }, {
                "text": "No HP"
            }, {
                "text": "Golongan Darah"
            }, {
                "text": "Apakah Pasien?"
            }, {
                "text": "Negara Tempat Bekerja (jika PMI)"
            },
            {
                "text": "Riwayat Penerbangan"
            }, {
                "text": "Demam"
            }, {
                "text": "Batuk"
            }, {
                "text": "Sesak"
            }, {
                "text": "Lain-lain"
            }, {
                "text": "Covid 19 PCR test (Swab) POSITIF"
            }, {
                "text": "Covid 19 Rapid Test REACTIVE"
            }, {
                "text": "Riwayat Sakit Sebelumnya"
            },
            {
                "text": "Riwayat Minum Obat"
            }, {
                "text": "No. HP Keluarga"
            }, {
                "text": "Nama Puskesmas/RS yang Merujuk"
            }, {
                "text": "Nomor Kendaraan yang digunakan Merujuk"
            },
            {
                "text": "Nama Petugas yang merujuk 1"
            }, {
                "text": "No. HP Petugas yang merujuk 1"
            }, {
                "text": "Nama Petugas yang merujuk 2"
            }, {
                "text": "No. HP Petugas yang merujuk 2"
            }, {
                "text": "Tanggal Mulai Karantina"
            }, {
                "text": "Tanggal Selesai Karantina"
            }, {
                "text": "Status Pasien"
            },
        ]
    ];

    $('.btnExport').click(function() {
        $('.form_status').trigger('reset');
        $('#modalExport').modal();
    })

    $('.btnExportSubmit').click(function() {
        if ($('.status_pasien').val() == '1') {
            Jhxlsx.export([{
                "sheetName": "Sheet1",
                "data": data_aktif
            }], {
                fileName: "Export data " + <?php echo json_encode($tempat) ?> + ' ' + moment().format('DD-MM-YYYY')
            });
        } else {
            Jhxlsx.export([{
                "sheetName": "Sheet1",
                "data": data_tidak_aktif
            }], {
                fileName: "Export data " + <?php echo json_encode($tempat) ?> + ' ' + moment().format('DD-MM-YYYY')
            });
        }
    })

    $('.btnSubmitDetil').click(function() {
        if ($('.pasien_nik_detil').val() == '' || $('.pasien_nama_detil').val() == '' || $('.pasien_jk_detil').val() == '' || $('.pasien_tempat_lahir_detil').val() == '' || $('.pasien_tgl_lahir_detil').val() == '' ||
            $('.pasien_pekerjaan_detil').val() == '' || $('.pasien_alamat_detil').val() == '' || $('.pasien_umur_detil').val() == '' || $('.pasien_hp_detil').val() == '' || $('.pasien_goldar_detil').val() == '' ||
            $('.pasien_pmi_detil').val() == '' || $('.pasien_hp_keluarga_detil').val() == '' || $('.pasien_nama_rs_detil').val() == '' || $('.pasien_nomor_kendaraan_detil').val() == '' ||
            $('.pasien_nama_petugas1_detil').val() == '' || $('.pasien_hp_petugas1_detil').val() == '' || $('.pasien_masuk_detil').val() == ''
        ) {
            bootbox.alert({
                message: "Mohon lengkapi data",
                backdrop: true,
                size: 'small'
            });
        } else {
            let rapid = 0;
            let covid = 0;
            let demam = 0;
            let batuk = 0;
            let sesak = 0;
            let lain = 0;
            if ($('#pasien_pemeriksaan_rapid_detil').is(":checked")) {
                radid = 1;
            } else {
                rapid = 0;
            }

            if ($('#pasien_pemeriksaan_covid_detil').is(":checked")) {
                covid = 1;
            } else {
                covid = 0;
            }

            if ($('#pasien_keluhan_demam_detil').is(":checked")) {
                demam = 1;
            } else {
                demam = 0;
            }

            if ($('#pasien_keluhan_batuk_detil').is(":checked")) {
                batuk = 1;
            } else {
                batuk = 0;
            }

            if ($('#pasien_keluhan_sesak_detil').is(":checked")) {
                sesak = 1;
            } else {
                sesak = 0;
            }

            if ($('#pasien_keluhan_lain_detil').is(":checked")) {
                lain = 1;
            } else {
                lain = 0;
            }

            $('.preloader').fadeIn();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('dashboard/update_pasien') ?>',
                dataType: 'json',
                data: {
                    pasien_id: $('.pasien_id_detil').val(),
                    pasien_nik: $('.pasien_nik_detil').val(),
                    pasien_nama: $('.pasien_nama_detil').val(),
                    pasien_jk: $('.pasien_jk_detil').val(),
                    pasien_tempat_lahir: $('.pasien_tempat_lahir_detil').val(),
                    pasien_tgl_lahir: $('.pasien_tgl_lahir_detil').val(),
                    pasien_pekerjaan: $('.pasien_pekerjaan_detil').val(),
                    pasien_alamat: $('.pasien_alamat_detil').val(),
                    pasien_umur: $('.pasien_umur_detil').val(),
                    pasien_hp: $('.pasien_hp_detil').val(),
                    pasien_goldar: $('.pasien_goldar_detil').val(),
                    pasien_pmi: $('.pasien_pmi_detil').val(),
                    pasien_negara_bekerja: $('.pasien_negara_bekerja_detil').val(),
                    pasien_penerbangan: $('.pasien_penerbangan_detil').val(),
                    pasien_keluhan_demam: demam,
                    pasien_keluhan_batuk: batuk,
                    pasien_keluhan_sesak: sesak,
                    pasien_keluhan_lain: lain,
                    pasien_pemeriksaan_covid: covid,
                    pasien_pemeriksaan_rapid: rapid,
                    pasien_riwayat_sakit: $('.pasien_riwayat_sakit_detil').val(),
                    pasien_riwayat_minum_obat: $('.pasien_riwayat_minum_obat_detil').val(),
                    pasien_hp_keluarga: $('.pasien_hp_keluarga_detil').val(),
                    pasien_nama_rs: $('.pasien_nama_rs_detil').val(),
                    pasien_nomor_kendaraan: $('.pasien_nomor_kendaraan_detil').val(),
                    pasien_nama_petugas1: $('.pasien_nama_petugas1_detil').val(),
                    pasien_nama_petugas2: $('.pasien_nama_petugas2_detil').val(),
                    pasien_hp_petugas1: $('.pasien_hp_petugas1_detil').val(),
                    pasien_hp_petugas2: $('.pasien_hp_petugas2_detil').val(),
                    pasien_masuk: $('.pasien_masuk_detil').val(),
                },
                success: function(data) {
                    $('.preloader').fadeOut();
                    console.log(data);
                    if (data) {
                        bootbox.alert({
                            message: "Pasien berhasil diupdate",
                            backdrop: true,
                            size: 'small',
                            callback: function() {
                                location.reload();
                            }
                        });

                    } else {
                        bootbox.alert({
                            message: "Gagal update data",
                            backdrop: true,
                            size: 'small'
                        });
                    }
                },
                error: function(xhr, desc, err) {
                    console.log(xhr.responseText);
                }
            });
        }
    });

    $('.btnSave').click(function() {

        if ($('.pasien_nik').val() == '' || $('.pasien_nama').val() == '' || $('.pasien_jk').val() == '' || $('.pasien_tempat_lahir').val() == '' || $('.pasien_tgl_lahir').val() == '' ||
            $('.pasien_pekerjaan').val() == '' || $('.pasien_alamat').val() == '' || $('.pasien_umur').val() == '' || $('.pasien_hp').val() == '' || $('.pasien_goldar').val() == '' ||
            $('.pasien_pmi').val() == '' || $('.pasien_hp_keluarga').val() == '' || $('.pasien_nama_rs').val() == '' || $('.pasien_nomor_kendaraan').val() == '' ||
            $('.pasien_nama_petugas1').val() == '' || $('.pasien_hp_petugas1').val() == '' || $('.pasien_masuk').val() == ''
        ) {
            bootbox.alert({
                message: "Mohon lengkapi data",
                backdrop: true,
                size: 'small'
            });
        } else {
            let rapid = 0;
            let covid = 0;
            let demam = 0;
            let batuk = 0;
            let sesak = 0;
            let lain = 0;
            if ($('#pasien_pemeriksaan_rapid').is(":checked")) {
                radid = 1;
            } else {
                rapid = 0;
            }

            if ($('#pasien_pemeriksaan_covid').is(":checked")) {
                covid = 1;
            } else {
                covid = 0;
            }

            if ($('#pasien_keluhan_demam').is(":checked")) {
                demam = 1;
            } else {
                demam = 0;
            }

            if ($('#pasien_keluhan_batuk').is(":checked")) {
                batuk = 1;
            } else {
                batuk = 0;
            }

            if ($('#pasien_keluhan_sesak').is(":checked")) {
                sesak = 1;
            } else {
                sesak = 0;
            }

            if ($('#pasien_keluhan_lain').is(":checked")) {
                lain = 1;
            } else {
                lain = 0;
            }

            $('.preloader').fadeIn();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('dashboard/add_pasien') ?>',
                dataType: 'json',
                data: {
                    pasien_nik: $('.pasien_nik').val(),
                    pasien_nama: $('.pasien_nama').val(),
                    pasien_jk: $('.pasien_jk').val(),
                    pasien_tempat_lahir: $('.pasien_tempat_lahir').val(),
                    pasien_tgl_lahir: $('.pasien_tgl_lahir').val(),
                    pasien_pekerjaan: $('.pasien_pekerjaan').val(),
                    pasien_alamat: $('.pasien_alamat').val(),
                    pasien_umur: $('.pasien_umur').val(),
                    pasien_hp: $('.pasien_hp').val(),
                    pasien_goldar: $('.pasien_goldar').val(),
                    pasien_pmi: $('.pasien_pmi').val(),
                    pasien_negara_bekerja: $('.pasien_negara_bekerja').val(),
                    pasien_penerbangan: $('.pasien_penerbangan').val(),
                    pasien_keluhan_demam: demam,
                    pasien_keluhan_batuk: batuk,
                    pasien_keluhan_sesak: sesak,
                    pasien_keluhan_lain: lain,
                    pasien_pemeriksaan_covid: covid,
                    pasien_pemeriksaan_rapid: rapid,
                    pasien_riwayat_sakit: $('.pasien_riwayat_sakit').val(),
                    pasien_riwayat_minum_obat: $('.pasien_riwayat_minum_obat').val(),
                    pasien_hp_keluarga: $('.pasien_hp_keluarga').val(),
                    pasien_nama_rs: $('.pasien_nama_rs').val(),
                    pasien_nomor_kendaraan: $('.pasien_nomor_kendaraan').val(),
                    pasien_nama_petugas1: $('.pasien_nama_petugas1').val(),
                    pasien_nama_petugas2: $('.pasien_nama_petugas2').val(),
                    pasien_hp_petugas1: $('.pasien_hp_petugas1').val(),
                    pasien_hp_petugas2: $('.pasien_hp_petugas2').val(),
                    pasien_masuk: $('.pasien_masuk').val(),
                },
                success: function(data) {
                    $('.preloader').fadeOut();
                    if (data.status) {
                        bootbox.alert({
                            message: ""+data.msg,
                            backdrop: true,
                            size: 'small',
                            callback: function() {
                                location.reload();
                            }
                        });
                    } else {
                        if(data.flag == 2){
                            bootbox.confirm({
                                title: "Tambah pasien",
                                message: ""+data.msg,
                                buttons: {
                                    cancel: {
                                        label: 'Batal',
                                        className: 'btn btn-secondary'
                                    },
                                    confirm: {
                                        label: 'Lanjut',
                                        className: 'btn btn-primary'
                                    }
                                },
                                callback: function(result) {
                                    if (result) {
                                        $('.preloader').fadeIn();
                                        $.ajax({
                                            type: 'POST',
                                            url: '<?php echo base_url('dashboard/add_pasien2') ?>',
                                            dataType: 'json',
                                            data: {
                                                pasien_nik: $('.pasien_nik').val(),
                                                pasien_nama: $('.pasien_nama').val(),
                                                pasien_jk: $('.pasien_jk').val(),
                                                pasien_tempat_lahir: $('.pasien_tempat_lahir').val(),
                                                pasien_tgl_lahir: $('.pasien_tgl_lahir').val(),
                                                pasien_pekerjaan: $('.pasien_pekerjaan').val(),
                                                pasien_alamat: $('.pasien_alamat').val(),
                                                pasien_umur: $('.pasien_umur').val(),
                                                pasien_hp: $('.pasien_hp').val(),
                                                pasien_goldar: $('.pasien_goldar').val(),
                                                pasien_pmi: $('.pasien_pmi').val(),
                                                pasien_negara_bekerja: $('.pasien_negara_bekerja').val(),
                                                pasien_penerbangan: $('.pasien_penerbangan').val(),
                                                pasien_keluhan_demam: demam,
                                                pasien_keluhan_batuk: batuk,
                                                pasien_keluhan_sesak: sesak,
                                                pasien_keluhan_lain: lain,
                                                pasien_pemeriksaan_covid: covid,
                                                pasien_pemeriksaan_rapid: rapid,
                                                pasien_riwayat_sakit: $('.pasien_riwayat_sakit').val(),
                                                pasien_riwayat_minum_obat: $('.pasien_riwayat_minum_obat').val(),
                                                pasien_hp_keluarga: $('.pasien_hp_keluarga').val(),
                                                pasien_nama_rs: $('.pasien_nama_rs').val(),
                                                pasien_nomor_kendaraan: $('.pasien_nomor_kendaraan').val(),
                                                pasien_nama_petugas1: $('.pasien_nama_petugas1').val(),
                                                pasien_nama_petugas2: $('.pasien_nama_petugas2').val(),
                                                pasien_hp_petugas1: $('.pasien_hp_petugas1').val(),
                                                pasien_hp_petugas2: $('.pasien_hp_petugas2').val(),
                                                pasien_masuk: $('.pasien_masuk').val(),
                                            },
                                            success: function(data) {
                                                $('.preloader').fadeOut();
                                                if (data.status) {
                                                    bootbox.alert({
                                                        message: ""+data.msg,
                                                        backdrop: true,
                                                        size: 'small',
                                                        callback: function() {
                                                            location.reload();
                                                        }
                                                    });
                                                } else {
                                                        bootbox.alert({
                                                            message: ""+data.msg,
                                                            backdrop: true,
                                                            size: 'small'
                                                        });
                                                    }
                                            },
                                            error: function(xhr, desc, err) {
                                                console.log(xhr.responseText);
                                            }
                                        });
                                    }else{
                                        $('#modalTambah').modal('hide');
                                    }
                                }
                            });
                        }else{
                            bootbox.alert({
                                message: ""+data.msg,
                                backdrop: true,
                                size: 'small'
                            });
                        }
                        
                    }
                },
                error: function(xhr, desc, err) {
                    console.log(xhr.responseText);
                }
            });
        }
    });

    $('.btnSelesaiSubmit').click(function() {
        if ($('.pasien_keluar').val() == '') {
            bootbox.alert({
                message: "Mohon lengkapi data",
                backdrop: true,
                size: 'small'
            });
        } else {
            $('.preloader').fadeIn();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('dashboard/selesai_pasien') ?>',
                dataType: 'json',
                data: {
                    pasien_id: $('.pasien_id_selesai').val(),
                    pasien_keluar: $('.pasien_keluar').val(),
                },
                success: function(data) {
                    $('.preloader').fadeOut();
                    if (data) {
                        bootbox.alert({
                            message: "Data berhasil disimpan",
                            backdrop: true,
                            size: 'small',
                            callback: function() {
                                location.reload();
                            }
                        });

                    } else {
                        bootbox.alert({
                            message: "Data gagal disimpan",
                            backdrop: true,
                            size: 'small'
                        });
                    }
                },
                error: function(xhr, desc, err) {
                    console.log(xhr.responseText);
                }
            });
        }
    });

    $('.btnPindahSubmit').click(function() {
        if ($('.lokasi_pindah').val() == '') {
            bootbox.alert({
                message: "Mohon lengkapi data",
                backdrop: true,
                size: 'small'
            });
        } else {
            $('.preloader').fadeIn();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('dashboard/pindah_pasien') ?>',
                dataType: 'json',
                data: {
                    pasien_id: $('.pasien_id_pindah').val(),
                    pasien_lokasi_id: $('.lokasi_pindah').val(),
                },
                success: function(data) {
                    $('.preloader').fadeOut();
                    if (data) {
                        bootbox.alert({
                            message: "Data berhasil disimpan",
                            backdrop: true,
                            size: 'small',
                            callback: function() {
                                location.reload();
                            }
                        });

                    } else {
                        bootbox.alert({
                            message: "Data gagal disimpan",
                            backdrop: true,
                            size: 'small'
                        });
                    }
                },
                error: function(xhr, desc, err) {
                    console.log(xhr.responseText);
                }
            });
        }
    });

    var KTDatatableRemoteAjaxDemo = function() {
        // Private functions

        // basic demo
        var demo = function() {

            var datatable = $('#kt_datatable').KTDatatable({
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '<?php echo base_url('dashboard/list_pasien_operator') ?>',
                            map: function(raw) {
                                // sample data mapping
                                var dataSet = raw;
                                if (typeof raw.data !== 'undefined') {
                                    dataSet = raw.data;
                                }

                                for (var i = 0; i < dataSet.length; i++) {
                                    let jk = "Laki-laki";
                                    if (dataSet[i].pasien_jk == 1) {
                                        jk = "Laki-laki";
                                    } else {
                                        jk = "Perempuan";
                                    }

                                    let status = "Aktif";
                                    if (dataSet[i].pasien_status == 1) {
                                        status = "Aktif";
                                    } else {
                                        status = "Tidak Aktif";
                                    }

                                    let demam = "Ya";
                                    if (dataSet[i].pasien_keluhan_demam == 1) {
                                        demam = "Ya";
                                    } else {
                                        demam = "Tidak";
                                    }

                                    let batuk = "Ya";
                                    if (dataSet[i].pasien_keluhan_batuk == 1) {
                                        batuk = "Ya";
                                    } else {
                                        batuk = "Tidak";
                                    }

                                    let sesak = "Ya";
                                    if (dataSet[i].pasien_keluhan_sesak == 1) {
                                        sesak = "Ya";
                                    } else {
                                        sesak = "Tidak";
                                    }

                                    let lain = "Ya";
                                    if (dataSet[i].pasien_keluhan_lain == 1) {
                                        lain = "Ya";
                                    } else {
                                        lain = "Tidak";
                                    }

                                    let covid = "Ya";
                                    if (dataSet[i].pasien_pemeriksaan_covid == 1) {
                                        covid = "Ya";
                                    } else {
                                        covid = "Tidak";
                                    }

                                    let rapid = "Ya";
                                    if (dataSet[i].pasien_pemeriksaan_rapid == 1) {
                                        rapid = "Ya";
                                    } else {
                                        rapid = "Tidak";
                                    }

                                    let pmi = "Pekerja Migran Indonesia (PMI)";
                                    if (dataSet[i].pasien_pmi == 1) {
                                        pmi = "Pekerja Migran Indonesia (PMI)";
                                    } else {
                                        pmi = "Bukan Pekerja Migran Indonesia (PMI)";
                                    }

                                    var tanggal_awal_moment1 = moment(dataSet[i].pasien_tgl_lahir.substring(0, 10)).format('YYYY-MM-DD');
                                    var tanggal_sekarang_moment1 = moment().format('YYYY-MM-DD')
                                    var selisih_tahun1 = moment().diff(dataSet[i].pasien_tgl_lahir.substring(0, 10), 'years');

                                    if (dataSet[i].pasien_status == 0) {
                                        data_tidak_aktif.push(
                                            [{
                                                    "text": dataSet[i].pasien_nik
                                                }, {
                                                    "text": dataSet[i].pasien_nama
                                                }, {
                                                    "text": jk
                                                }, {
                                                    "text": dataSet[i].pasien_tempat_lahir
                                                }, {
                                                    "text": dataSet[i].pasien_tgl_lahir
                                                }, {
                                                    "text": dataSet[i].pasien_pekerjaan
                                                }, {
                                                    "text": dataSet[i].pasien_alamat
                                                },
                                                {
                                                    "text": selisih_tahun1
                                                }, {
                                                    "text": dataSet[i].pasien_hp
                                                }, {
                                                    "text": dataSet[i].pasien_goldar
                                                }, {
                                                    "text": pmi
                                                }, {
                                                    "text": dataSet[i].pasien_negara_bekerja
                                                },
                                                {
                                                    "text": dataSet[i].pasien_penerbangan
                                                }, {
                                                    "text": demam
                                                }, {
                                                    "text": batuk
                                                }, {
                                                    "text": sesak
                                                }, {
                                                    "text": lain
                                                }, {
                                                    "text": covid
                                                }, {
                                                    "text": rapid
                                                }, {
                                                    "text": dataSet[i].pasien_riwayat_sakit
                                                },
                                                {
                                                    "text": dataSet[i].pasien_riwayat_minum_obat
                                                }, {
                                                    "text": dataSet[i].pasien_hp_keluarga
                                                }, {
                                                    "text": dataSet[i].pasien_nama_rs
                                                }, {
                                                    "text": dataSet[i].pasien_nomor_kendaraan
                                                },
                                                {
                                                    "text": dataSet[i].pasien_nama_petugas1
                                                }, {
                                                    "text": dataSet[i].pasien_hp_petugas1
                                                }, {
                                                    "text": dataSet[i].pasien_nama_petugas2
                                                }, {
                                                    "text": dataSet[i].pasien_hp_petugas2
                                                }, {
                                                    "text": dataSet[i].pasien_masuk
                                                }, {
                                                    "text": dataSet[i].pasien_keluar
                                                }, {
                                                    "text": status
                                                },
                                            ]
                                        );
                                    } else {
                                        data_aktif.push(
                                            [{
                                                    "text": dataSet[i].pasien_nik
                                                }, {
                                                    "text": dataSet[i].pasien_nama
                                                }, {
                                                    "text": jk
                                                }, {
                                                    "text": dataSet[i].pasien_tempat_lahir
                                                }, {
                                                    "text": dataSet[i].pasien_tgl_lahir
                                                }, {
                                                    "text": dataSet[i].pasien_pekerjaan
                                                }, {
                                                    "text": dataSet[i].pasien_alamat
                                                },
                                                {
                                                    "text": selisih_tahun1
                                                }, {
                                                    "text": dataSet[i].pasien_hp
                                                }, {
                                                    "text": dataSet[i].pasien_goldar
                                                }, {
                                                    "text": pmi
                                                }, {
                                                    "text": dataSet[i].pasien_negara_bekerja
                                                },
                                                {
                                                    "text": dataSet[i].pasien_penerbangan
                                                }, {
                                                    "text": demam
                                                }, {
                                                    "text": batuk
                                                }, {
                                                    "text": sesak
                                                }, {
                                                    "text": lain
                                                }, {
                                                    "text": covid
                                                }, {
                                                    "text": rapid
                                                }, {
                                                    "text": dataSet[i].pasien_riwayat_sakit
                                                },
                                                {
                                                    "text": dataSet[i].pasien_riwayat_minum_obat
                                                }, {
                                                    "text": dataSet[i].pasien_hp_keluarga
                                                }, {
                                                    "text": dataSet[i].pasien_nama_rs
                                                }, {
                                                    "text": dataSet[i].pasien_nomor_kendaraan
                                                },
                                                {
                                                    "text": dataSet[i].pasien_nama_petugas1
                                                }, {
                                                    "text": dataSet[i].pasien_hp_petugas1
                                                }, {
                                                    "text": dataSet[i].pasien_nama_petugas2
                                                }, {
                                                    "text": dataSet[i].pasien_hp_petugas2
                                                }, {
                                                    "text": dataSet[i].pasien_masuk
                                                }, {
                                                    "text": dataSet[i].pasien_keluar
                                                }, {
                                                    "text": status
                                                },
                                            ]
                                        );
                                    }
                                }

                                return dataSet;
                            },
                        },
                    },
                    pageSize: 10,
                    serverPaging: true,
                    // serverFiltering: true,
                    serverSorting: true,
                },

                // layout definition
                layout: {
                    scroll: false,
                    footer: false,
                },

                // column sorting
                sortable: true,

                pagination: true,

                search: {
                    input: $('#kt_datatable_search_query'),
                    key: 'generalSearch'
                },

                // columns definition
                columns: [{
                        field: 'pasien_nik',
                        title: 'NIK'
                    }, {
                        field: 'pasien_nama',
                        title: 'Nama',
                    }, {
                        field: 'pasien_masuk',
                        title: 'Tgl Masuk',
                    },
                    {
                        field: 'pasien_keluar',
                        title: 'Tgl Keluar',
                    }, {
                        field: 'pasien_status',
                        title: 'Status',
                        template: function(row) {
                            if (row.pasien_status == 1) {
                                return '<span class="label label-success label-pill label-inline">Aktif</span>';
                            } else {
                                return '<span class="label label-danger label-pill label-inline">Tidak Aktif</span>';
                            }
                        }
                    }, {
                        field: 'Actions',
                        title: 'Actions',
                        sortable: false,
                        width: 125,
                        overflow: 'visible',
                        autoHide: false,
                        template: function(row) {
                            if (row.pasien_status == 1) {
                                return '\
                                    <a href="javascript:;" data-id="' + row.pasien_id + '" data-nik="' + row.pasien_nik + '" class="btn btn-sm btn-clean btn-icon btnDetail" title="Lihat Detail">\
                                        <i class="la la-eye"></i>\
                                    </a>\
                                    <a href="javascript:;" data-id="' + row.pasien_id + '" data-nik="' + row.pasien_nik + '" class="btn btn-sm btn-clean btn-icon btnSelesai" title="Selesai Karantina">\
                                        <i class="la la-check"></i>\
                                    </a>\
                                ';
                            } else {
                                return '\
                                    <a href="javascript:;" data-id="' + row.pasien_id + '" data-nik="' + row.pasien_nik + '" class="btn btn-sm btn-clean btn-icon btnDetail" title="Lihat Detail">\
                                        <i class="la la-eye"></i>\
                                    </a>\
                                ';
                            }
                            
                        },
                    }
                ],

            });

            $('#kt_datatable_search_status').on('change', function() {
                datatable.search($(this).val().toLowerCase(), 'pasien_status');
            });

            $('#kt_datatable_search_status').select2();
            $('#kt_datatable_search_status').val(1).trigger("change");

            $(document).on("click", ".btnSelesai", function() {
                let nik = $(this).data("nik");
                let id = $(this).data("id");
                $('.pasien_nik_selesai').val(nik);
                $('.pasien_id_selesai').val(id);
                $(".form_selesai").trigger('reset');
                $('#modalSelesai').modal();
            });

            $(document).on("click", ".btnDetail", function() {
                let nik = $(this).data("nik");
                let id = $(this).data("id");
                $('.pasien_nik_detil').val(nik);
                $('.pasien_id_detil').val(id);
                $(".form_detil").trigger('reset');

                $('.pasien_nama_detil').attr('disabled', true);
                $('.pasien_nik_detil').attr('disabled', true);
                $('.pasien_jk_detil').attr('disabled', true);
                $('.pasien_tempat_lahir_detil').attr('disabled', true);
                $('.pasien_tgl_lahir_detil').attr('disabled', true);
                $('.pasien_pekerjaan_detil').attr('disabled', true);
                $('.pasien_alamat_detil').attr('disabled', true);
                $('.pasien_umur_detil').attr('disabled', true);
                $('.pasien_hp_detil').attr('disabled', true);
                $('.pasien_goldar_detil').attr('disabled', true);
                $('.pasien_pmi_detil').attr('disabled', true);
                $('.pasien_jk_detil').attr('disabled', true);
                $('.pasien_negara_bekerja_detil').attr('disabled', true);
                $('.pasien_penerbangan_detil').attr('disabled', true);
                $('.pasien_riwayat_sakit_detil').attr('disabled', true);
                $('.pasien_riwayat_minum_obat_detil').attr('disabled', true);
                $('.pasien_hp_keluarga_detil').attr('disabled', true);
                $('.pasien_nama_rs_detil').attr('disabled', true);
                $('.pasien_nomor_kendaraan_detil').attr('disabled', true);
                $('.pasien_nama_petugas1_detil').attr('disabled', true);
                $('.pasien_nama_petugas2_detil').attr('disabled', true);
                $('.pasien_hp_petugas1_detil').attr('disabled', true);
                $('.pasien_hp_petugas2_detil').attr('disabled', true);
                $('.pasien_masuk_detil').attr('disabled', true);
                $('#pasien_pemeriksaan_rapid_detil').attr('disabled', true);
                $('#pasien_pemeriksaan_covid_detail').attr('disabled', true);
                $('#pasien_keluhan_demam_detil').attr('disabled', true);
                $('#pasien_keluhan_batuk_detil').attr('disabled', true);
                $('#pasien_keluhan_sesak_detil').attr('disabled', true);
                $('#pasien_keluhan_lain_detil').attr('disabled', true);

                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url('dashboard/detail_pasien') ?>',
                    dataType: 'json',
                    data: {
                        pasien_id: id
                    },
                    success: function(data) {

                        if (data.pasien_pemeriksaan_rapid == 1) {
                            $('#pasien_pemeriksaan_rapid_detil').prop("checked", true)
                        }

                        if (data.pasien_pemeriksaan_covid == 1) {
                            $('#pasien_pemeriksaan_covid_detil').prop("checked", true)
                        }

                        if (data.pasien_keluhan_demam == 1) {
                            $('#pasien_keluhan_demam_detil').prop("checked", true)
                        }

                        if (data.pasien_keluhan_batuk == 1) {
                            $('#pasien_keluhan_batuk_detil').prop("checked", true)
                        }

                        if (data.pasien_keluhan_sesak == 1) {
                            $('#pasien_keluhan_sesak_detil').prop("checked", true)
                        }

                        if (data.pasien_keluhan_lain == 1) {
                            $('#pasien_keluhan_lain_detil').prop("checked", true)
                        }

                        $('#modalDetilTitle').html(data.pasien_nama);
                        $('.pasien_nama_detil').val(data.pasien_nama);
                        $('.pasien_nik_detil').val(data.pasien_nik);
                        $('.pasien_jk_detil').val(data.pasien_jk).trigger("change");
                        $('.pasien_tempat_lahir_detil').val(data.pasien_tempat_lahir);
                        $('.pasien_tgl_lahir_detil').val(data.pasien_tgl_lahir);
                        $('.pasien_pekerjaan_detil').val(data.pasien_pekerjaan);
                        $('.pasien_alamat_detil').val(data.pasien_alamat);
                        $('.pasien_umur_detil').val(data.pasien_umur);
                        $('.pasien_hp_detil').val(data.pasien_hp);
                        $('.pasien_goldar_detil').val(data.pasien_goldar).trigger("change");
                        $('.pasien_pmi_detil').val(data.pasien_pmi).trigger("change");
                        $('.pasien_negara_bekerja_detil').val(data.pasien_negara_bekerja);
                        $('.pasien_penerbangan_detil').val(data.pasien_penerbangan);
                        $('.pasien_riwayat_sakit_detil').val(data.pasien_riwayat_sakit);
                        $('.pasien_riwayat_minum_obat_detil').val(data.pasien_riwayat_minum_obat);
                        $('.pasien_hp_keluarga_detil').val(data.pasien_hp_keluarga);
                        $('.pasien_nama_rs_detil').val(data.pasien_nama_rs);
                        $('.pasien_nomor_kendaraan_detil').val(data.pasien_nomor_kendaraan);
                        $('.pasien_nama_petugas1_detil').val(data.pasien_nama_petugas1);
                        $('.pasien_nama_petugas2_detil').val(data.pasien_nama_petugas2);
                        $('.pasien_hp_petugas1_detil').val(data.pasien_hp_petugas1);
                        $('.pasien_hp_petugas2_detil').val(data.pasien_hp_petugas2);
                        $('.pasien_masuk_detil').val(data.pasien_masuk);
                        $('.btnSubmitDetil').fadeOut(1);
                        $('#modalDetil').modal();
                    },
                    error: function(xhr, desc, err) {
                        console.log(xhr.responseText);
                    }
                });
            });

            // $(document).on("click", ".btnPindah", function() {
            //     let nik = $(this).data("nik");
            //     let lokasi = $(this).data("lokasi");
            //     let id = $(this).data("id");
            //     $('.pasien_id_pindah').val(id);
            //     $('.lokasi_pindah').val(lokasi).trigger("change");
            //     $('.pasien_nik_pindah').val(nik);
            //     $(".form_pindah").trigger('reset');
            //     $('#modalPindah').modal();
            // });

            // $(document).on("click", ".btnDelete", function() {
            //     let nik = $(this).data("nik");
            //     let id = $(this).data("id");
            //     bootbox.confirm({
            //         title: "Hapus pasien?",
            //         message: "Data yang telah dihapus tidak dapat dikembalikan",
            //         buttons: {
            //             cancel: {
            //                 label: 'Batal'
            //             },
            //             confirm: {
            //                 label: 'OK',
            //                 className: 'btn btn-primary'
            //             }
            //         },
            //         callback: function(result) {
            //             if (result) {
            //                 $.ajax({
            //                     type: 'POST',
            //                     url: '<?php echo base_url('dashboard/delete_pasien') ?>',
            //                     data: {
            //                         pasien_id: id,
            //                     },
            //                     dataType: 'json',
            //                     success: function(data) {
            //                         if (data) {
            //                             location.reload();
            //                         } else {
            //                             bootbox.alert({
            //                                 message: "Oops! Something wrong",
            //                                 backdrop: true,
            //                                 size: 'small'
            //                             });
            //                         }
            //                     },
            //                     error: function(xhr, desc, err) {
            //                         console.log(xhr.responseText);
            //                     }
            //                 });
            //             }
            //         }
            //     });
            // });

            // $(document).on("click", ".btnEdit", function() {
            //     let nik = $(this).data("nik");
            //     let id = $(this).data("id");
            //     $('.pasien_nik_detil').val(id);
            //     $('.pasien_nik_detil').val(nik);
            //     $(".form_detil").trigger('reset');

            //     $('.pasien_nama_detil').attr('disabled', false);
            //     $('.pasien_nik_detil').attr('disabled', false);
            //     $('.pasien_jk_detil').attr('disabled', false);
            //     $('.pasien_tempat_lahir_detil').attr('disabled', false);
            //     $('.pasien_tgl_lahir_detil').attr('disabled', false);
            //     $('.pasien_pekerjaan_detil').attr('disabled', false);
            //     $('.pasien_alamat_detil').attr('disabled', false);
            //     $('.pasien_umur_detil').attr('disabled', false);
            //     $('.pasien_hp_detil').attr('disabled', false);
            //     $('.pasien_goldar_detil').attr('disabled', false);
            //     $('.pasien_pmi_detil').attr('disabled', false);
            //     $('.pasien_jk_detil').attr('disabled', false);
            //     $('.pasien_negara_bekerja_detil').attr('disabled', false);
            //     $('.pasien_penerbangan_detil').attr('disabled', false);
            //     $('.pasien_riwayat_sakit_detil').attr('disabled', false);
            //     $('.pasien_riwayat_minum_obat_detil').attr('disabled', false);
            //     $('.pasien_hp_keluarga_detil').attr('disabled', false);
            //     $('.pasien_nama_rs_detil').attr('disabled', false);
            //     $('.pasien_nomor_kendaraan_detil').attr('disabled', false);
            //     $('.pasien_nama_petugas1_detil').attr('disabled', false);
            //     $('.pasien_nama_petugas2_detil').attr('disabled', false);
            //     $('.pasien_hp_petugas1_detil').attr('disabled', false);
            //     $('.pasien_hp_petugas2_detil').attr('disabled', false);
            //     $('.pasien_masuk_detil').attr('disabled', false);
            //     $('#pasien_pemeriksaan_rapid_detil').attr('disabled', false);
            //     $('#pasien_pemeriksaan_covid_detail').attr('disabled', false);
            //     $('#pasien_keluhan_demam_detil').attr('disabled', false);
            //     $('#pasien_keluhan_batuk_detil').attr('disabled', false);
            //     $('#pasien_keluhan_sesak_detil').attr('disabled', false);
            //     $('#pasien_keluhan_lain_detil').attr('disabled', false);

            //     $.ajax({
            //         type: 'POST',
            //         url: '<?php echo base_url('dashboard/detail_pasien') ?>',
            //         dataType: 'json',
            //         data: {
            //             pasien_id: id
            //         },
            //         success: function(data) {

            //             if (data.pasien_pemeriksaan_rapid == 1) {
            //                 $('#pasien_pemeriksaan_rapid_detil').attr("checked", true)
            //             }

            //             if (data.pasien_pemeriksaan_covid == 1) {
            //                 $('#pasien_pemeriksaan_covid_detail').attr("checked", true)
            //             }

            //             if (data.pasien_keluhan_demam == 1) {
            //                 $('#pasien_keluhan_demam_detil').attr("checked", true)
            //             }

            //             if (data.pasien_keluhan_batuk == 1) {
            //                 $('#pasien_keluhan_batuk_detil').attr("checked", true)
            //             }

            //             if (data.pasien_keluhan_sesak == 1) {
            //                 $('#pasien_keluhan_sesak_detil').attr("checked", true)
            //             }

            //             if (data.pasien_keluhan_lain == 1) {
            //                 $('#pasien_keluhan_lain_detil').attr("checked", true)
            //             }

            //             $('#modalDetilTitle').html(data.pasien_nama);
            //             $('.pasien_nama_detil').val(data.pasien_nama);
            //             $('.pasien_nik_detil').val(data.pasien_nik);
            //             $('.pasien_jk_detil').val(data.pasien_jk).trigger("change");
            //             $('.pasien_tempat_lahir_detil').val(data.pasien_tempat_lahir);
            //             $('.pasien_tgl_lahir_detil').val(data.pasien_tgl_lahir);
            //             $('.pasien_pekerjaan_detil').val(data.pasien_pekerjaan);
            //             $('.pasien_alamat_detil').val(data.pasien_alamat);
            //             $('.pasien_umur_detil').val(data.pasien_umur);
            //             $('.pasien_hp_detil').val(data.pasien_hp);
            //             $('.pasien_goldar_detil').val(data.pasien_goldar).trigger("change");
            //             $('.pasien_pmi_detil').val(data.pasien_pmi).trigger("change");
            //             $('.pasien_negara_bekerja_detil').val(data.pasien_negara_bekerja);
            //             $('.pasien_penerbangan_detil').val(data.pasien_penerbangan);
            //             $('.pasien_riwayat_sakit_detil').val(data.pasien_riwayat_sakit);
            //             $('.pasien_riwayat_minum_obat_detil').val(data.pasien_riwayat_minum_obat);
            //             $('.pasien_hp_keluarga_detil').val(data.pasien_hp_keluarga);
            //             $('.pasien_nama_rs_detil').val(data.pasien_nama_rs);
            //             $('.pasien_nomor_kendaraan_detil').val(data.pasien_nomor_kendaraan);
            //             $('.pasien_nama_petugas1_detil').val(data.pasien_nama_petugas1);
            //             $('.pasien_nama_petugas2_detil').val(data.pasien_nama_petugas2);
            //             $('.pasien_hp_petugas1_detil').val(data.pasien_hp_petugas1);
            //             $('.pasien_hp_petugas2_detil').val(data.pasien_hp_petugas2);
            //             $('.pasien_masuk_detil').val(data.pasien_masuk);
            //             $('.btnSubmitDetil').fadeIn(1);
            //             $('#modalDetil').modal();
            //         },
            //         error: function(xhr, desc, err) {
            //             console.log(xhr.responseText);
            //         }
            //     });
            // });
        };

        return {
            // public functions
            init: function() {
                demo();
            },
        };
    }();

    jQuery(document).ready(function() {
        KTDatatableRemoteAjaxDemo.init();
    });
</script>