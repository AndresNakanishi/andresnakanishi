<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CampaignTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CampaignTable Test Case
 */
class CampaignTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CampaignTable
     */
    public $Campaign;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Campaign',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Campaign') ? [] : ['className' => CampaignTable::class];
        $this->Campaign = TableRegistry::getTableLocator()->get('Campaign', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Campaign);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
