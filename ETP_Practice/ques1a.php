<!-- write a code to create manage sessions -->
<?php

// to start a session manually 
function startSession($sessionId){
    // set a cookie with session ID(expire in 1 hour)
    setcookie("session_id", $sessionId, time() + 3600, "/");
}

// to store session data 
function setSessionData($sessionId, $data){
    // store data in cookies (here using serialized array)
    setcookie("session_data_$sessionId", serialize($data), time() + 3600, "/");
}

// to get session data 
function getSessionData($sessionId){
    if(isset($_COOKIE["session_data_$sessionId"])){
        return unserialize($_COOKIE["session_data_$sessionId"]);
    }
    return null;
}


/// Example usage: 

// Start a session 
$sessionId = "user123"; // This would normally be unique for each user 
startSession($sessionId);

// Set session data 
$data = ['username' => 'JohnDoe', 'email' => 'goyalrimmi12@gmail.com'];
setSessionData($sessionId, $data);

// Retrieve session data 
$sessionData = getSessionData($sessionId);
echo "Username: " . $sessionData['username'];   // output: Username: JohnDoe 

// Destroy session 
// destroySession($sessionId);



?>
