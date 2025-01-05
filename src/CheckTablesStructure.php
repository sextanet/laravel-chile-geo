<?php

namespace SextaNet\LaravelChileGeo;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use SextaNet\LaravelChileGeo\Exceptions\MissingColumn;
use SextaNet\LaravelChileGeo\Exceptions\MissingTable;

class CheckTablesStructure
{
    public function perform()
    {
        $this->checkTable(config('chile-geo.table_countries'), [
            'id', 'name',
        ]);

        $this->checkTable(config('chile-geo.table_regions'), [
            'name', 'country_id',
        ]);

        $this->checkTable(config('chile-geo.table_communes'), [
            'name', 'region_id',
        ]);

        $country_id = $this->checkCountry(config('chile-geo.table_countries'));

        return $country_id;
    }

    public function checkTable($table_name, $columns_names)
    {
        $table = Schema::hasTable($table_name);

        if (! $table) {
            throw new MissingTable($table_name);
        }

        $columns = Schema::getColumnListing($table_name);

        foreach ($columns_names as $column_name) {
            if (! in_array($column_name, $columns)) {
                throw new MissingColumn($column_name, $table_name);
            }
        }
    }

    public function checkCountry($table_name)
    {
        $country = DB::table($table_name)->where('name', 'Chile');

        if (! $country->exists()) {
            DB::table($table_name)->insert([
                'name' => 'Chile',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
