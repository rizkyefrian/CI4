<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pendidika extends Migration
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
			'status'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '30',
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '30',
			],
			'jurusan'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
				'null'           => true,
			],
			'lulus'       => [
				'type'           => 'INT',
				'constraint'     => '4',
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
		$this->forge->createTable('pend_terakhir');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('pend_terakhir');
	}
}
