<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Init extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('Webhooks', function($table)
        {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->bigInteger('panel_id');
            $table->string('token', 100);
            $table->string('url', 100);
            $table->tinyInteger('status')->default(0)->unsigned();
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('Webhooks_smses', function($table)
        {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->bigInteger('Webhook_id');
            $table->mediumText('data');
            $table->tinyInteger('status')->default(0)->unsigned();
            $table->timestamp('created_at');

        });
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
