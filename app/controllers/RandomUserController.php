<?php

class RandomUserController extends BaseController {


    public function GetDefaultPage() {
        $res = array();
        return View::make('UserGenerator')
            ->with('plain_user', $this->Create_User("plain/text"))
            ->with('formatted_user', $this->Create_User("formatted/text"))
            ->with('json_user', $this->Create_User("json"))
            ->with('results', $res);
    }


    public function GetResults() {

        // Validate the number of users
        $validator = Validator::make(Input::all(), array('numberOfUsers' => 'required|integer|between:1, 30'));

        if ($validator->fails()) {
            return Redirect::to('Random_User_Generator')->withErrors($validator);
        }

        // now that data are validated create the faker
        $faker = Faker\Factory::create();


        $numberOfUsers = Input::get('numberOfUsers');
        $data_format = Input::get('dataFormat');
        $dob = (Input::get('dob') === 'yes' ? $this->GetRandomDate() : null);
        $address = (Input::get('address') === 'yes' ? $this->GetAddress($faker) : null);

        // Create a new array to store each user
        $results = array();

        // Create as many users as specified and add the appropriate data to the array

        for ($i = 0; $i < $numberOfUsers; $i++){
            $user = new RandomUser($faker->firstname, $faker->lastname, $faker->email,$address, $dob);

            switch ($data_format) {
                case "plain/text":
                    array_push($results, $user);
                    break;
                case "formatted/text":
                    array_push($results, $user->ToFormattedText());
                    break;
                case "json":
                    array_push($results, $user->ToJson());
                    break;
            }
        }
        return View::make('UserGenerator')
                    ->with('plain_user', $this->Create_User("plain/text"))
                    ->with('formatted_user', $this->Create_User("formatted/text"))
                    ->with('json_user', $this->Create_User("json"))
                    ->with('results', $results);
    }


    // Creates a random user with all fields initialized. It is used to display the
    // users in the 'description' part of the web-page
    private function Create_User($data_format) {
        $user = new RandomUser( "Janice",
            "Batz",
            "ivy.kemmer@wehner.biz",
            "2011/06/30","604 Jaskolski Gateway Apt. 079-New Patrickfurt-07542-5178-Montana"
        );

        switch ($data_format) {
            case "plain/text":
                return $user;
            case "formatted/text":
                return $user->ToFormattedText();
            case "json":
                return $user->ToJson();
        }
    }


    // Create the address string, by concatenating the properties of the faker
    // associated to the address
    private function GetAddress($faker){
        $address = $faker->streetAddress.'-'.$faker->city.'-'.$faker->postcode.'-'.$faker->state;
        return $address;
    }

    // Generates a random date between 1970 and now
    private function GetRandomDate(){
        $int= rand(0,time());
        $result = date("Y/m/d",$int);
        return $result;
    }


}