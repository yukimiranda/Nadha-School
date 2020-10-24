// ROUTE 
var rToTambahDataJurusan = server + 'jurusan/datajurusan/tambah';

// VUE OBJECT 
var divDataJurusan = new Vue({
    el : '#divDataJurusan',
    data : {

    },
    methods : {
        tambahJurusanAtc : function ()
        {
            $(".btnPref").addClass("disabled");
            $("#divDataJurusan").hide();
            $("#divFormTambahJurusan").show();
            app.activeForm = "Tambah data jurusan";
            document.querySelector('#txtNamaJurusan').focus();
        }
    }
});

var divFormTambahJurusan = new Vue({
    el : '#divFormTambahJurusan',
    data : {
        capBtnSimpan : 'Simpan'
    },
    methods : {
        prosesTambahAtc : function ()
        {
            $('#btnSimpan').addClass("disabled");
            $("#divLoading").show();
            this.capBtnSimpan = "Menyimpan data jurusan ...";
            prosesTambahJurusan();
        }
    }
});

// INISIALISASI 
$("#tblDataJurusan").dataTable();
$("#divFormTambahJurusan").hide();
$("#divLoading").hide();

// FUNCTION 
function prosesTambahJurusan()
{
    let namaJurusan = document.querySelector('#txtNamaJurusan').value;
    let prefix = document.querySelector('#txtPrefix').value;
    let deks = document.querySelector('#txtDeks').value;
    let dataSend = {'namaJurusan':namaJurusan, 'prefix':prefix, 'deks':deks}
    $.post(rToTambahDataJurusan, dataSend, function(data){
        pesanUmumApp('success', 'Sukses simpan ...', 'Data jurusan baru berhasil di tambahkan ...');
        app.jurusanAtc();
    });
}