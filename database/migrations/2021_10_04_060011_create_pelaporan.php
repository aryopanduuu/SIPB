<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelaporan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelaporan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('FK_Id_user')->constrained('users');
            $table->foreignId('FK_Id_bencana')->constrained('bencana','id');
            $table->foreignId('FK_Id_kecamatan')->constrained('kecamatan');
            $table->string('judul_laporan');
            $table->text('isi_laporan');
            $table->date('tgl_bencana');
            $table->time('waktu_bencana');
            $table->string('status');
            $table->timestamps();
            $table->string('image')->nullable();
        });
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelaporan');
    }
}
