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
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id()->comment('Chave única do fornecedor');
            $table->string('nm_fornecedor')->comment('Nome do fornecedor');
            $table->string('email')->nullable()->comment('Email do fornecedor');
            $table->string('telefone',10)->nullable()->comment('Contato(telefone) do fornecedor');
            $table->string('celular',12)->nullable()->comment('Contato(celular) do fornecedor');
            $table->string('whatsapp',12)->nullable()->comment('WhatsApp do fornecedor');
            $table->string('cep',9)->nullable()->comment('Cep do fornecedor');
            $table->string('logradouro')->nullable()->comment('Logradouro do fornecedor');
            $table->string('numero')->nullable()->comment('Numero(logradouro) do fornecedor');
            $table->string('bairro')->nullable()->comment('Bairro do fornecedor');
            $table->string('cidade')->nullable()->comment('Cidade do fornecedor');
            $table->char('uf',2)->nullable()->comment('Uf do fornecedor');
            $table->string('nr_cpf',11)->nullable()->comment('Cpf do fornecedor');
            $table->string('nr_cnpj',14)->nullable()->comment('Cnpj do fornecedor');
            $table->string('ins_estadual')->nullable()->comment('Inscrição estadual do fornecedor');
            $table->string('ins_municipal')->nullable()->comment('Inscrição municipal do fornecedor');
            $table->text('observacao')->nullable()->comment('Observação sobre o fornecedor');
            $table->timestamps();
            $table->softDeletes()->comment('Momento em que o fornecedor foi excluído');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fornecedores');
    }
};
