<div class="card card-primary" id="divDataRombel">
    <div class="card-body">
        <a href="#!" class="btn btn-primary btn-icon icon-left" @click="tambahRombelAtc"><i class="fas fa-plus-circle"></i> Tambah Rombel</a>
        <hr />
        <table id="tblDataRombel" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Rombel</th>
                    <th>Jurusan</th>
                    <th>Total Siswa</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datarombel as $rombel)
                <?php 
                    $kdJurusan = $rombel -> kd_jurusan;
                    $jurusan = DB::table('tbl_jurusan') -> where('kd_jurusan', $kdJurusan) -> first();
                ?>
                    <tr>
                        <td>{{ $loop -> iteration }}</td>
                        <td>{{ $rombel -> nama_rombel }}</td>
                        <td>{{ $jurusan -> nama_jurusan }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="card card-primary" id="divFormTambahRombel">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                    <label>Nama Rombel</label>
                    <input type="text" class="form-control" id="txtNamaRombel">
                </div>
                <div class="form-group">
                    <label>Deksripsi Rombel</label>
                    <textarea style="resize: none;" class="form-control" id="txtDeks"></textarea>
                </div>
                <div class="form-group">
                    <label>Jurusan</label>
                    <select class="form-control" id="txtJurusan">
                        <option value="none"> ---- Pilih Jurusan Rombel ----</option>
                        @foreach($datajurusan as $jurusan)
                        <option value="{{ $jurusan -> kd_jurusan }}">{{ $jurusan -> nama_jurusan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div style="text-align: center;">
                    <img src="{{ asset('ladun/dasbor/img/fig_2.png') }}" style="width: 250px;">
                </div>
            </div>
            <div>
                <a href="#!" class="btn btn-primary btn-icon icon-left" id="btnSimpan" @click="prosesTambahAtc">
                    <i class="fas fa-save"></i> @{{ capBtnSimpan }} <img src="{{ asset('ladun/dasbor/loading.svg') }}" width="20" id="divLoading">
                </a>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('ladun/dasbor/rombel/datarombel.js') }}"></script>