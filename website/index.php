<!DOCTYPE html>
<html lang="en">
 <head>
    <!--
    Facebook Code Example
    @author: LittleQ <littleq0903@gmail.com>
    @date: 2013-11-23
    -->
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="12;url=http://llurfy.fhero.net" />
    <title>Llurfy</title>
    <link rel="shortcut icon" href="./a-2.png">
    <!-- BLOCK: Loading libraries -->
    <script src="./your_secret.js"></script>
    <script src="../your_secret.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
    <!-- ENDBLOCK: Loading libraries -->


</head>

<body>
    <!-- BLOCK: FB SDK initialization -->

      <div align="center"><img src ="a-2.png" ></div>

      <div id="my-html-playground"  class="container" align="center">
        <h1>長腿叔叔 Run for you</h1>
        <p class="lead">一個跑腿的故事</p>
        <button id="my-login-button" class="btn btn-primary" >Login with Facebook</button>
        <h3>登入需作業時間....  請稍待片刻....</h3>
      </div>

    <div id="footer">
        <p class="text-muted">University of Taipei - Computer Science - Social Network Application.</p>
    </div>


   <script>
    window.fbAsyncInit = function() {
        // init the FB JS SDK
        FB.init({
        appId      : FacebookAppId,                        // App ID from the app dashboard
        cookie     : true,                                 // Allowed server-side to fetch fb auth cookie
        status     : true,                                 // Check Facebook Login status
        xfbml      : true                                  // Look for social plugins on the page
        });


        window.fbLoaded();
        // Additional initialization code such as adding Event Listeners goes here
    };

    // Load the SDK asynchronously
    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        //js.src = "//connect.facebook.net/en_US/all.js";
        // Debug version of Facebook JS SDK
        js.src = "//connect.facebook.net/en_US/all/debug.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
   </script>
    
	<script id="my-script-playground">
            window.fbLoaded = function () {
                // this function will be invoked after the FB.init().
                // define the events when login status changed.
                FB.Event.subscribe('auth.login', function(response) {
                    fetch_my_profile(); 
                    // when user has been logged in, this block will be triggered.
                    var msg = "You're logged in.";
                    $("#my-login-message").html(msg);
                    // print out the response in the console.
                    console.log("Your login response:");
                    console.log(response);



                });     
                    // define the action when user clicked the login button.
                $("#my-login-button").click(function(){
                    FB.login(function(response) {
                    }, {scope: 'email,user_location,user_hometown'});

                });  



           var fetch_my_profile = function () {
               FB.api('/me', function(response) {
                   var my_name = response.name;
                   var my_gender = response.gender;
                   var my_username = response.username;
                   var my_facebook_id = response.id;
                   //var my_email = response.email;
                   //var my_location = response.location.name;
                   
                   //console.log(my_email);
                   //console.log(my_location);

                   // <%session("my_facebook_id")=my_facebook_id>;
                   // <%session("my_username")=my_username>;
                   // <%session("my_email")=my_email>;
                   // <%session("my_location")=my_location>;
                   // <%session("my_gender")=my_gender>;
               
                   document.cookie= "my_facebook_id=" + my_facebook_id;
                   document.cookie= "my_username=" + my_name;
                   document.cookie= "my_email=" + my_email;
                   document.cookie= "my_location=" + my_location;
                   document.cookie= "my_gender=" + my_gender;
                  
                    console.log(my_facebook_id);
                    window.location.reload();

                  //  setTimeout(function(){
                  //    window.location.reload(1);
                  // }, 5000);

               });
  
                    FB.api('/me/picture?width=250', function(response) {
                        var my_picture_url = response.data.url;
                    
                        document.cookie= "my_picture_url=" + my_picture_url;
                        //window.location.reload();
                    });


           };

       };

   </script>


   <?php
      $id = $_COOKIE["my_facebook_id"];
      $username = $_COOKIE["my_username"];
      $email = $_COOKIE["my_email"];
      $location = $_COOKIE["my_location"];
      $gender = $_COOKIE["my_gender"];
      $pictureurl = $_COOKIE["my_picture_url"];


      // var_dump($id);
      // var_dump($username);
      // var_dump($email);
      // var_dump($location);
      // var_dump($gender);
      // var_dump($pictureurl);

      $host="mysql.fhero.net";
      $user="u662537759_db1";
      $ps="llurfy7890";
      $dbase="u662537759_db1";

      $link = mysql_connect($host,$user,$ps);
      mysql_select_db($dbase,$link);
      //var_dump($id);


	    if (is_null($id) == false && $id!= "undefined"){
      
      $insert_str = "insert into member(id,name,gender,address,email,pic)
      Values('$id','$username','$gender','$location','$email','$pictureurl')";
      
      echo "<script>document.location.href='main.php'</script>";
    
      mysql_query($insert_str);
      }
   //  if( strstr($id,"undefined") == false &&  strstr($username,"undefined") == false &&  strstr($gender,"undefined") == false ) //使用strstr()函數，若有找到為true 
   //  {  

   //    $insert_str = "insert into member(id,name,gender,address,email)
   //    Values('$id','$username','$gender','$location','$email')";
	     
   //    //echo "<script>document.location.href='main.php'</script>";
	  
   //    mysql_query($insert_str);
	  
	  // } 	  
      



     ?>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
