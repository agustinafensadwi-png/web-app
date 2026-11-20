<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('employes', function (Blueprint $table) {
            $table->string('nama', 100)->after('id');
            $table->text('alamat')->nullable()->after('nama');
            $table->string('gender', 20)->nullable()->after('alamat');
            $table->integer('gaji')->default(0)->after('gender');
        });
    }

    public function down(): void
    {
        Schema::table('employes', function (Blueprint $table) {
            $table->dropColumn(['nama', 'alamat', 'gender', 'gaji']);
        });
    }
};