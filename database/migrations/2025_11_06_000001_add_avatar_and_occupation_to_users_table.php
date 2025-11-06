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
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar')->nullable()->after('email');
            $table->string('occupation')->nullable()->after('avatar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Periksa kolom terlebih dahulu agar down() tidak error jika kolom tidak ada
        if (Schema::hasColumn('users', 'avatar') || Schema::hasColumn('users', 'occupation')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn(['avatar', 'occupation']);
            });
        }
    }
};
