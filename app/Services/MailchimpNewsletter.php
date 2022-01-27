<?php


namespace App\Services;
use MailchimpMarketing\ApiClient;


class MailchimpNewsletter implements Newsletter
{



    protected $client;

    public function __construct(  ApiClient $client){
        $this->client = $client;
    }


    public function subscribe(string  $email, $list = null)
    {
        $list ??= config('services.mailchimp.lists.subscribers');
        return    $this->client->lists->addListMember( $list,  [
                "email_address" => $email,
                "status"        => "subscribed" ] );
    }

}
