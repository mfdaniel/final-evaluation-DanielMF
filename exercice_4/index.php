<?php
class Cat
{
    private $firstName;
    private $age;
    private $color;
    private $sex;
    private $race;
    
    //setting the string lenght from firstName to minimum 3 and maximum 20
    public function setFirstNameLength(string $newFirstName)
    {
        if (strlen($newFirstName) >= 3 && strlen($newFirstName)<= 20) {
            throw new Exception();
        }
        $this->firstName = $newFirstName;
        return $this;
    }
    
    
    
    // setting that age is an integer
    public function setAge(int $newAge)
    {
        $this->age = $newAge;
    }
    
    
    
    
    //setting the string lenght from color to minimum 3 and maximum 10
    public function setColorLength(string $newColor)
    {
        if (strlen($newColor) >= 3 && strlen($newColor)<= 10) {
            throw new Exception();
        }
        $this->color = $newColor;
        return $this;
    }
    
    
    
    
    //verifying that the sex is either male or female
    public function setSex($newSex)
    {
        // If the sex is in newsex array, then use the sex
        if (in_array($newSex, ['male', 'female'])) {
            $this->sex = $newSex;
        } else {
            // Else throw an exception
            throw new Exception();
        }
        return $this;
    }
    
    
    //setting the string lenght from race to minimum 3 and maximum 20
    public function setRaceLength(string $newRace)
    {
        if (strlen($newRace) >= 3 && strlen($newRace)<= 20) {
            throw new Exception();
        }
        $this->race = $newRace;
        return $this;
    }
}
$cat = new Cat();
$cat->setFirstNameLength('Miau')->setAge('5')->setColorLength('red')->setSex('male')->setRaceLength('Garfield');
$cat->setFirstNameLength('wuff')->setAge('6')->setColorLength('brown')->setSex('female')->setRaceLength('Garfield');
$cat->setFirstNameLength('boom')->setAge('9')->setColorLength('blue')->setSex('male')->setRaceLength('Garfield');
