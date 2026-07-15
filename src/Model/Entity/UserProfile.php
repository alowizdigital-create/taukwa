<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserProfile Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $name
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $company_name
 * @property string|null $avatar
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 * @property string $uuid
 *
 * @property \App\Model\Entity\User $user
 */
class UserProfile extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'user_id' => true,
        'name' => true,
        'phone' => true,
        'email' => true,
        'company_name' => true,
        'avatar' => true,
        'created' => true,
        'modified' => true,
        'uuid' => true,
        'user' => true,
    ];
}
