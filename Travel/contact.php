<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="slide-bar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Welcome To Balaji Travel</title>
</head>

<body>
    <div class="main-div">
        <header>

            <div>
                <i class="fas fa-plane"></i>
                <p>Balaji Travel</p>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="enquiry.php">Enuiry</a></li>
                    <li><a href="contact.php">Contect</a></li>
                </ul>

            </nav>
        </header>
        <main>

            <section class="tittle">
                <h1>Travel Website</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore eos consectetur dignissimos
                    voluptate
                    voluptatum .</p>

            </section>

            <section class="container-boxes">
                <div class="box">
                    <div class="icon">
                        <a href=""><i class="fas fa-book"></i></a>
                    </div>
                    <div class="text">
                        <a href="">
                            <h3>Book Now</h3>
                            <p>Book Now And Fly Around The World With Qatar Airways.</p>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <a href=""><i class="fas fa-plane"></i></a>
                    </div>
                    <div class="text">
                        <a href="">
                            <h3>Book Now</h3>
                            <p>Travel With Us And Explore The World Of Adventures.</p>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <a href=""><i class="fas fa-address-card"></i></a>
                    </div>
                    <div class="text">
                        <a href="">
                            <h3>Teams</h3>
                            <p>Become a member,become family.Teamwork is everything.</p>
                        </a>
                    </div>
                </div>

            </section>

    </div>


  <div class="wid-100">
      <div class="wid-50A">
          <h1 class="wid-50A-h1">
            Get In
            <span class="wid-50A-span">Touch</span>
          </h1>

          <p classs="wid-50A-p"> Please fill in the quick form and we will be in touch with lightening speed.</p>

          <form action="" method="post">
          <input type="text" placeholder="Name" name="name" class="wid-50A-inputnmae">
          <input type="text" placeholder="Mobile Number" name="mobile" class="wid-50A-inputmobile">
          <textarea placeholder="Message" name="massage" cols="10" rows="10" class="wid-50A-inputtextarea" ></textarea>
          <button class="wid-50A-inputbutton" name="send" type="submit">Send Message</button>

          </form>
          <?php
				
				if(isset($_POST['send'])){
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"travel");
					$query = "INSERT INTO `contact`(`name`, `mobile`, `massage`) VALUES ('$_POST[name]','$_POST[mobile]','$_POST[massage]')";
					$query_run = mysqli_query($connection,$query);

                    ?>
                    <script type="text/javascript">
                    alert("Registration Successful....You May Login Now");
                    window.location.href="index.php";
                    </script>

                    <?php
				}
               
			?>

         
            

          </div>
          
      
      <div class="wid-50B">
          <h2 class="wid-50B-h2">
              <span class="wid-50B-span">Connect</span>
          </h2>

          <p class="wid-50B-p1">
          For support, or any questions: <br> Email us at : 

          <a href="pawantiwari12344@gmail.com" class="wid-50B-p1-a" target="blank" >
          <span class="wid-50B-p1-span">pawantiwari12344@gmail.com</span>
          </a>
          </p>

          <p class="wid-50B-p2">
          WhatsApp us at:

          <a href="https://api.whatsapp.com/send?phone=+919352573913" class="wid-50B-p2-a" target="blank" >
          <span class="wid-50B-p2-span">+919352573913</span>
          </a>
          </p>

          <a href="https://www.facebook.com/google.com/" target="blank" class="wid-50B-p2-a" >
              <img src="facebook.png" class="wid-50B-p2-a-img" alt="pasto facebook">
          </a>

          <a href="https://www.instagram.com/google.com/" target="blank" class="wid-50B-p2-a" >
              <img src="instagram.png" class="wid-50B-p2-a-img" alt="pasto facebook">
          </a>

          <h2 class="wid-50B-h2">
              <span class="wid-50B-span">Jaipur</span>
          </h2>

          <p class="wid-50B-p1">
          Gurijiya Gutta, East of NGEF <br> Layout, Bennigana Halli, <br> Bengaluru, Karnataka - 560043
          </p>
      </div>
  </div>





    <div class="slider">


        <iframe width="100%" height="700" src="https://www.youtube.com/embed/35npVaFGHMY?controls=0"></iframe>
        <!-- <iframe width="100%" height="700" src="https://www.youtube.com/embed/tgbNymZ7vqY?controls=0"> -->
        </iframe>


    </div>

    <section class="S2">
        <div class="P1">
            <h1> <u> For More Enqury </u> </h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis voluptates suscipit ducimus, unde
                cum
                sapiente! Praesentium expedita, in corporis quia itaque incidunt nihil cum eaque unde aperiam?</p>
        </div>
        <div class="btn-1">
            <button class="btn-1">Click Now</button>
        </div>

        <!-- style="text-align: center; color: yellow; font-size: 3rem; font-weight: bold; padding-bottom: 62px;" -->

    </section>


    <div class="slider">

        <img src="img_1.jpg" id="slideimage" alt="">
    </div>

    <script>
        function First() {
            document.getElementById("slideimage").src = "img_2.jpg";
        }
        function Second() {
            document.getElementById("slideimage").src = "img_3.jpg";
        }
        function Therd() {
            document.getElementById("slideimage").src = "img_1.jpg";
        }
        setInterval(First, 2000)
        setInterval(Second, 4000)
        setInterval(Therd, 6000)
    </script>

    </main>

    <footer>
        <div class="f-1">
            <p>© 2022 Site Builder Report <br>Thanks For Chossing Us You will naver dispointed by us.</p>
            <p></p>

        </div>
        <!-- <div class="f-2">

    <p>Thanks For Chossing Us You will naver dispointed by us.</p>

  </div> -->

    </footer>
</body>

</html>

