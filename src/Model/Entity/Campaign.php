<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Campaign Entity
 *
 * @property int $id
 * @property string $name
 * @property int|null $counter
 * @property \Cake\I18n\FrozenTime|null $createad_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 */
class Campaign extends Entity
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
        'name' => true,
        'counter' => true,
        'createad_at' => true,
        'updated_at' => true,
    ];
}
