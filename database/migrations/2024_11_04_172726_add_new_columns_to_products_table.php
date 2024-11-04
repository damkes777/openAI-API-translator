<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('brand')
                  ->after('name');
            $table->string('category')
                  ->after('quantity')
                  ->nullable();
            $table->string('state')
                  ->after('category')
                  ->nullable();
            $table->integer('return_politycy')
                  ->nullable()
                  ->after('state');
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['brand', 'category', 'return_politycy', 'state']);
        });
    }
};
