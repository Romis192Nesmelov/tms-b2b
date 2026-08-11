<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;

class SendMessage implements ShouldQueue
{
    use Queueable;

    private string $template;
    private array $fields;
    /**
     * Create a new job instance.
     */
    public function __construct(string $template, array $fields)
    {
        $this->template = $template;
        $this->fields = $fields;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::send('emails.'.$this->template, $this->fields, function($message) {
            $message->subject(__('Message from the site').' '.env('APP_NAME'));
//            $message->from(env('MAIL_FROM_ADDRESS'));
            $message->to(env('MAIL_TO'));
        });
    }
}
