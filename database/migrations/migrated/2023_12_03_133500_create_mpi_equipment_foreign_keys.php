<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMpiEquipmentForeignKeys extends Migration {
	public function up()
	{
		Schema::table('mpi_equipment', function(Blueprint $table) {
			$table->foreign('report_id')->references('id')->on(',pi')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		// Schema::table('mpi_equipment', function(Blueprint $table) {
		// 	$table->foreign('report_id')->references('id')->on('mpi')
		// 				->onDelete('cascade')
		// 				->onUpdate('cascade');
		// });
	}

	public function down()
	{
		Schema::table('mpi_equipment', function(Blueprint $table) {
			$table->dropForeign('mpi_foreign');
		// });
		// Schema::table('mpi_equipment', function(Blueprint $table) {
		// 	$table->dropForeign('mpi_equipment_report_id_foreign');
		});
	}
}