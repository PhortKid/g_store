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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Jina la bidhaa
            $table->foreignId('product_type_id')->constrained()->onDelete('cascade'); // Aina ya bidhaa
            $table->integer('quantity'); // Idadi ya bidhaa iliyopo
            $table->decimal('purchase_price', 10, 2); // Bei ya ununuzi
            $table->decimal('sale_price', 10, 2); // Bei ya uuzaji
            $table->text('description'); 
            $table->enum('is_approved',['0','1']); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
