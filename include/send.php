<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
mysqli_report(MYSQLI_REPORT_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is comming from a form
    
	$name = ($_POST['name']);
    $city = filter_var($_POST["city"], FILTER_SANITIZE_STRING);
    $street = filter_var($_POST["street"], FILTER_SANITIZE_STRING);
    $number = filter_var($_POST["number"], FILTER_SANITIZE_STRING);
    $rate = filter_var($_POST["rate"], FILTER_SANITIZE_STRING);
    //$objects = filter_var($_POST["objects"], FILTER_SANITIZE_STRING);
    $coordinates = filter_var($_POST["coordinates"], FILTER_SANITIZE_STRING);
    $category = filter_var($_POST["category"], FILTER_SANITIZE_STRING);
    $description = filter_var($_POST["description"], FILTER_SANITIZE_STRING);

    $objects = '';
    if(isset($_POST['objects'])) {
        $objects = implode(' ', $_POST['objects']); 
    }
    $allowed = '';
    if(isset($_POST['allowed'])) {
        $allowed = implode(' ', $_POST['allowed']); 
    }
    
	if (empty($name)){
		die("Please enter your name");
	}
	if (empty($city)){
		die("Please enter a city address");
	}
	if (empty($rate)){
		die("Please give a rating");
	}	
    
    echo "Posting <b>". $name ."</b><br/>";
    echo "Posting <b>". $city ."</b><br/>";
    echo "Posting <b>". $street ."</b><br/>";
    echo "Posting <b>". $number ."</b><br/>";
    echo "Posting <b>". $rate ."</b><br/>";
    echo "Posting <b>". $objects ."</b><br/>";
    echo "Posting <b>". $allowed ."</b><br/>";
    echo "Posting <b>". $coordinates ."</b><br/>";
    echo "Posting <b>". $category ."</b><br/>";
    echo "Posting <b>". $description ."</b><br/>";
    
	//Open a new connection to the MySQL server
	//see https://www.sanwebe.com/2013/03/basic-php-mysqli-usage for more info
    
	$mysqli = new mysqli('localhost', 'skatelist_nl_skatelist', 'xQN3zWRU9azk', 'skatelist_nl_skatelist');
    
    var_dump(mysqli_connect_errno());
    
    if ($mysqli->connect_error) {
        echo "Sorry, this website is experiencing problems.";
        echo "Error: Failed to make a connection, here is why: \n";
        echo "Errno: " . $mysqli->connect_errno . "\n";
        echo "Error: " . $mysqli->connect_error . "\n";
        exit;
    }
    
	
	$sql = "INSERT INTO skatepark (name, city, street, number, rate, objects, location, category, description, allowed) VALUES (?,?,?,?,?,?,?,?,?,?)"; //prepare sql insert query
    $statement = $mysqli->prepare($sql);
    var_dump($statement);
    
    
    $statement->bind_param("ssssisssss", $name, $city, $street, $number, $rate, $objects, $coordinates, $category, $description, $allowed);
    $statement->execute();
    
        
	if($statement->execute()){
		print "Hello ". $name ."!, your message has been saved!";
	}else{
		print $mysqli->error; //show mysql error if any
	}
    
    
    var_dump($_POST);
    
    $image = __DIR__ . '/img/parks/' . $mysqli->insert_id . '.png';
    echo $image;
    
    $res = move_uploaded_file($_FILES["image"]["tmp_name"], $image);
    var_dump($res);
}
?>
