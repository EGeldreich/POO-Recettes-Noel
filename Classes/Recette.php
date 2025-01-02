<?php

class Recette {

    //Attributes
    private string $name;
    private string $type;
    private float $preparationTime;
    private string $instruction;
    private array $ingredients;

    public function __construct(string $name, string $type, float $preparationTime, string $instruction, array $ingredients){
        $this->name = $name;
        $this->type = $type;
        $this->preparationTime = $preparationTime;
        $this->instruction = $instruction;
        $this->ingredients = $ingredients;

    }
    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of preparationTime
     */ 
    public function getPreparationTime()
    {
        return $this->preparationTime;
    }

    /**
     * Set the value of preparationTime
     *
     * @return  self
     */ 
    public function setPreparationTime($preparationTime)
    {
        $this->preparationTime = $preparationTime;

        return $this;
    }

    /**
     * Get the value of instruction
     */ 
    public function getInstruction()
    {
        return $this->instruction;
    }

    /**
     * Set the value of instruction
     *
     * @return  self
     */ 
    public function setInstruction($instruction)
    {
        $this->instruction = $instruction;

        return $this;
    }

    /**
     * Get the value of ingredient
     */ 
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Set the value of ingredient
     *
     * @return  self
     */ 
    public function setIngredient($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }


    public function __toString(){
        return $this->name;
    }

}