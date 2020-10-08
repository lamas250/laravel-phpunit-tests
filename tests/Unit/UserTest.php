<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\User;

class UserTest extends TestCase
{
    /**
     * @test
     * how named the method
     * actionVerb_WhoOrWhatToDo_ExpectedBehavior
     */
    public function check_if_user_coluns_is_correct()
    {
        $user = new User;

        $expected = [
            'name',
            'email',
            'password',
            // 'passwords'
        ];

        $arrayCompared = array_diff($expected, $user->getFillable());
        // dd($arrayCompared);
        $this->assertEquals(0, count($arrayCompared));
    }
}
