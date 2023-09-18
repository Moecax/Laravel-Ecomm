<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //use HasFactory;
    /**
* PRODUCT ATTRIBUTES
* $this->attributes['id'] - int - contains the product primary key (id)
* $this->attributes['name'] - string - contains the product name
* $this->attributes['description'] - string - contains the product description
* $this->attributes['image'] - string - contains the product image
* $this->attributes['price'] - int - contains the product price
* $this->attributes['created_at'] - timestamp - contains the product creation date
*$this->attributes['updated_at'] - timestamp - contains the product update time
*/
//ID
    public function getId()
    {
        return $this->attributes['id'];
    }
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

//Name
    public function getName()
    {
        return $this->attributes['name'];
    }
    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }

//Description
    public function getDescription()
    {
        return $this->attributes['description'];
    }
    public function setDescription($description)
    {
        $this->attributes['description'] = $description;
    }

//Image
    public function getImage()
    {
        return $this->attributes['image'];
    }
    public function setImage($image)
    {
        $this->attributes['image'] = $image;
    }

//Price
    public function getPrice()
    {
        return $this->attributes['price'];
    }
    public function setPrice($price)
    {
        $this->attributes['price'] = $price;
    }

//Created At
    // public function getCreatedAt()
    // {
    //     return $this->attributes['createdAt'];
    // }
    // public function setCreatedAt($createdAt)
    // {
    //     $this->attributes['createdAt'] = $createdAt;
    // }

//Updated At
    // public function getUpdatedAt()
    // {
    //     return $this->attributes['updatedAt'];
    // }
    // public function setUpdatedAt($updatedAt)
    // {
    //     $this->attributes['updatedAt'] = $updatedAt;
    // }
}
