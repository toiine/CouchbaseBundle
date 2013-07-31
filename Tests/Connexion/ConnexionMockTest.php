<?php

namespace Toiine\Bundle\CouchbaseBundle\Tests\Connexion;

class ConnexionMockTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructorWitoutArguments()
    {
        $conn = new ConnexionMock();

        $this->assertEquals(array(), $conn->getDocuments());
    }

    public function testConstructorWitoutDocuments()
    {
        $documents = array(
            'key1' => array('value1'),
            'key2' => array('value2')
        );

        $conn = new ConnexionMock($documents);
        $this->assertEquals($documents, $conn->getDocuments());
    }

    public function testSetDocuments()
    {
        $documents = array(
            'key1' => array('value1'),
            'key2' => array('value2')
        );

        $conn = new ConnexionMock();
        $conn->setDocuments($documents);
        $this->assertEquals($documents, $conn->getDocuments());
    }

    public function testSet()
    {
        $documents = array(
            'key3' => array('value1'),
        );

        $conn = new ConnexionMock();
        $conn->set('key3', array('value1'));
        $this->assertEquals($documents, $conn->getDocuments());
    }

    public function testGet()
    {
        $documents = array(
            'key3' => array('value1'),
        );

        $conn = new ConnexionMock($documents);
        $this->assertEquals(array('value1'), $conn->get('key3'));
    }
}
