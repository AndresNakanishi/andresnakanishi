<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BusinessTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BusinessTable Test Case
 */
class BusinessTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BusinessTable
     */
    public $Business;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Business',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Business') ? [] : ['className' => BusinessTable::class];
        $this->Business = TableRegistry::getTableLocator()->get('Business', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Business);

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
