<?php

namespace Model\MaterialGroup;

class MaterialGroup
{
    public MaterialGroup $parent;
    public array $children;
    public string $name;
    private boolean $hasMaterials;

    public function __construct(string $name, ?MaterialGroup $parent = null)
    {
        $this->name = $name;
        $this->children = [];
        $this->parent = $parent;
        if ($parent) {
            $parent->addChild($this);
        }
    }

    public function addChild(MaterialGroup $child): ?MaterialGroup
    {
        if ($this->hasMaterials) {
            return null;
        }

        $this->children[] = $child;

        return $self;
    }

    public function getChildren(MaterialGroup $group): array
    {
        return $this->children;
    }

    public function getAllLeaves(MaterialGroup $group): ?array
    {
        // code...
        $groups = [];
        $leaves = [];
        $children = getGroupedChildren($group);
        $groups = $children[0];
        $leaves = array_merge($leaves, $children[1]);
        foreach ($groups as $group) {
            getGroupedChildren($group);
        }
    }

    private function getGroupedChildren(MaterialGroup $group): array
    {
        // code...
        return [$parents, $leaves];
    }

    public function getParent()
    {
        return $this->parent;
    }

    public function blockGroup()
    {
        $this->hasMaterials = true;
    }

    // public function hasChildren(): boolean
    // {
    //     return $this->isParent;
    // }
}
