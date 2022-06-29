<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP conditions exos</title>
</head>
<body>

<!-- 1.1 Clean your room Exercise -->
    <?php 
        
        // $possible_states = array("health hazard", "filthy", "dirty", "clean", "immaculate");
        // $room_filthiness = $possible_states[2];

        // if($room_filthiness == $possible_states[0]) {
        //     echo "Tchernobyl like, there are radioactive trashs in the room.";
        // } else if($room_filthiness == $possible_states[1]) {
        //     echo "The room is really filthy, it need some urgent clean up.";
        // } else if($room_filthiness == $possible_states[2]) {
        //     echo "The room need some clean up.";
        // } else if($room_filthiness == $possible_states[3]) {
        //     echo "Nothing to do, the room is clean.";
        // } else {
        //     echo "The room is too bright, I'm blind.";
        // }
    ?>
    
<!-- 2. "Different greetings according to time" Exercise -->
    <?php    

        // $now = new DateTime("now", new DateTimeZone('Europe/Brussels') );
        // $nowTime = $now->format("Gi");

        // if($nowTime >= 500 AND $nowTime <= 900) {
        //     echo "Good morning";
        // } 
        // else if($nowTime >= 901 AND $nowTime <= 1200) {
        //     echo "Good day!";
        // }
        // else if($nowTime >= 1201 AND $nowTime <= 1600) {
        //     echo "Good afternoon!";
        // }
        // else if($nowTime >= 1601 AND $nowTime <= 2100) {
        //     echo "Good evening!";
        // }
        // else {
        //     echo "Good night!";
        // }
    ?>

<!-- 3.1. "Different greetings according to age" Exercise -->

    <?php
        // if (isset($_GET['age'])){
        //     $userAge = $_GET['age'];

        //     if($userAge < 12){
        //         echo "Hello Kiddo!";
        //     }
        //     else if ($userAge >= 12 && $userAge < 18) {
        //         echo "Hello Teenager!";
        //     }
        //     else if ($userAge >= 18 && $userAge < 115) {
        //         echo "Hello Adult!";
        //     }
        //     else {
        //         echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
        //     }
        // };
    ?>

    <!-- <form method="get" action="conditions.php">
        <label for="age">Enter your age :</label>
        <input type="text" name="age">
        <input type="submit" name="submit" value="Greet me now">
    </form> -->

<!-- 3.2. "Different greetings according to the age and gender" Exercise -->
    
    <?php
        if (isset($_GET['age'])){
            $gender = getGender();
            $userAge = $_GET['age'];

            if($userAge < 12){
                echo "Hello " . $gender . " Kiddo!";
            }
            else if ($userAge >= 12 && $userAge < 18) {
                echo "Hello " . $gender . " Teenager!";
            }
            else if ($userAge >= 18 && $userAge < 115) {
                echo "Hello " . $gender . " Adult!";
            }
            else {
                echo "Wow! Still alive ? Are you a " . $gender . " robot, like me ? Can I hug you ?";
            }
        };

        function getGender(){
            if(isset($_GET['gender'])){
                $gender = $_GET['gender'];
                return ($gender == "male" ? "Mister" : "Miss");
            }
            return "X";
        }
    ?>


    <form method="get" action="conditions.php">
        <label for="age">Enter your age :</label>
        <input type="text" name="age">
        <input type="radio" name="gender" id="male" value="male"/>
        <label for="male">Male</label>
        <input type="radio" name="gender" id="female" value="female"/>
        <label for="male">Female</label>
        <input type="submit" name="submit" value="Greet me now">
    </form>

</body>
</html>