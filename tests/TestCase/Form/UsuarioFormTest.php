<?php
namespace App\Test\TestCase\Form;

use App\Form\UsuarioForm;
use Cake\TestSuite\TestCase;

/**
 * App\Form\UsuarioForm Test Case
 */
class UsuarioFormTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Form\UsuarioForm
     */
    public $Usuario;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Usuario = new UsuarioForm();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Usuario);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
