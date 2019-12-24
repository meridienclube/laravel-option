<?php

use App\OptionGroup;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        $this->truncateOptionsTables();
        $optionsGroups = include('database/seeds/data/options.php');
        foreach ($optionsGroups as $optionGroupKey => $optionGroup) {
            $group = OptionGroup::create(['name' => $optionGroupKey]);
            $this->command->info('Grupo de opção ' . $optionGroupKey . ' criada.');
            foreach ($optionGroup as $option) {
                $group->options()->create($option);
                $this->command->info('Opção ' . $option['name'] . ' criada.');
            }
        }
        Schema::enableForeignKeyConstraints();
    }

    private function truncateOptionsTables()
    {
        $this->command->info('Fazendo um truncate nas tabelas de options, sai da frente... ;/');
        DB::table('options')->truncate();
        DB::table('option_groups')->truncate();
        DB::table('option_role')->truncate();
        $this->command->info('Pronto, truncates de options feitos, acho que com sucesso :D');
    }
}
