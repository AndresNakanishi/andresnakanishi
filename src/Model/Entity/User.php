<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property int $profile_id
 * @property string $username
 * @property string $email
 * @property string $name
 * @property string $surname
 * @property string|null $cellphone
 * @property string $password
 * @property string|null $avatar
 * @property bool $active
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 *
 * @property \App\Model\Entity\Profile $profile
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'profile_id' => true,
        'username' => true,
        'email' => true,
        'name' => true,
        'surname' => true,
        'cellphone' => true,
        'password' => true,
        'avatar' => true,
        'active' => true,
        'created_at' => true,
        'updated_at' => true,
        'profile' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
