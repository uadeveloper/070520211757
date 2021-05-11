<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string("name")->index("name_index");
            $table->string("city");
            $table->string("area");
            $table->text("street");
            $table->text("house")->nullable(true);
            $table->text("additional_information")->nullable(true);
            $table->timestamp("created_at")->useCurrent();
            $table->timestamp("updated_at")->nullable(true);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
