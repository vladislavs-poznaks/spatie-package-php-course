<?php

namespace NothingWorks\WeightConversions;

class Weight
{
    public function kilograms(float $kilograms): self
    {
        $this->kilograms = $kilograms;

        return $this;
    }

    public function toPounds(): float
    {
        return round($this->kilograms * 2.20462, 2);
    }
}
