<?php
    

    function insertData($table, $DB, $arr){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $DB = "MatchUp_USERDATA";
    
        // Create connection
        $conn = new mysqli($servername, $username, $password, $DB);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: <br>" . $conn->connect_error);
        }

        foreach ($arr as $key => $value) {

            switch ($key) {
                case "fName":
                    $fName = $value;
                    break;
                case "lName":
                    $lName = $value;
                    break;
                case "DOB":
                    $DOB = $value;
                    break;
                case "pwd":
                    $pwd = $value;
                    $pwd = password_hash($value, PASSWORD_DEFAULT);
                    break;
                case "email":
                    $email = $value;
                    break;
                default:
                    break;
            }
        }
        $data = "INSERT INTO $table (firstname, lastname, pwd, DOB, email)
            VALUES ('$fName', '$lName', '$pwd', '$DOB', '$email')";
        
        if ($conn->query($data) === TRUE) {
            echo "New record created successfully";
            return true;
            $conn->close();
        } else {
            echo "Error: " . $data . "<br>" . $conn->error;
            return false;
            $conn->close();
        }

    }
    function testData($data, $table){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $DB = "MatchUp_USERDATA";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $DB);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: <br>" . $conn->connect_error);
        }

        $sql = "SELECT firstname, pwd FROM $table";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $match=array_diff($data, $row);
                if(count($match) > 1 && array_key_exists("pwd", $match)){
                    if (password_verify($match['pwd'], $row['pwd'])) {
                        // echo "Found a Match!";
                        $conn->close();
                    return true;
                    }
                }
            }
        } else {
            //echo "No Matches Found!";
            $conn->close();
            return false;
        }
    }

    function remData($data, $table){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $DB = "MatchUp_USERDATA";

        $user = $data['user'];
        $pwd = $data['pwd'];

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $DB);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // sql to delete a record
        $sql = "DELETE FROM $table WHERE firstname='$user'";

        if (mysqli_query($conn, $sql)) {
            echo "Record deleted successfully";
            mysqli_close($conn);

            session_destroy();
            unset($_SESSION['user']);
            return true;
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
            return false;
        }
    }
?>