<?php

namespace Model\Material;

class Material
{
    public string $code;
    public string $name;
    private MeasureUnit $measureUnit;
    private MaterialGroup $group;

    public function __construct(string $name, string $code, MeasureUnit $measureUnit, MaterialGroup $group)
    {
        $this->code = $code;
        $this->name = $name;
        $this->measureUnit = $measureUnit;
        $this->group = $group;
        $this->blockGroup();
    }

    public function changeName(string $name)
    {
        $this->name = $name;
    }

    public function changeCode(string $code)
    {
        $this->code = $code;
    }

    public function changeGroup(MaterialGroup $group)
    {
        $this->group = $group;
    }

    public function changeMeasureUnit(MeasureUnit $unit)
    {
        $this->measureUnit = $unit;
    }

    public function blockGroup()
    {
        $this->group->blockGroup();
    }
}
