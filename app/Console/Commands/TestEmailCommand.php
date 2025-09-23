<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class TestEmailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test email sending functionality';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Sending a test email to ' . env('MAIL_OWNER', 'info@tecclubx.com'));

        try {
            $testData = [
                'name' => 'Test User',
                'email' => 'test@example.com',
                'phone' => '123-456-7890',
                'company' => 'Test Company',
                'website' => 'https://example.com',
                'message' => 'This is a test message to verify email functionality.',
                'service' => 'Testing',
            ];
            
            Mail::to(env('MAIL_OWNER', 'info@tecclubx.com'))->send(new ContactFormMail($testData));
            $this->info('Test email sent successfully!');
            
        } catch (\Exception $e) {
            $this->error('Failed to send test email: ' . $e->getMessage());
            $this->line('Current mail configuration:');
            $this->line('MAIL_MAILER: ' . config('mail.default'));
            $this->line('MAIL_HOST: ' . config('mail.mailers.smtp.host'));
            $this->line('MAIL_PORT: ' . config('mail.mailers.smtp.port'));
            $this->line('MAIL_ENCRYPTION: ' . config('mail.mailers.smtp.encryption'));
            $this->line('MAIL_FROM_ADDRESS: ' . config('mail.from.address'));
        }
    }
}