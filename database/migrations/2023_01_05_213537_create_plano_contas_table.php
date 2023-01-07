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
        Schema::create('plano_contas', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->comment('Nome da conta ou grupo.');
            $table->char('modalidade',1)->comment('Informa se a conta ou grupo é do tipo despesa ou receita')->default('D');
            $table->unsignedBigInteger('owner_id')->nullable()->comment('Grupo a qual a conta pertence');

            $table->foreign('owner_id')->references('id')->on('plano_contas')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plano_contas');
    }
};
