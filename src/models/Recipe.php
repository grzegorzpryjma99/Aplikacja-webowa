<?php


class Recipe
{
    private $title;
    private $description;
    private $image;
    private $protein;
    private $fat;


    public function getTitle(): string
    {
        return $this->title;
    }


    public function setTitle(string $title)
    {
        $this->title = $title;
    }


    public function getDescription(): string
    {
        return $this->description;
    }


    public function setDescription(string $description)
    {
        $this->description = $description;
    }


    public function getImage():string
    {
        return $this->image;
    }


    public function setImage(string $image)
    {
        $this->image = $image;
    }


    public function getProtein(): string
    {
        return $this->protein;
    }


    public function setProtein(string $protein)
    {
        $this->protein = $protein;
    }


    public function getFat(): string
    {
        return $this->fat;
    }


    public function setFat(string $fat)
    {
        $this->fat = $fat;
    }


    public function getCarbs(): string
    {
        return $this->carbs;
    }


    public function setCarbs(string $carbs)
    {
        $this->carbs = $carbs;
    }


    public function getProducts():string
    {
        return $this->products;
    }

    public function setProducts(string $products)
    {
        $this->products = $products;
    }

    public function getSteps(): string
    {
        return $this->steps;
    }

    public function setSteps(string $steps)
    {
        $this->steps = $steps;
    }
    private $carbs;
    private $products;
    private $steps;

    public function __construct($title, $description, $image, $protein, $fat, $carbs, $products, $steps)
    {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->protein = $protein;
        $this->fat = $fat;
        $this->carbs = $carbs;
        $this->products = $products;
        $this->steps = $steps;
    }
}