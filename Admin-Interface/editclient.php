<htm>
    <head>
    <link rel="stylesheet" href="editagent_css.css" />
    </head>
   <body> 
<?php 

$client_id = $_POST['client_id']; 

 
 

require("../Processes/DBCONNECT.php"); 

$sql = "SELECT * FROM clients where client_id='$client_id'"; 

$result = mysqli_query($conn, $sql); 

 
 

        if (mysqli_num_rows($result) === 1) { 

            $data = mysqli_fetch_assoc($result); 

            echo 
            
        "<div class='wrapper'> 

        <form action='editclientprocess.php' method='POST'> 

        <input type='hidden' name='hiddenclient_id' value=".$client_id." /> 

       <b> <p>Client id:</p> </b>

        <input type='text' name='client_id' value=".$data['client_id']." readonly/>

        <b> <p>First Name:</p> </b>

        <input type='text' name='client_fname' value=".$data['client_fname']." /> 

        <b> <p>Last Name:</p> </b>

        <input type='text' name='client_lname' value=".$data['client_lname']." /> 

        <b> <p>Age:</p> <b>

        <input type='text' name='age' value=".$data['age']." /> 

       <b>  <p>Sex:</p> </b>

        <input type='text' name='sex' value=".$data['sex']." /> 

       <b> <p>Phone Number:</p> </b>

        <input type='text' name='phone_number' value=".$data['phone_number']." /> 

       <b>  <p>Client Code:</p> </b>

        <input type='text' name='client_code' value=".$data['client_code']." /> 

       <b> <p>Email:</p> </b>

        <input type='text' name='client_email' value=".$data['client_email']." /> 

       <b>  <p>Agent Assigned</p> </b>
        <input type='text' name='agent_assigned' value=".$data['agent_assigned']." /> <br> <br>

        <p>Agent Code:</p> 

        <input type='text' name='agent_code' value=".$data['agent_code']." />

     <input type='submit' value='Save' class='btn' style=' border-radius: 30px; color: white; background-color: black;'>

         

        </form> 

        </div>"; 

 

} 

 /*<p>Password:</p> 

 <input type='text' name='password' value=".$data['password']." /> */

?>
</body>
</html> 