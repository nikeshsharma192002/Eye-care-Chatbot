<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: index.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eye-Care ChatBot </title>
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWxfWsj053PcaA1gRb_wQlHkKGfQ35S0T8BAdneHpXXl96AIFb0leNlY8gBISZBWopBqU&usqp=CAU">
    

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style copy.css">
      
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="home.css" />

    <!--Google Verification Tag-->
    <meta name="google-site-verification" content="b1R5RC7tyMHQSXMe5_620gW1nM6R3giwf41qrtZWcDE" />
    
</head>
<body>
    
<!-- header section starts  -->

<header>

    <img width="100 px" height="100 px" src="logo.jpg" alt="">

    <div id="menu" class="fas fa-bars"></div>
    

    <nav class="navbar">
        <a class="active" href="#home">home</a>
        <a href="#tips">Tips</a>
        <a href="#doctor" >doctor</a>
        <a href="index.php" >Logout</a>
        
    </nav>
    
</header>

<!-- header section ends -->

<!-- home section starts  -->


<section class="home" id="home">
    
<?php  if (isset($_SESSION['username'])) : ?>
    	<p style="font-size: 30px; position:relative; margin-left:450px;"> Welcome 😎<strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>

    <div class="content">
        <h1>EyeCare-ChatBot</h1>
        <h3>Your Vision is our Priority</h3>
    </div>
    

</section>

<!-- home section ends -->

<!-- tips section starts  -->

<section class="tips" id="tips">

    <h1 class="heading"> Precaution for Eye </h1>

    <div class="box-container">

        <div class="box">
            <img src="https://media2.s-nbcnews.com/i/streams/2013/January/130108/1B5437533-g-hlt-010713-blinkingeyes-519p.jpg" alt="">
            <h3>Blink frequently</h3>
            <p>Blinking helps moisten your eyes and prevent dryness. </p>
        </div>

        <div class="box">
            <img src="https://images.pexels.com/photos/39716/pexels-photo-39716.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
            <h3>Use the right eyewear</h3>
            <p> If you wear glasses, make sure your prescription is up to date. Consider using computer glasses with an anti-reflective coating. </p>
        </div>

        <div class="box">
            <img src="https://www.vooki.in/cdn/shop/articles/Images_Mobile_Screen_Cleaning_Wipes.jpg?v=1655787915" alt="">
            <h3>Keep your screen clean</h3>
            <p>Dust and fingerprints on your screen can reduce clarity and cause eye strain.  </p>
        </div>

        <div class="box">
            <img src="https://media.istockphoto.com/id/1391844449/photo/man-drinking-water-stay-hydrated.jpg?s=612x612&w=0&k=20&c=8wNA5YKkNP8c89I6FEck45tNByvKufFL0hpN4y_1_MM=" alt="">
            <h3>Stay hydrated</h3>
            <p>Drinking enough water can help prevent dry eyes.</p>
        </div>

        <div class="box">
            <img src="https://img.webmd.com/dtmcms/live/webmd/consumer_assets/site_images/articles/health_tools/checklist_stay_healthy_slideshow/1800ss_thinkstock_rf_stretching_woman.jpg?resize=650px:*" alt="">
            <h3>Take regular breaks</h3>
            <p>Give your eyes a rest by taking short breaks throughout your workday. </p>
        </div>

        <div class="box">
            <img src="https://images.ctfassets.net/u4vv676b8z52/6z9uwGX7HUIpTPWxDRbttI/f50d73cc02414dc03af60b18206289a1/artificial-tears-hero.jpeg?fm=jpg&q=80" alt="">
            <h3>Consider using artificial tears</h3>
            <p>If you experience dryness or irritation, using artificial tears can help lubricate your eyes.
            </p>
        </div>

    </div>

</section>

<!-- tips section ends -->



<!-- doctor section start  -->

<section class="doctor" id="doctor">

    <h1 class="heading">consult to our expert doctors</h1>

    <div class="box-container">

        <div class="box">
            <img src="https://www.drniteshbansal.com/img/about/about.png" alt="">
            <h3><a href="https://www.drniteshbansal.com/" target="_blank">Dr Nitish Bansal</a></h3>
            <span>MBBS, MD, SR</span>
            <br><span>Lasik Surgeon</span>
            <br><span>13 Years Experience Overall</span> 
            
            <div class="share">
                <a href="https://www.drniteshbansal.com/" target="_blank"><button class="button button1">Consult</button></a>
            </div>
        </div>

        <div class="box">
            <img src="https://media.licdn.com/dms/image/D4D03AQFeH9qtAAEGLw/profile-displayphoto-shrink_800_800/0/1696277227994?e=2147483647&v=beta&t=6hSC3N74ow2HhCvDGhVI4WUr2uK2mQOeI50YTsammFc">
            <h3><a href="https://www.linkedin.com/in/dr-sakib-mohammad-ataur-ullas-218596294/?originalSubdomain=bd" target="_blank">Dr. Sakib Mohammad Ataur</a></h3>
            <span>MBBS</span>
            <br><span>Consultant Ophthalmologist</span>
            <br><span>5 Years Experience Overall</span> 
            <div class="share">
                <<a href="https://www.linkedin.com/in/dr-sakib-mohammad-ataur-ullas-218596294/?originalSubdomain=bd" target="_blank"><button class="button button1">Consult</button></a>            
            </div>
        </div>

        <div class="box">
            <img src="https://www.savesightcentre.com/assets/img/about/Dr.-Rajeev-Jain.webp" alt="">
            <h3><a href="https://www.savesightcentre.com/doctors-profile.php" target="_blank">Dr. Rajeev Jain</a></h3>
            <span>MBBS</span>
            <br><span>Uveitis specialist and surgeon</span>
            <br><span>12 Years Experience Overall</span> 
            <div class="share">
                <a href="https://www.savesightcentre.com/assets/img/about/Dr.-Rajeev-Jain.webp" target="_blank"><button class="button button1">Consult</button></a>
            </div>
        </div> 
        

    </div>

</section>

<!-- doctor section ends -->


<!-- footer section starts  -->

<div class="footer">

    <div class="box-container">

        <div class="box">
            <h3>About Us</h3>
            <p>We are working on this project together so that the people remain aware of what they are experencing in the context of Eye-Care.</p>
           <a href="">Utsav Kumar</a>
            <a href="">Raksha S</a>
           <a href="">Sindhu L</a>
        </div>

        <div class="box">

           <a href=""><h3>Motive</h3></a>       
		    <p>We are working on this project together so that the people remain aware of what they are experencing in the context of Eye-Care.</p>

        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#">Home</a>
            <a href="#tips">Tips</a>
            <a href="#doctor">Doctor</a>
            
        </div>

       
    </div>

    <h1 class="credit"> Created by C7 GROUP MEMBER</a> </h1>

</div>

<!-- footer section ends -->

<!-- scroll top  -->



<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>


<script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script>
  window.botpressWebChat.init({
      "composerPlaceholder": "Chat with EYE HEALTHCARE BOT",
      "botConversationDescription": "your vision is our priority",
      "botId": "e6dbf553-dbcf-4880-ba68-8bcdf56e8af5",
      "hostUrl": "https://cdn.botpress.cloud/webchat/v1",
      "messagingUrl": "https://messaging.botpress.cloud",
      "clientId": "e6dbf553-dbcf-4880-ba68-8bcdf56e8af5",
      "webhookId": "f82254df-5d09-4d42-a090-490cb928d909",
      "lazySocket": true,
      "themeName": "prism",
      "botName": "EYE HEALTHCARE BOT",
      "stylesheet": "https://webchat-styler-css.botpress.app/prod/f4e30e99-a713-4d4d-bba9-21bb9b235bb5/v11737/style.css",
      "frontendVersion": "v1",
      "useSessionStorage": true,
      "enableConversationDeletion": true,
      "theme": "prism",
      "themeColor": "#2563eb"
  });
</script>



</body>
</html>

