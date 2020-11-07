<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors_info', function (Blueprint $table) {
            $table->foreignId('author_id')->constrained();

            $table->string('education', 50)->nullable();
            $table->text('awards')->nullable();
            $table->smallInteger('books_written')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors_info');
    }
}
