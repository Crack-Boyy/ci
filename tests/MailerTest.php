<?php 
namespace App\Tests;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Mime\Email;

class MailerTest extends WebTestCase
{

    public function TestMailSend () :void
    {
    $client = static ::createClient();
    $client -> request('Get', '/send-mail');

    $this->assertResponseIsSuccessfull();
  //  $this->
}
}