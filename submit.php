<?php 


           $conn=mysqli_connect('localhost','swarup6797','swarup6797','form');
             if(!$conn){
                echo 'failed to connect ' .mysqli_connect_error();
            }
             else{
                        if(isset($_POST['email']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['phone']) && isset($_POST['gender']) && isset($_POST['study']) && isset($_POST['hobbies']) ){
                                            $email=mysqli_real_escape_string($conn,$_POST['email']);
                                            $fname=mysqli_real_escape_string($conn,$_POST['fname']);
                                            $lname=mysqli_real_escape_string($conn,$_POST['lname']);
                                            $phone=mysqli_real_escape_string($conn,$_POST['phone']);
                                            $gender=mysqli_real_escape_string($conn,$_POST['gender']);
                                            $study=mysqli_real_escape_string($conn,$_POST['study']);
                                            $hobbiesx = implode(",", $_POST['hobbies']); 
                                            $hobbies=mysqli_real_escape_string($conn,$hobbiesx);
                                            echo 'connected successfully';


                                            // gpt guidance  
                                            $stmt = $conn->prepare("INSERT INTO users(firstname, lastname, email, number, gender, study, hobbies) VALUES (?, ?, ?, ?, ?, ?, ?)");
                                            $stmt->bind_param("sssssss", $fname, $lname, $email, $phone, $gender, $study, $hobbies);


                                      if ($stmt->execute()) {
                                        echo "New record created successfully";
                                    } 
                                      else {
                                        echo "Error: " . $stmt->error;
                                    }
                                      $stmt->close();
                                      $conn->close();
                                    
                      }
                        else{
                          echo "enter all details properly ";
                        }
           }







?>




