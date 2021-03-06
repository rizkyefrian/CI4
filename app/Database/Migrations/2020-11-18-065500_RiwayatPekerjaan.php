<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RiwayatPekerjaan extends Migration
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
			'posisi'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
				'null'           => true,
			],
			'salary'       => [
				'type'           => 'INT',
				'constraint'     => '20',
				'null'           => true,
			],
			'tahun'       => [
				'type'           => 'INT',
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
		$this->forge->createTable('riw_pekerjaan');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('riw_pekerjaan');
	}
}
