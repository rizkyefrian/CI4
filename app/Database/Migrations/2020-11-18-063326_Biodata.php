<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Biodata extends Migration
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
			'id_user'          => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'posisi'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'no_ktp'       => [
				'type'           => 'INT',
				'constraint'     => '20',
			],
			'tempat_lahir'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
			],
			'tanggal_lahir'       => [
				'type'           => 'DATE',
			],
			'jk'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '12',
			],
			'agama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '12',
			],
			'gol_darah'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '3',
			],
			'status'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '25',
			],
			'alamat_ktp'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'alamat_tinggal'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'email'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'no_telp'       => [
				'type'           => 'INT',
				'constraint'     => '15',
			],
			'no_lain'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '15',
				'null'     => TRUE,
			],
			'skill'       => [
				'type'           => 'TEXT',
				'null'     => TRUE,
			],
			'penempatan'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '5',
			],
			'gaji'       => [
				'type'           => 'INT',
				'constraint'     => '20',
			],
			'tempat'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
				'null'     => TRUE,
			],
			'tanggal'       => [
				'type'           => 'DATE',
				'null'     => TRUE,
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
		$this->forge->createTable('biodatas');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('biodatas');
	}
}
