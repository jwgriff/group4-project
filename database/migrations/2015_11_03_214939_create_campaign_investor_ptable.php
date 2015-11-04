<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignInvestorPtable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign_investor', function (Blueprint $table) {
            //IDE Generated
            $table->increments('id');
            $table->timestamps();

            //Developer Generated
            $table->integer('campaign_id')->unsigned()->index();
            $table->foreign('campaign_id')
                ->references('id')
                ->on('campaigns');

            $table->integer('investor_id')->unsigned()->index();
            $table->foreign('investor_id')
                ->references('id')
                ->on('investors');

            $table->string('invst_label');
            $table->float('invst_amount', 8, 2);
            //$table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('campaign_investor');
    }
}
