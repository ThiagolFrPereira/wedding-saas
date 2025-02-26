<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Stancl\Tenancy\Database\Models\Tenant;

class CreateWeddingTenant extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'wedding:create {slug}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cria um novo casal com um esquema separado no banco de dados';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $slug = $this->argument('slug');

        $tenant = Tenant::create([
            'id' => $slug,
            'domain' => "$slug.meucasamento.com",
        ]);

        // Criar esquema no PostgreSQL
        DB::statement("CREATE SCHEMA IF NOT EXISTS $slug");

        $this->info("Casal '$slug' criado com sucesso!");
    }
}
