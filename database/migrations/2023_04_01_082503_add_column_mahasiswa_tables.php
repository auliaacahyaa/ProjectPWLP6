<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->string('Email',50)->after('No_Handphone')->nullable();
            $table->date('Tanggal_Lahir')->after('Nama')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::column('mahasiswa', function (Blueprint $table) {
            $table->dropColumn('Email',50)->after('No_Handphone')->nullable();
            $table->dropColumn('Tanggal_Lahir')->after('Nama')->nullable();
        });
    }
};
