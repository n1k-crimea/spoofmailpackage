<?php

namespace Nik\SpoofMailPackage\Console;

use Illuminate\Console\Command;

class InstallSpoofMailPackage extends Command
{
    protected $signature = 'spoofmailpackage:install';
    protected $description = 'Publishing a SpoofMailPackage configuration';

    public function handle()
    {
        $this->info('Publishing a SpoofMailPackage configuration...');

        $this->call('vendor:publish', [
            '--provider' => "Nik\SpoofMailPackage\SpoofMailServiceProvider",
            '--tag' => "config"
        ]);

        $this->info('Publication finished');
    }
}