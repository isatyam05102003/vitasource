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
    Schema::create('medicines', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('category')->nullable();
        $table->text('description')->nullable();
        $table->integer('quantity');
        $table->decimal('price', 20, 2);
        $table->date('expiry_date');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};
