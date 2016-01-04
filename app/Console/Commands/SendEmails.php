<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\DripEmailer;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'emails:send {user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send drip e-mails to user';

    protected $drip

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(DripEmailer $drip)
    {
        parent::__construct();
        $this->drip = $drip;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->drip->send(User::find($this->argument('user')));
    }
}
