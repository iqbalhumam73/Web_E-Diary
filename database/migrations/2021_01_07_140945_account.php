<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Account extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('account', function (Blueprint $table) {
                $table->increments('account_id');
                $table->char('account_username', 40)->unique();;
                $table->char('account_name', 40);
                $table->char('account_email', 40)->unique();
                $table->char('account_phone', 14)->nullable();
                $table->string('account_photo', 40)->nullable();
                $table->text('account_bio')->nullable();
                $table->timestamps();

            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
