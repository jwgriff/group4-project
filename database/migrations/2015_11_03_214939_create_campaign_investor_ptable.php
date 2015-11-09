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
            $table->string('invst_label');
            $table->float('invst_amount', 8, 2);

            //Developer Generated
            $table->unsignedInteger('investor_id')->nullable();
            $table->foreign('investor_id')
                ->references('id')
                ->on('investors')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            //Developer Generated
            $table->unsignedInteger('campaign_id')->nullable();
            $table->foreign('campaign_id')
                ->references('id')
                ->on('campaigns')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            //IDE Generated
            $table->timestamps();

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
