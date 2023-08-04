<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('paniers', function (Blueprint $table) {
            $table->string('LieuLivraison')->nullable();
            $table->boolean('Statut')->default('0');
            $table->string('MoyenPaiement')->nullable();
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('paniers', function (Blueprint $table) {
            //
            $table->dropColumn('LieuLivraison');
            $table->dropColumn('Statut');
            $table->dropColumn('MoyenPaiement');

        });
    }
};
