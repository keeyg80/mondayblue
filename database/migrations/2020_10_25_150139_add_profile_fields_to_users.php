<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfileFieldsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->string('role');
            $table->string('contactno');
            $table->string('address1');
            $table->string('address2');
            $table->string('postcode');
            $table->string('city');
            $table->string('country');
            $table->string('bankname');
            $table->string('bankaccount');
            $table->string('bankswiftcode');
            $table->string('bankaddress');
            $table->string('activestatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('role');
            $table->dropColumn('contactno');
            $table->dropColumn('address1');
            $table->dropColumn('address2');
            $table->dropColumn('postcode');
            $table->dropColumn('city');
            $table->dropColumn('country');
            $table->dropColumn('bankname');
            $table->dropColumn('bankaccount');
            $table->dropColumn('bankswiftcode');
            $table->dropColumn('bankaddress');
            $table->dropColumn('activestatus');
        });
    }
}
