<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePhonebooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phonebooks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        
        Schema::table('contactos', function (Blueprint $table) {
            $table->unsignedBigInteger('phonebook_id')->nullable()->after('id');

            $table->foreign('phonebook_id')->references('id')->on('phonebooks')
                ->onDelete('cascade')
                ->onUpdate('set null');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contactos', function (Blueprint $table) {
            $table->dropForeign('phonebook_category_id_foreign');
           $table->dropColumn('phonebook_id');
        });


        Schema::dropIfExists('phonebooks');
    }
}
