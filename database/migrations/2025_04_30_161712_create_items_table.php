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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')
                ->nullable()                 // позволяет NULL
                ->constrained('categories') // внешний ключ
                ->nullOnDelete();
            $table->foreignId('color_id')
                ->nullable()
                ->constrained('colors')
                ->nullOnDelete();
            $table->foreignId('size_id')
                ->nullable()
                ->constrained('sizes')
                ->nullOnDelete();
            $table->string('name', 100);
            $table->tinyInteger('type');
            $table->decimal('old_price', 7, 2);
            $table->decimal('new_price', 7, 2)->nullable();
            $table->string('image')->nullable();
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
