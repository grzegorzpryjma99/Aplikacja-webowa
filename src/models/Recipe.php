<?php

class Recipe
{
    private $title;
    private $description;
    private $protein;
    private $fat;
    private $carbs;
    private $products;
    private $steps;
    private $kcal;
    private $image;
    private $categories;
    private $like;
    private $id;

    public function getLike(): int
    {
        return $this->like;
    }

    public function setLike(int $like)
    {
        $this->like = $like;
    }

    public function getKcal(): int
    {
        return $this->kcal;
    }

    public function setKcal(int $kcal)
    {
        $this->kcal = $kcal;
    }

    public function getCategories(): string
    {
        return $this->categories;
    }

    public function setCategories(string $categories)
    {
        $this->categories = $categories;
    }

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

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function __construct($title, $description, $image, $protein, $fat, $carbs, $products, $steps,$kcal,$categories, $like = 0, $id = null)
    {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->protein = $protein;
        $this->fat = $fat;
        $this->carbs = $carbs;
        $this->products = $products;
        $this->steps = $steps;
        $this->kcal = $kcal;
        $this->categories = $categories;
        $this->like = $like;
        $this->id = $id;
    }
}