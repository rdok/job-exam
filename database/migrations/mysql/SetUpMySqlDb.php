<?php

/**
 * @author  Rizart Dokollari <r.dokollari@gmail.com>
 * @since   16/12/2015
 */

namespace Database\migrations\mysql;

/**
 * Class SetUpMySqlDb
 * @package Database\migrations\mysql
 */
class SetUpMySqlDb
{
	/**
	 * @var CreateVesselsTable
	 */
	private $createShipsTable;
	/**
	 * @var CreateTypesTable
	 */
	private $createTypesTable;
	/**
	 * @var CreateCompaniesTable
	 */
	private $createCompaniesTable;
	/**
	 * @var CreateUsersTable
	 */
	private $createUsersTable;
	/**
	 * @var AddTypeToVesselTable
	 */
	private $addTypeToVesselTable;

	/**
	 *
	 */
	public function __construct()
	{
		$this->createShipsTable = new CreateVesselsTable();
		$this->createTypesTable = new CreateTypesTable();
		$this->createCompaniesTable = new CreateCompaniesTable();
		$this->createUsersTable = new CreateUsersTable();
		$this->addTypeToVesselTable = new AddTypeToVesselTable();
	}

	/**
	 * Run the migrations
	 */
	public function up()
	{
		$this->createShipsTable->up();
		$this->createTypesTable->up();
		$this->createCompaniesTable->up();
		$this->createUsersTable->up();
		$this->addTypeToVesselTable->up();

		echo "Migration process completed.\n";
	}

	/**
	 * Reverse the migrations
	 */
	public function down()
	{
		$this->createShipsTable->down();
		$this->createShipsTable->down();
		$this->createTypesTable->down();
		$this->createCompaniesTable->down();
		$this->createUsersTable->down();

		echo "Database tables destroyed.\n";
	}
}