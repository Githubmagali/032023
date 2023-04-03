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
        Schema::table('productos', function (Blueprint $table) {
            $table->string('codigo', 20)->unique()->change();
            $table->text('descripcion')->nullable()->change();

            $table->after('existencia', function($table){
                $table->foreignId('categoria_id')
->constrained('categorias')
->onUpdate('cascade')
->onDelete('cascade');
            });

            //$table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('productos', function (Blueprint $table) {
            $table->dropForeign('productos_categoria_id_foreign');
            $table->dropColumn('categoria_id');
            $table->dropUnique('productos_codigo_unique');
        });
    }
};
