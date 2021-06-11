<?php

/**
 * Creation de la classe Person
 * Author Nabil
 */
class Person
{

    private $_Name;
    private $_Firstname;
    private $_Age;

    /**
     * Method __construct creation du constructeur avec les 3 proprietes de person en parametres
     *
     * @param string $Name Nom de la personne
     * @param string $Firstname Prenom de la personne
     * @param int $Age Age de la personne
     *
     * @return void
     */
    public function __construct(string $Name, string $Firstname, int $Age)
    {
        $this->_Name = $Name;
        $this->_Firstname = $Firstname;
        $this->_Age = $Age;
    }

    /**
     * Method getName permet de récupérer le contenu de la propriété nom
     *
     * @return void
     */
    public function getName()
    {
        return $this->_Name;
    }

    /**
     * Method setName permet de modifier le contenu de la propriété nom
     *
     * @param $Name 
     *
     * @return void
     */
    public function setName($Name)
    {
        $this->_Name = $Name;
    }


    public function getFirstName()
    {
        return $this->_Firstname;
    }

    public function setFirstName($Firstname)
    {
        $this->_Firstname = $Firstname;
    }

    public function getAge()
    {
        return $this->_Age;
    }

    public function setAge($Age)
    {
        $this->_Age = $Age;
    }
}
