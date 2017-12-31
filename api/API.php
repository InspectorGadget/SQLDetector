<?php
error_reporting(1);

/**
# All rights reserved InspectorGadget(RTGNetwork)
# This is a project where it auto detects SQL connection and act according to it!
 **/

/**
 * Class API
 */
class API {

    /** @var array */
    public $data = array(
        "direct" => "https://rtgnetwork.tk", // Redirect to whatever website
        "host" => "localhost",
        "username" => "root",
        "password" => "",
        "db" => "new" // Just make an empty db so it can communicate with it
    );

    /**
     * API constructor.
     * @param array|null $data
     */
    public function __construct(array $data = null){
        $this->data['direct'] = $data['direct']!== null ? $data['direct'] : $this->data['direct'];
        $this->data['host'] = $data['host']!== null ? $data['host'] : $this->data['host'];
        $this->data['username'] = $data['username']!== null ? $data['username'] : $this->data['username'];
        $this->data['password'] = $data['password']!== null ? $data['password'] : $this->data['password'];
        $this->data['db'] = $data['db']!== null ? $data['db'] : $this->data['db'];
    }

    /**
     * @return bool
     */
    public function checkSQLStatus(): bool {
        $host = $this->data['host'];
        $username = $this->data['username'];
        $password = $this->data['password'];
        $db = $this->data['db'];
        $connection = new mysqli($host, $username, $password, $db);
        
        if ($connection->connect_error){
            return false;
        } else {
            return true;
        }
    }
    
    
    public function onRedirect() {
        if ($this->checkSQLStatus() === false) {
            $direct = $this->data['direct'];
            if (empty($direct)) {
                echo "Please set redirect URL";
            } else {
                header("Location: " . $direct);
            }
        } else {
            echo "Connection found!"; // You can remove this and set whatever you want!
        }
    }
}
