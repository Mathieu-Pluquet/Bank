<?php

class Bank
{
    private $id;
    private $name;
    private $amount;


    // hydrate
      /**
          * @param array $donnees
          */
         public function __construct($donnees)
         {
             $this->hydrate($donnees);
         }

         /**
          * @param  array  $donnees
          */
         public function hydrate($donnees)
         {
             foreach ($donnees as $key => $value) {
                 $method = 'set'.ucfirst($key);

                 if (method_exists($this, $method)) {
                     $this->$method($value);
                 }
             }
         }


    /**
     * Get the value of Id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param int id
     *
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Name
     *
     * @param string name
     *
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of Amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set the value of Amount
     *
     * @param int amount
     *
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

}
