<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bella extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    


/*##################################### SISTEM PENGAJUAN BARANG ############################################## */

        Schema::create('users_pengajuan_barang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 100);
            $table->string('nik',100);
            $table->string('email', 100)->unique();
            $table->string('no_hp',100)->nullable();
            $table->string('bagian',100)->nullable();
            $table->string('jabatan',100)->nullable();
            $table->string('password', 500);
            $table->string('img_url', 100)->default('users.png');
            $table->integer('jumlah_surat_perintah_yang_terkirim')->default(0);
            $table->integer('jumlah_printlog_yang_terkirim')->default(0);
            $table->integer('jumlah_bast_yang_terkirim')->default(0);
            
            
        });

        Schema::create('surat_perintah_pengajuan_barang', function (Blueprint $table) {
            $table->string('nomor_surat', 100)->nullable();
            $table->string('nomor_peraturan_direksi',100)->nullable();
            $table->string('nomor_printlog', 100)->nullable();
            $table->string('kode_printlog',100)->nullable();
            $table->string('nomor_surat_keputusan',100)->nullable();
            $table->string('no_kja',100)->nullable();
            $table->string('kepada', 100)->nullable();
            $table->string('untuk_mengangkut', 100)->nullable();
            $table->string('dari', 100)->nullable();
            $table->string('tujuan', 100)->nullable();
            $table->string('alat_angkut', 100)->nullable();
            $table->string('nama_penginput', 100)->nullable();
            $table->string('nik_penginput', 100)->nullable();
            $table->string('keterangan', 1000)->nullable();


           
        });

        Schema::create('printlog_pengajuan_barang', function (Blueprint $table) {
            $table->date('tanggal')->nullable();
            $table->string('nomor',100)->nullable();
            $table->string('untuk', 100)->nullable();
            $table->string('asal_berita',100)->nullable();
            $table->string('hal',100)->nullable();
            $table->string('jumlah_lembar',100)->nullable();
            $table->string('tembusan', 100)->nullable();
            $table->string('kode_printlog', 100)->nullable();
            $table->string('keterangan_1', 1000)->nullable();
            $table->string('pengirim', 100)->nullable();
            $table->string('penerima', 100)->nullable();
            $table->string('kuantum', 100)->nullable();
            $table->string('barang', 100)->nullable();
            $table->string('jenis_barang', 100)->nullable();
            $table->string('jumlah', 100)->nullable();
            $table->string('keterangan_2', 1000)->nullable();
            $table->date('berlaku_sampai_tanggal')->nullable();
            $table->string('nama_penginput', 100)->nullable();
            $table->string('nik_penginput', 100)->nullable();

           
        });

        Schema::create('bast_pengajuan_barang', function (Blueprint $table) {
            $table->string('nomor',100)->nullable();
            $table->string('hari_tanggal',100)->nullable();
            $table->string('pihak_pertama', 100)->nullable();
            $table->string('jabatan_pihak_pertama',100)->nullable();
            $table->string('pihak_kedua',100)->nullable();
            $table->string('jabatan_pihak_kedua',100)->nullable();
            $table->string('faximile_bulog', 100)->nullable();
            $table->date('tanggal_faximile_bulog')->nullable();
            $table->string('perihal', 100)->nullable();
            $table->string('keterangan_1', 1000)->nullable();
            $table->string('jenis_barang', 100)->nullable();
            $table->string('jumlah_kuantum', 100)->nullable();
            $table->date('tanggal_penyerahan')->nullable();
            $table->string('alat_angkut', 100)->nullable();
            $table->string('keterangan_2', 100)->nullable();
            $table->string('nama_wakil', 100)->nullable();
            $table->string('nama_penginput', 100)->nullable();
            $table->string('nik_penginput', 100)->nullable();
            
           
        });

/*##############################################################################################################*/














/*############################################### SISTEM PENGIRIMAN BARANG ########################################*/

Schema::create('users_pengiriman_barang', function (Blueprint $table) {
    $table->increments('id');
    $table->string('nama', 100);
    $table->string('nik',100);
    $table->string('email', 100)->unique();
    $table->string('no_hp',100)->nullable();
    $table->string('bagian',100)->nullable();
    $table->string('jabatan',100)->nullable();
    $table->string('password', 500);
    $table->string('img_url', 100)->default('users.png');
    $table->integer('jumlah_surat_perintah_yang_terkirim')->default(0);
    $table->integer('jumlah_printlog_yang_terkirim')->default(0);
    $table->integer('jumlah_bast_yang_terkirim')->default(0);
    
    
});
    
/*#####################################################################################################################*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users_pengajuan_barang');
        Schema::drop('surat_perintah_pengajuan_barang');
        Schema::drop('printlog_pengajuan_barang');
        Schema::drop('bast_pengajuan_barang');
        //
    }
}
