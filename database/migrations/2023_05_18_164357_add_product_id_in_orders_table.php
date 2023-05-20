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
        Schema::table('orders', function (Blueprint $table) {
        
            $table->foreignId('products_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('suplliers_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            //dodati da se dropuju spoljni kljucevi da bi se ispostovalo za migratcije rollback incase samo fresh i tjt
            
        });
    }
};
