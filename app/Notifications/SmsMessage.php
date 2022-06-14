<?php


namespace App\Notifications;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Twilio\Rest\Client;

class SmsMessage
{


    protected string $account_sid;
    protected string  $auth_token;
    protected string  $twilio_from;
    protected string  $twilio_service_id;
    protected string $to;
    protected string $from;
    protected string $lines;


    /**
     * SmsMessage constructor.
     * @param array $lines
     */
    public function __construct($lines = "")
    {
        $this->lines = $lines;

        // Pull in config from the config/services.php file.
         $this->account_sid = getenv("TWILIO_ACCOUNT_SID");
         $this->auth_token = getenv("TWILIO_AUTH_TOKEN");
         $this->twilio_from = getenv("TWILIO_FROM");
         $this->twilio_service_id = getenv("TWILIO_SMS_SERVICE_SID");

    }

    public function line($line = ''): self
    {
        $this->lines = $line;

        return $this;
    }

    public function to($to): self
    {
        $this->to = $to;

        return $this;
    }

    public function from($from =""): self
    {

        $this->from = (isset($from)) ? $from : $this->twilio_from; ;

        return $this;
    }

    public function send(): void
    {
        if ( !$this->to) {
            throw new \Exception('SMS not correct.');
        }
        $twilio = new Client($this->account_sid, $this->auth_token);

        $message = $twilio->messages
                          ->create($this->to, // to
                                   array(
                                       "messagingServiceSid" => $this->twilio_service_id,
                                       "body" => $this->lines,
                                   )
                          );

    }




}

