<?php


/**
 * Class RandomUser
 *
 * Represents a user object for the purpose of p3.
 * @package pav\p3
 */

class RandomUser
{
    // required attributes
    private $firstName ;
    private $lastName ;
    private $email;

    // dob is an optional parameter
    private $address;
    private $dob;


    public function __construct($name, $lastName, $email, $address = null, $dob = null)
    {
        $this->firstName = $name;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->dob = $dob;
        $this->address = $address;
    }

    /**
     * Returns a plain text comma separated version of the User object fields.
     *
     * @return string
     */
     public function __toString() {

        $result = $this->firstName.','.$this->lastName.','.$this->email;

        if( ! is_null($this->dob ) )
            $result .= ','.$this->dob;

        if( ! is_null($this->address ) )
            $result .= ','.$this->address;

        return $result;
    }


    /**
     * Formats the Users properties in a more structured plain text format
     *
     * @return string
     */
    public function ToFormattedText() {
        $result = 'First Name: '.$this->firstName.'<br />';
        $result .= 'LastName: '.$this->lastName.'<br />';
        $result .= 'email: '.$this->email.'<br />';

        if( ! is_null($this->dob ) )
            $result .= 'Date of Birth: '.$this->dob.'<br />';

        if( ! is_null($this->address ) )
            $result .= 'Address: '.$this->address.'<br />';

        return $result;
    }


    /**
     * Converts the objects properties to a Json string format and
     * returns it.
     *
     * @return string
     */
    public function ToJson() {

        $array = array( 'Name' => $this->firstName,
            'Last Name'.$this->lastName,
            'email' => $this->email
        );

       if( ! is_null($this->dob ) )
            $array['Date of Birth'] = $this->dob;

        if( ! is_null($this->address ) )
            $array['Address'] = $this->address;

        return json_encode($array, JSON_PRETTY_PRINT);
    }

}