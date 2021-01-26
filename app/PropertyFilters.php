<?php


namespace App;


class PropertyFilters extends QueryFilter
{

    public function city($city){
        return $this->builder->where('location_id', $city);
    }

    public function type($type){
        return $this->builder->where('property_type_id', $type);
    }

    public function priceFrom($price){
        return $this->builder->where('price', ">=" , $price);
    }

    public function priceTo($price){
        return $this->builder->where('price', "<" , $price);
    }

    public function persons($persons){
        return $this->builder->where('persons', $persons);
    }



}
