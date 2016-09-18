<?php
class TimeDropdownFieldTest extends SapphireTest
{
    public function testShowDropdown()
    {
        $field = new TimeDropdownField('Time', 'Time');
        $field->setConfig('showdropdown', true);
        $html = $field->Field();
        $parser = new CSSContentParser($html);
        $this->assertNotNull($parser->getBySelector('select'));
        $options = $parser->getBySelector('option');
        $this->assertEquals(24, count($options));
        $this->assertEquals('00:00:00', (string)$options[0]['value'], 'Correct data value');
        $this->assertEquals('13:00:00', (string)$options[13]['value'], 'Correct data value');
        $this->assertEquals('00:00:00', (string)$options[0], 'Correct view value');
        $this->assertEquals('13:00:00', (string)$options[13], 'Correct view value');
    }

    public function testShowDropdownCustomTimeFormat()
    {
        $field = new TimeDropdownField('Time', 'Time');
        $field->setConfig('showdropdown', true);
        $field->setConfig('timeformat', 'hh:mm a');
        $html = $field->Field();
        $parser = new CSSContentParser($html);
        $this->assertNotNull($parser->getBySelector('select'));
        $options = $parser->getBySelector('option');
        $this->assertEquals('00:00:00', (string)$options[0]['value'], 'Correct data value');
        $this->assertEquals('13:00:00', (string)$options[13]['value'], 'Correct data value');
        $this->assertEquals('12:00 AM', (string)$options[0], 'Correct view value');
        $this->assertEquals('01:00 PM', (string)$options[13], 'Correct view value');
    }
}
