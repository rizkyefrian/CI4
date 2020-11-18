<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Riwayat extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
					'type'           => 'INT',
					'constraint'     => 11,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'id_biodata'       => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
				'null'           => true,
			],
			'sertifikat'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '5',
				'null'           => true,
			],
			'tahun'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '4',
				'null'           => true,
			],
			'created_at'       => [
				'type'           => 'DATETIME',
				'null'     => TRUE,
			],
			'updated_at'       => [
				'type'           => 'DATETIME',
				'null'     => TRUE,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('riw_pelatihan');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('riw_pelatihan');
	}
}
