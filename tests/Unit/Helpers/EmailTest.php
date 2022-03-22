<?php

namespace Tests\Unit\Helpers;

use PHPUnit\Framework\TestCase;
use App\Helper\Email;

class EmailTest extends TestCase
{

    public function testEmail()
    {
        $email = "jbousing@gmail.com";
        $result = Email::validate($email);
        $this->assertTrue($result);

    }
}
