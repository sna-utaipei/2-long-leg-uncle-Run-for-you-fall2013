<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <script src="./your_secret.js"></script>
    <script src="../your_secret.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

     <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="./dist/js/bootstrap.min.js"></script>
    <script src="./offcanvas.js"></script>
    <script src="./dropdown.js"></script>
    <script src="./modal.js"></script>  

    <script>
       window.fbAsyncInit = function() {
           // init the FB JS SDK
           FB.init({
           appId      : 474884645966454,                        // App ID from the app dashboard
           cookie     : true,                                 // Allowed server-side to fetch fb auth cookie
           status     : true,                                 // Check Facebook Login status
           xfbml      : true                                  // Look for social plugins on the page
           });

           // Additional initialization code such as adding Event Listeners goes here
           window.fbLoaded();
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


       function setserbytime(userkeytime){
        document.cookie= "cuk=" + userkeytime;
        window.location.reload();
      }

    </script>

    <script id="my-script-playground">
            window.fbLoaded = function () {
                // this function will be invoked after the FB.init().
                // define the events when login status changed.
                FB.Event.subscribe('auth.login', function(response) {
                    // when user has been logged in, this block will be triggered.
                    var msg = "You're logged in.";
                    $("#my-login-message").html(msg);
                    // print out the response in the console.
                    console.log("Your login response:");
                    console.log(response);
                });    


                $("#fb-logout").click(function(){
                 // FB.login(); 
                 FB.logout();

                document.cookie = "my_facebook_id =" + '; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                document.cookie = "my_username=" + '; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                document.cookie = "my_email=" + '; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                document.cookie = "my_location=" + '; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                document.cookie = "my_gender=" + '; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                document.cookie = "my_picture_url=" + '; expires=Thu, 01 Jan 1970 00:00:01 GMT;';

               });


                $('#fb-share').click(function(){
                            var jtopic = document.form1.elements['in_topic'].value;
                            var jlocation = document.form1.elements['in_location'].value;
                            var jreward = document.form1.elements['in_reward'].value;
                            var jstart_time = document.form1.elements['in_st'].value;
                            var jfinish_time = document.form1.elements['in_ft'].value;
                            var jdes = document.form1.elements['in_des'].value;
                        FB.ui(
                        {

                            method: 'feed',
                            name: '我在長腿叔叔網站上找到『'+jtopic+'』的臨時工作，趕快來賺點外快吧！',
                            link: 'http://llurfy.fhero.net/',
                            picture: 'http://llurfy.fhero.net/a-2.png',
                            caption: '工作地點：'+jlocation+'回饋：'+jreward+'開始時間：'+jstart_time+'結束時間：'+jfinish_time,
                            description: '工作敘述：'+jdes
                            },
                            function(response) {
                            if (response && response.post_id) {
                            alert('Post was published.');
                            } else {
                            alert('Post was not published.');
                            }
                        }
                        );

                });


           };


    </script>
    <title>跑腿網</title>

    <!-- Bootstrap core CSS -->
    <link href="./dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./tc/offcanvas.css" rel="stylesheet">
    <link href="./tc/navbar-fixed-top.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="jquery.datetimepicker.css"/ >


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>




  <body>

    <!-- Modal A -->
            <div class="modal fade " id="myModalA" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog ">
                <div class="modal-content">
                  <form name="form1" method="post" action="addpost.php">
                  
                  <div class="modal-header" style="background:#CDFEFF">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Post job!!!</h4>
                  </div>                    
                      <div class="modal-body">
                            
                            <div class="input-group">
                              <span class="input-group-addon">Topic</span>
                              <input type="text" class="form-control" placeholder="please decribe the job you'll post in one sentence" name="in_topic">
                            </div>
                            <br>

                            <div class="input-group">
                              <span class="input-group-addon">Locations</span>
                              <input type="text" class="form-control" placeholder="where to work , if there're more places need to go. pls type them all." name="in_location">
                            </div>
                            <br>                           

                            <div class="input-group">
                              <span class="input-group-addon">Reward</span>
                              <input type="text" class="form-control" placeholder="Money , something or nothing" name="in_reward">
                            </div>
                          
                            <div class = "row">

                              <div class="col-lg-6">
                                <h4><span class="label label-default">Start Time</span></h4>
                                <input type="text" value="" placeholder="Please enter time" id="datetimepicker" name="in_st"><br>
                              </div>

                              <div class="col-lg-6">
                                <h4><span class="label label-default">Finish Time</span></h4>
                                <input type="text" value="" placeholder="Please enter time" id="datetimepicker2" name="in_ft"><br>                        
                              </div>
                            </div><!--row-->
                            <br>
       
                            <textarea class="form-control text" rows="15" style="resize: none;" placeholder="give some more details about your job ...." name="in_des"></textarea>                                
                      </div><!--modal body-->
                    <div class="modal-footer">
                      <button id="fb-share" type="button" class="btn btn-primary">Share to FB</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary" value="Post!!">Post!!</button>
                    </div>
                  </form>   
                </div><!-- /.modal-content -->                               
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->


    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">長腿叔叔(Llurfy)</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="./main.php">Home</a></li>
            <li><a href="#about">About</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="./" class="btn" id="fb-logout">Log out</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    

           <div class="container" style = " width: 65%">                       
            <div class="panel panel-info"> 
              <?php

                $pic = $_COOKIE["my_picture_url"];
                $name = $_COOKIE["my_username"];
      
                echo "
                  <div class='panel-heading'>
                  <img class='media-object' src='' alt='' style='' class='img-thumbnail' id='my-profile-picture'>
                  <div class='media'>
                      <a class='pull-left' href='#'>
                        <img class='media-object' src='".$pic;  echo "' alt='' style='width: 150px; height: 150px;' class='img-thumbnail' id='my-profile-picture'>
                      </a>
                      <div class='media-body'>
                        <div class='pull-left'>
                          <h3>".$name; echo "</h3><br><br><br>
                          <button type='button' class='btn btn-info btn-xs'>Profile Edit</button>
                        </div> 

                        <div class='pull-right' style='WIDTH: 130px;'>
                          <br>
                          <a href='myjob.php'><button type='button' class='btn btn-info btn-lg' style='WIDTH: 130px;'>My Received</button></a><br><br>
                          <a href='main.php'><button type='button' class='btn btn-info btn-lg ' style='WIDTH: 130px;'>Find job</button></a>
                        </div>

                        <div class='pull-right'  style='WIDTH: 10px;'>&nbsp;</div>
                        <div class='pull-right'  style='WIDTH: 130px;'>

                          <br>

                        </div>

                      </div>
                  </div>
                  </div>

              ";
              ?>


            
              <div class="panel-body">
                      <div class="input-group">                   
                          <h2>我張貼過的工作</h2>
                          <div class="input-group-btn" >
                            <input type="button"  class="btn btn-default " data-toggle="dropdown" id="serchid" value="依新增時間搜尋▼"/>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="#" onclick = setserbytime(1);>本日</a></li>
                                <li><a href="#" onclick = setserbytime(2);>一星期內</a></li>
                                <li><a href="#" onclick = setserbytime(3);>一個月內</a></li>
                                <li><a href="#" onclick = setserbytime(0);>不限時間</a></li>
                              </ul>
                              <br>
                            </div>
                      </div>
                  
                  <?php              
                      mysql_connect("mysql.fhero.net","u662537759_db1","llurfy7890");
                      mysql_select_db("u662537759_db1");

                      $id = $_COOKIE["my_facebook_id"];
                      
                      $count = 0;

                      
                      if($_COOKIE["cuk"] == 0) //不限時間
                        {
                            $sql="select * from job WHERE posterid= '$id' order by jobid desc";  //±qguestbookÅª¨ú¸ê®Æ¨Ã¨ÌnoÄæ¦ì°µ»¼´î±Æ§Ç
                            echo "<script>document.getElementById('serchid').value = '不限時間▼'</script>";
                        }
                        else if($_COOKIE["cuk"] == 1) //日
                        {
                            $sql="select * from job WHERE posterid= '$id' and TO_DAYS(NOW()) - TO_DAYS(posttime) <= 1 order by jobid desc";  //±qguestbookÅª¨ú¸ê®Æ¨Ã¨ÌnoÄæ¦ì°µ»¼´î±Æ§Ç
                            echo "<script>document.getElementById('serchid').value = '本日▼'</script>";
                        }
                        else if($_COOKIE["cuk"] == 2) //一星期
                        {
                            $sql="select * from job WHERE posterid= '$id' and TO_DAYS(NOW()) - TO_DAYS(posttime) <= 7 order by jobid desc";  //±qguestbookÅª¨ú¸ê®Æ¨Ã¨ÌnoÄæ¦ì°µ»¼´î±Æ§Ç
                            echo "<script>document.getElementById('serchid').value = '一星期內▼'</script>";
                        }
                        else if($_COOKIE["cuk"] == 3) //一個月
                        {
                            $sql="select * from job WHERE posterid= '$id' and TO_DAYS(NOW()) - TO_DAYS(posttime) <= 30 order by jobid desc";  //±qguestbookÅª¨ú¸ê®Æ¨Ã¨ÌnoÄæ¦ì°µ»¼´î±Æ§Ç
                            echo "<script>document.getElementById('serchid').value = '一個月內▼'</script>";
                        }

                      $result=mysql_query($sql);

                      while (list($jobid,$postername,$posterid,$topic,$location,$reward,$des,$post_time,$start_time,$finish_time,$receiveid,$receivename,$ref,$pic,$ok)
                        =mysql_fetch_row($result))
                      {                      
                        // var_dump($jobid);var_dump($postername);var_dump($posterid);
                        // var_dump($topic);var_dump($location);var_dump($reward);
                        // var_dump($des);var_dump($post_time);var_dump($start_time);                
                        // var_dump($finish_time);var_dump($receiveid);var_dump($ref);var_dump($pic);
                        // var_dump($ok);

                        echo  "
                            <div  class='col-12 col-sm-12 col-lg-12 ";
                            if($ok == 1){echo "well well-sm' style='background-color: #fcf8e3; border-color: #faebcc; '";}
                            else{echo ">";}

                            echo "<hr size='10px;'> 
                              <div class='media'>
                                  <a class='pull-left' href='#''>
                                    <img class='media-object' src='".$pic; echo"' alt='75*75' style='height: 75px;' class='img-thumbnail'>
                                  </a>
                                  <div class='media-body'>
                                        <div class='pull-right'>
                                          <br>
                                          <button class='btn-info btn-lg' data-toggle='modal' data-target='#myModalB".$count; echo"'>Details....</button>
                                        </div>
                                        <font color='#31708f'><h4 class='media-heading'>".$topic; echo"</h4></font>
                                        <h5>接收者:".$receivename;  echo"</h5><p>工作地點: ".$location; echo"</p><p>張貼時間: ". $post_time; echo "</p>
                                  </div>
                                  <br>
                              </div>
                            </div>

                        <!-- Modal B -->
                        <div class='modal fade' id='myModalB".$count; echo"' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                          <div class='modal-dialog'>
                            <div class='modal-content'> 
                              <form name='bgbh".$count; echo"' method='post' action='delete.php'>                                                      
                                      <div class='modal-header' style='background:#C7EFA1'>
                                        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                        <h4 class='modal-title' id='myModalLabel'>Post job!!!</h4>
                                      </div>
                                    
                                      <div class='modal-body'>

                                          <div class='row'>
                                               
                                               <div class='pull-left'>
                                                  <img class='media-object' src='".$pic; echo"' alt='' style='width: 200px; height: 200px;'' class='img-thumbnail' id='my-profile-picture' name='pic'>  
                                               </div>  

                                               <div class='pull-right'>
                                                  <div class='col-6'  style='WIDTH: 350px;'>
                                                    <div class='input-group  '>
                                                        <span class='input-group-addon'>Receiver</span>              
                                                        <input type='text' class='form-control col-6' value='".$receivename; echo"' name='postname' readOnly> 
                                                    </div>
                                                  </div>                                    
                                                  <br>

                                                  <div class='col-6'  style='WIDTH: 350px;'>
                                                    <div class='input-group'>
                                                        <span class='input-group-addon'>Topic</span>              
                                                        <input type='text' class='form-control' value='".$topic; echo"' name='in_topic' readOnly> 
                                                    </div>
                                                  </div>
                                                  <br>

                                                  <div class='col-6'  style='WIDTH: 350px;'>
                                                    <div class='input-group'>
                                                      <span class='input-group-addon'>Locations</span>
                                                      <input type='text' class='form-control' value='".$location; echo"' name='in_location' readOnly>
                                                    </div>
                                                  </div>
                                                  <br>                           

                                                  <div class='col-6'  style='WIDTH: 350px;'>
                                                    <div class='input-group'>
                                                      <span class='input-group-addon'>Reward</span>
                                                      <input type='text' class='form-control' value='".$reward; echo"' name='in_reward' readOnly>
                                                    </div>
                                                  </div>
                                                </div>

                                          </div>
                                            

                                            <div class = 'row'>
                                              <div class='col-lg-4'>
                                                <h4><span class='label label-default'>Start Time</span></h4>
                                                <input type='text' value='".$start_time; echo"' id='datetimepicker' name='in_st' readOnly><br>
                                              </div>

                                              <div class='col-lg-4'>
                                                <h4><span class='label label-default'>Finish Time</span></h4>
                                                <input type='text' value='".$finish_time; echo"' id='datetimepicker2' name='in_ft' readOnly><br>                        
                                              </div>

                                              <div class='col-lg-4'>
                                                <h4><span class='label label-default'>Post Time</span></h4>
                                                <input type='text' value='".$post_time; echo"' name='posttime' readOnly><br>                        
                                              </div>

                                            </div>
                                            <br>
                       
                                            <textarea class='form-control text' rows='15' style='resize: none;' placeholder='".$des; echo"' name='in_des' readOnly></textarea>                                
                                      </div><!--modal body-->
                                      
                                      <div class='modal-footer'>
                                        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                        <button type='submit' class='btn btn-primary' value='delete'>Delete</button>
                                      </div>                                    
                              </form>
                            </div><!-- /.modal-content -->                  
                          </div><!-- /.modal-dialog -->
                        </div><!-- /.modal --> ";       
                        $count = $count + 1 ;        
                    }

                  ?>
                </div>
              </div>
            </div>
            

           
    <?php
      $id = $_COOKIE["my_facebook_id"];
      //var_dump($id);
      if ($id == NULL) {            
      echo "<script>document.location.href='index.php'</script>";      
      }
    ?>
 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>

    <script src="jquery.js"></script>
    <script src="jquery.datetimepicker.js"></script>

    <script>
     $('#datetimepicker').datetimepicker({value:'',step:10});
    </script>

    <script>
     $('#datetimepicker2').datetimepicker({value:'',step:10});
    </script>

</html>