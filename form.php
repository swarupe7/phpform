<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/css/multi-select-tag.css">
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/js/multi-select-tag.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
  </head>
    <body>

      <div class="container z-depth-3">
             <form id="infoForm" method="POST">
                 <div class="row">
                          <div class="col s12">  
                                <div class="title">
                                    <p class="center-align">INFO FORM</p>
                                </div>
                          </div>
        
                          <br><br>

                        <div class="col s6">
                            <div class="fname">
                                <label for="fname">First Name</label>
                                      <br>        
                                <input type="text" id="fname"  name="fname"  >
                            </div>
                          <div class="lname">
                                <label for="lname">last Name</label>
                                    <br>  
                                <input type="text" id="lname"  name="lname">
                          </div>
                          <div class="email">
                              <label for="email">Email</label>
                                    <br>
                              <input type="text" id="email"  name="email">
                          </div>
                        </div>

                        <div class="col s6">
                            <div class="gender">
                                      <label for="gender">Gender</label>
                                          <br>
                                      <label for="male">
                                        <input name="gender" type="radio" id="male" value="male" />  
                                        <span>Male</span>
                                      </label>                      
                                    <label for="female">
                                        <input name="gender" type="radio" id="female" value="female" />
                                        <span>Female</span>
                                    </label>
                                  <label for="others">
                                        <input name="gender" type="radio" id="others" value="others" />
                                        <span>Others</span>
                                  </label>            
                            </div>
                         </div>


                           <div class="col s6">
                              <div class="phone">
                                <label for="phone">Phone</label>
                                <br>
                                   <span class="col s3">
                                      <select  name="cc" id="cc" class="browser-default">
                                        <option value="" disabled selected>Code</option>
                                        <option value="india">+91</option>
                                        <option value="us">+1</option>                
                                      </select>
                                   </span>
                                     <span class="col s9">
                                       <input type="number" id="phone" name="phone">
                                    </span>          
                              </div>
                          </div>

                          <div class="col s6"> 
                               <label>Highest education</label> 
                                <div>                                  
                                       <select  name="study" id="study" class="browser-default">
                                          <option value="" disabled selected>Choose your option</option>
                                          <option value="btech">B.Tech</option>
                                          <option value="mtech">M.Tech</option>
                                          <option value="xii">12th class</option>
                                      </select>   
                                </div>  
                          </div>


                            <div class=" col s6"> 
                                 <label >Choose your Hobbies:</label>
                                    <select multiple name="hobbies[]" id="hobbies"  >
                                      <option value="singing">singing</option>
                                      <option value="dancing">dancing</option>
                                      <option value="playing">playing</option>
                                    </select> 
                            </div>

  
                          <div class="col s12 submit"> 
                                    <div class="center-align">
                                         <button  class="btn waves-effect waves-light" type="submit"  id="submit"  name="action" >
                                            Submit          
                                         </button>
                                     </div>
   
                          </div>

                </div>
             </form>
         </div>
          <script>
             new MultiSelectTag('hobbies')  
          </script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
          <script src = "ajax.js"></script>  
         
    </body>
</html>