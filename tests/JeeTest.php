<?php

use PHPUnit\Framework\TestCase;
use Blaah\Jee;

class JeeTest extends TestCase
{
    public function testArrrrgh()
    {
        $xml = <<< XML
<?xml version="1.0" encoding="UTF-8"?>
<Banana apikey="foobar">
  <foo>jee</foo>
  <bar>666</bar>
</Banana>
XML;

        $serializer = \JMS\Serializer\SerializerBuilder::create()
            ->addMetadataDir(__DIR__ . '/../config/')
            ->build();

        $vaa = $serializer->serialize(new Jee('jee', 666), 'xml');

        $this->assertXmlStringEqualsXmlString($xml, $vaa);
    }
}
