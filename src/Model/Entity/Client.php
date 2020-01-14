<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity
 *
 * @property int $id
 * @property int|null $city_id
 * @property int|null $business_id
 * @property int|null $campaign_id
 * @property string|null $name
 * @property string $email
 * @property string|null $cellphone
 * @property bool|null $client
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 *
 * @property \App\Model\Entity\City $city
 * @property \App\Model\Entity\Business $business
 * @property \App\Model\Entity\Campaign $campaign
 * @property \App\Model\Entity\Message[] $messages
 */
class Client extends Entity
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
        'city_id' => true,
        'business_id' => true,
        'campaign_id' => true,
        'name' => true,
        'email' => true,
        'cellphone' => true,
        'client' => true,
        'created_at' => true,
        'updated_at' => true,
        'city' => true,
        'business' => true,
        'campaign' => true,
        'messages' => true,
    ];

    protected function _getisClient()
    {
        switch ($this->_properties['client']) {
            case 0:
                return 'Prospecto';
                break;
            case 1:
                return 'Cliente';
                break;
        }
    }
}
