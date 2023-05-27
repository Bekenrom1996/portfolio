<?php

$conn = mysqli_connect('localhost','root', '', 'content') or die('connection failed');



if(isset($_POST['send'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    
$select_message = mysqli_query($conn, "SELECT * FROM `content_form` WHERE name='$name' AND email='$email' AND number='$number' AND message='$message'") or die('query failed');


if(mysqli_num_rows($select_message) > 0){

    $message['message'] = 'message sent already!';
}else{
mysqli_query($conn, "INSERT INTO `content_form`(name, email, number, message) VALUES 
('$name', '$email', '$number', '$message')") or die('query failed');

}
}

?> 








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="port.css">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"/>     

</head>
<body>
    


<?php



if(isset($$message)){

foreach($$message as $$message){
  echo ' 
  <div class="message" data-aos="zoom-out">

<span>'. $message.'</span>
<i class="fas fa-times" onclick="this.parentElement.remove();"></i>

</div>
  
  ';
}

}
?>


<header class="header">

<div id="menu-btn" class="fas fa-bars"></div>

<a href="#home" class="logo">Porfolio.</a>


<nav class="navbar">

<a href="#home" class="active">home</a>
<a href="#about">about</a>
<a href="#portfolio">portfolio</a>
<a href="#services">services</a>
<a href="#contact">contact</a>







</nav>



<div class="follow">
<a href="#" class="fab fa-facebook-f"></a>
<a href="#" class="fab fa-twitter"></a>
<a href="#" class="fab fa-instagram"></a>
<a href="#" class="fab fa-linkedin"></a>
<a href="#" class="fab fa-github"></a>





</div>



</header>











<section class="home" id="home">
<div class="image" data-aos="fade-right">

<img src="boyz2.jpg" alt="">

</div>
<div class="content">

    <h3 data-aos="fade-up">hi i am kayode boluwatife</h3>
    <span data-aos="fade-up">web designer & developer</span>
    <p data-aos="fade-up">i design and develop experience that make people <b>simple</b></p>
    <a data-aos="fade-up" href="#about" class="btn">about me</a>
</div>


</section>







<section class="about" id="about">



    <h1 class="heading"data-aos="fade-up"><span>biography</span></h1>
<div class="biography">

<p data-aos="fade-up">kayode boluwatife is web developer @ arab technologies industries that helps companies attract vistors,<br> 
    convert leads and close customers. He graduated with honors(Bed)/(Bsc) from olabisi onabanjo university and National diploma(ND)
    <br> business administartion from ogun state polytechnic He also graduated from (NIIT) of which he was awarded 
    with a certificate of  a certified full stack web developer
</p>


<div class="bio">


    <h3 data-aos="fade-zoom-in"><span>name : </span>Kayode boluwatife</h3>
    <h3 data-aos="fade-zoom-in"><span>email : </span>Kayodeboluwatife112@gmail.com</h3>
    <h3 data-aos="fade-zoom-in"><span>address : </span>UK london</h3>
    <h3 data-aos="fade-zoom-in"><span>Phone : </span>09011052986, 07069241668</h3>
    <h3 data-aos="fade-zoom-in"><span>age: </span>26</h3>
    <h3 data-aos="fade-zoom-in"><span>experience : </span>2+ years</h3>

    
</div>

<a href="#" class="btn" onclick="myPrint('about')" value="print" data-aos="fade-up">download cv</a>



</div>



<div class="skills" data-aos="fade-up">


<h1 class="heading"><span>Skills</span></h1>


<div class="progress">
<div class="bar" data-aos="fade-left" ><h3><span>HTML</span><span></span>95%</h3></div>
<div class="bar" data-aos="fade-right" ><h3><span>CSS</span><span></span>80%</h3></div>
<div class="bar" data-aos="fade-left"><h3><span>JAVASCRIPT</span><span>65%</h3></div>
<div class="bar" data-aos="fade-right" ><h3><span>PHP</span>70%</h3></div>
<div class="bar" data-aos="fade-right" ><h3><span>MYSQL</span><span>60%</h3></div>
<div class="bar" data-aos="fade-right" ><h3><span>REACT</span><span>60%</h3></div>


</div>

</div>
<div class="edu-exp">

    <h1 class="heading"  data-aos="fade-up"><span>education & experience</span></h1>
    <div class="row">

        <div class="box-container">
<h3 class="title" data-aos="fade-right">Education</h3>
<div class="box" data-aos="fade-right">

<span>(2015-2019)</span>
<h3>B.ed Guidance and counselling</h3>
<p>Studied at olabisi onbanjo university</p>

</div>

<div class="box" data-aos="fade-right">

    <span>(2013-2015)</span>
    <h3>Buainess Administration</h3>
    <p>Studied at Adegbenro polythecnic</p>
    
    </div>










        </div>


        <div class="box-container">
            <h3 class="title"  data-aos="fade-left">experience</h3>
            <div class="box" data-aos="fade-left">
            
            <span>(2021-2022)</span>
            <h3>Web Development</h3>
            <p>studied at national institue of technology(NIIT)</p>
            
            </div>
            
            <div class="box" data-aos="fade-left">
            
                <span>(2021-2022)</span>
                <h3>SSCE</h3>
                <p>studied at king emmanuel college</p>
                
                </div>
            
            
            
            
            
            
            
            
            
            
                    </div>






    </div>
</div>

</section>




<section class="services">


<h1 class="heading" data-aos="fade-up"><span>services</span></h1>

<div class="box-container">

<div class="box" data-aos="zoom-in">

<i class="fas fa-code"></i>
<h3>E- Commerce Website</h3>
<p>we help to make your E-commerce website looks attractive</p>

</div>


<div class="box"  data-aos="zoom-in" >

    <i class="fas fa-paint-brush"></i>
    <h3>web developement</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, sapiente molestias? Eveniet nulla quae, assumenda voluptatem quia fugit saepe quisquam sapiente facere delectus esse voluptate ullam autem! A,  
    iusto. Eveniet.</p>
    
    </div>


    <div class="box" data-aos="zoom-in">

        <i class="fas fa-bootstrap"></i>
        <h3>bootstrap</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, sapiente molestias? Eveniet nulla quae, assumenda voluptatem quia fugit saepe quisquam sapiente facere delectus esse voluptate ullam autem! A,  
        iusto. Eveniet.</p>
        
        </div>


        <div class="box" data-aos="zoom-in">

            <i class="fas fa-chart-line"></i>
            <h3>seo marketing</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, sapiente molestias? Eveniet nulla quae, assumenda voluptatem quia fugit saepe quisquam sapiente facere delectus esse voluptate ullam autem! A,  
            iusto. Eveniet.</p>
            
            </div>


            <div class="box" data-aos="zoom-in">

                <i class="fas fa-bullhorn"></i>
                <h3>digital marketing</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, sapiente molestias? Eveniet nulla quae, assumenda voluptatem quia fugit saepe quisquam sapiente facere delectus esse voluptate ullam autem! A,  
                iusto. Eveniet.</p>
                
                </div>


                <div class="box" data-aos="zoom-in">

                    <i class="fab fa-wordpress"></i>
                    <h3>wordpress</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, sapiente molestias? Eveniet nulla quae, assumenda voluptatem quia fugit saepe quisquam sapiente facere delectus esse voluptate ullam autem! A,  
                    iusto. Eveniet.</p>
                    
                    </div>








</div>

</section>




<section class="portfolio" id="portfolio">


<h1 class="heading" data-aos="zoom-in"><span>portfolio</span></h1>

<div class="box-container">

<div class="box" data-aos="zoom-in">
<img src="computer.png" alt="">
<h3>web developement</h3>
<span>(2020-2022)</span>
</div>


<div class="box" data-aos="zoom-in">
    <img src="kat" alt="">
    <h3>web developement</h3>
    <span>(2020-2022)</span>
    </div>

    <div class="box" data-aos="zoom-in">
        <img src="biz.png" alt="">
        <h3>web developement</h3>
        <span>(2020-2022)</span>
        </div>


        <div class="box"  data-aos="zoom-in">
            <img src="home.png" alt="">
            <h3>web developement</h3>
            <span>(2020-2022)</span>
            </div>

            <div class="box" data-aos="zoom-in">
                <img src="biz.png" alt="">
                <h3>web developement</h3>
                <span>(2020-2022)</span>
                </div>

</div>



</section>


<section class="contact" id="contact">

<h1 class="heading" data-aos="fade-up"><span>contact me</span></h1>

<form action="" method="POST">



    <div class="flex">

<input data-aos="fade-right"  type="text" name="name" placeholder="enter your full name" class="box" required>
<input data-aos="fade-left"  type="text" name="email" placeholder="enter your email" class="box" required>


    </div>
<input data-aos="fade-up"  type="number" name="number"min="0" placeholder="enter your phone number" class="box" required>
<textarea data-aos="fade-up"  name="message" class="box" cols="30" rows="10" required placeholder="enter your message"></textarea>
<input type="submit"  data-aos="zoom-in" value="send message" name="send" class="btn">

</form>

<div class="box-container">

    <div class="box" data-aos="zoom-in">
<i class="fas fa-phone"></i>
<h3>phone</h3>
<p>07069241668</p>

    </div>

    <div class="box" data-aos="zoom-in">
        <i class="fas fa-envelope"></i>
        <h3>email</h3>
        <p>Kayodeboluwatife112@gmail.com</p>
        
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-map-marker-alt"></i>
                <h3>address</h3>
                <p>Lagos nigeria</p>
                
                    </div>




</div>


</section>

<div class="credit">&copy; copyright @ <?php echo date ('Y'); ?> by <span>@kayodeboluwatife</span></div>




<script src=" https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>



<script>





    let menu = document.querySelector('#menu-btn');

    let header = document.querySelector('.header');


    menu.onclick = () =>{
        menu.classList.toggle('fa-times');
        header.classList.toggle('active');
     document.body.classList.toggle('active');


    }


window.onscroll = () =>{
    if(window.innerWidth < 991){

        menu.onclick = () =>{
        menu.classList.remove('fa-times');
        header.classList.remove('active');
     document.body.classList.remove('active');



    }
}

document.querySelectorAll('section').forEach(sec => {

    let top = window.scrollY;
    let offset = sec.offsetTop  - 150;
    let height = sec.offsetHeight;
    let id = sec.getAttribute('id');

if(top >= offset && top < offset + height){

document.querySelectorAll('.header .navbar a').forEach(links => {

   links.classList.remove('active'); 
   document.querySelector('.header .navbar a[href*='+ id +']').classList.add('active')

});

};


});


}
</script>






<script>

    function myPrint(about){
        var printdata = document.getElementById(about);
        newwin = window.open("");
        newwin.document.write(printdata.outerHTML);
         newwin.print();
    }
    



</script>









<script>






AOS.init({ 
duration:800,
delay:300



});










</script>











</body>
</html>