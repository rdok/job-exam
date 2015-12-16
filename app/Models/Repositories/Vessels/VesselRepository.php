<?php

/**
 * @author  Rizart Dokollari <r.dokollari@gmail.com>
 * @since   16/12/2015
 */

namespace App\Models\Repositories\Vessels;

/**
 * Interface ShipRepository
 * @package app\Models\Repositories
 */
interface VesselRepository
{

	/**
	 * @param array $fields
	 * @return mixed
	 */
	public function getAll(array $fields = null);

	/**
	 * @return mixed
	 */
	public function getWithRelations();
}