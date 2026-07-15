<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserProfilesFixture
 */
class UserProfilesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum dolor ',
                'email' => 'Lorem ipsum dolor sit amet',
                'company_name' => 'Lorem ipsum dolor sit amet',
                'avatar' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-10-29 22:54:36',
                'modified' => '2025-10-29 22:54:36',
                'uuid' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
