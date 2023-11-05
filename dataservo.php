<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylish.css">
    <link rel = "icon" href = "public/images/half-sun-svgrepo-com.ico" type = "image/x-icon">
    <title>Sunny Smart Farm</title>
    <head>
    <style>
        .data-box {
         width: 50%; /* กำหนดความกว้างของกล่องข้อความ */
         float: right; /* จัดวางทางขวา */
         padding: 10px; /* เพิ่ม padding เพื่อให้ข้อความไม่ติดขอบ */
         border: 1px solid transparent; /* เส้นขอบของกล่องข้อความ */
    }
    .data-box h1 {
         color: rgb(0, 0, 0); /* สีของข้อความ */
         margin: 0; /* กำหนด margin เพื่อให้ไม่มีระยะห่างข้างนอกของ h1 */
    }
    .image-container {
         float: left; /* จัดวางรูปทางซ้าย */
         margin-right: 3px; /* เพิ่มระยะห่างระหว่างรูปและข้อความ */
    }
    
    </style>
    <style>
        .text-box {
         width: 50%; /* กำหนดความกว้างของกล่องข้อความ */
         float: right; /* จัดวางทางขวา */
         padding: 10px; /* เพิ่ม padding เพื่อให้ข้อความไม่ติดขอบ */
         border: 1px solid transparent; /* เส้นขอบของกล่องข้อความ */
    }
    .text-box h1 {
         color: rgb(0, 0, 0); /* สีของข้อความ */
         margin: 0; /* กำหนด margin เพื่อให้ไม่มีระยะห่างข้างนอกของ h1 */
    }
    .image-container {
         float: left; /* จัดวางรูปทางซ้าย */
         margin-right: 3px; /* เพิ่มระยะห่างระหว่างรูปและข้อความ */
    }
    </style>
    <style>
    .diagam-box {
       width: 50%; /* กำหนดความกว้างของกล่องข้อความ */
       float: right; /* จัดวางทางขวา */
       padding: 10px; /* เพิ่ม padding เพื่อให้ข้อความไม่ติดขอบ */
       border: 1px solid transparent; /* เส้นขอบของกล่องข้อความ */
    }
    .diagam-box h1 {
       color: rgb(0, 0, 0); /* สีของข้อความ */
       margin: 0; /* กำหนด margin เพื่อให้ไม่มีระยะห่างข้างนอกของ h1 */
    }
    .image-container {
       float: left; /* จัดวางรูปทางซ้าย */
       margin-right: 3px; /* เพิ่มระยะห่างระหว่างรูปและข้อความ */
    }

</style>
<style>
    .link-box {
     width: 10%; /* กำหนดความกว้างของกล่องข้อความ */
    height: 10%;
     float: right; /* จัดวางทางขวา */
     padding: 10px; /* เพิ่ม padding เพื่อให้ข้อความไม่ติดขอบ */
     border: 1px solid transparent; /* เส้นขอบของกล่องข้อความ */
    }
    .link-box h1 {
     color: rgb(0, 0, 0); /* สีของข้อความ */
     margin: 0; /* กำหนด margin เพื่อให้ไม่มีระยะห่างข้างนอกของ h1 */
    }
    .image-container {
     float: left; /* จัดวางรูปทางซ้าย */
     margin-right: 3px; /* เพิ่มระยะห่างระหว่างรูปและข้อความ */
    }
</style>
    </head>
    
</head>
<body>
<div class="crown">
    <div id="crownLogo">
        <svg xmlns="http://www.w3.org/2000/svg" width="4vw" height="4vw" fill="currentColor" class="bi bi-brightness-alt-high" viewBox="0 0 16 16" padding="1vw" style="filter: drop-shadow(10px 5px 4px #5a554b);">
            <path d="M8 3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 3zm8 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zm-13.5.5a.5.5 0 0 0 0-1h-2a.5.5 0 0 0 0 1h2zm11.157-6.157a.5.5 0 0 1 0 .707l-1.414 1.414a.5.5 0 1 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm-9.9 2.121a.5.5 0 0 0 .707-.707L3.05 5.343a.5.5 0 1 0-.707.707l1.414 1.414zM8 7a4 4 0 0 0-4 4 .5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5 4 4 0 0 0-4-4zm0 1a3 3 0 0 1 2.959 2.5H5.04A3 3 0 0 1 8 8z"/>
        </svg>
        <h1>Sunny smart farm</h1>
    </div>
    <div id="crownPages">
    <a href="index.php" id="whitePages">Home</a>
    <a href="dashboard.php" id="whitePages">SmartFarm IOT Dashboard</a>
    <a href="store.php" id="whitePages">Store</a>
    <a href="article.php" id="whitePages">Article</a>
    <svg id="whitePages"
        width="24px"
        height="24px"
        viewBox="0 0 24 24"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
    >
        <path
        fill-rule="evenodd"
        clip-rule="evenodd"
        d="M5.79166 2H1V4H4.2184L6.9872 16.6776H7V17H20V16.7519L22.1932 7.09095L22.5308 6H6.6552L6.08485 3.38852L5.79166 2ZM19.9869 8H7.092L8.62081 15H18.3978L19.9869 8Z"
        fill="currentColor"
        />
        <path
        d="M10 22C11.1046 22 12 21.1046 12 20C12 18.8954 11.1046 18 10 18C8.89543 18 8 18.8954 8 20C8 21.1046 8.89543 22 10 22Z"
        fill="currentColor"
        />
        <path
        d="M19 20C19 21.1046 18.1046 22 17 22C15.8954 22 15 21.1046 15 20C15 18.8954 15.8954 18 17 18C18.1046 18 19 18.8954 19 20Z"
        fill="currentColor"
        />
    </svg>
    <a href="login.php" id="login">
            <?php if(isset($_SESSION['username'])) : ?>
               <strong><?php echo $_SESSION['username']; ?></strong><a href="regis/logout.php" id="login" style = "color: red;">Logout</a>
            <?php else: ?>
                <h3>Login</h3>
            <?php endif ?>
    </a>


</div>
</div>
    <div class="headBanner">
        <svg xmlns="http://www.w3.org/2000/svg" width="20%" height="20%" fill="currentColor" class="bi bi-brightness-alt-high" viewBox="0 0 16 16" padding="1vw" id="textShade"style="filter: drop-shadow(10px 5px 4px #5a554b);">
            <path d="M8 3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 3zm8 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zm-13.5.5a.5.5 0 0 0 0-1h-2a.5.5 0 0 0 0 1h2zm11.157-6.157a.5.5 0 0 1 0 .707l-1.414 1.414a.5.5 0 1 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm-9.9 2.121a.5.5 0 0 0 .707-.707L3.05 5.343a.5.5 0 1 0-.707.707l1.414 1.414zM8 7a4 4 0 0 0-4 4 .5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5 4 4 0 0 0-4-4zm0 1a3 3 0 0 1 2.959 2.5H5.04A3 3 0 0 1 8 8z"/>
        </svg>
        <h1 id="textShade">Sunny smart farm official store</h1>
    </div>
    <div class="stuff">
        <a href="storeboard.php" id="whitePages">
            <h1 style="background-color: limegreen;border-radius: 10px;color: white;border-spacing: 10px;">บอร์ดควบคุม (5) </h1></a>
    <a href="store.php" id="whitePages">
        <h1 style="background-color: limegreen;border-radius: 10px;color: white;border-spacing: 10px;">อุปกรณ์IOT/Module (15) </h1>
    </a>
    </div>
    <hr>
    <div class="stuff">
    <div class="dataitem">
        <h1 style="color: rgb(0, 0, 0); text-align: center;"style="font-size: 90px">Relay 4 Slot</h1>
        <pre>
        <div class="image-container">
            <img src="public/images/sensors/servo.jpg" alt="Image Description"width="400" height="400" 
            style="margin-left: 80%; margin-top: 70px; position: relative; top: 110px;left: -50%">
            <div class="text-box">
            <h1 style="color: rgb(0, 0, 0);">
                <!-- รายละเอียดของ DHT11 อยู่ที่นี่ -->
            </h1>
        </div>
        <div id="buybut"style="margin-left: 80%; margin-top: 30px; position: relative; top: 40px;left: -20%">
            <h1 id="center2" >เพิ่มลงรถเข็น</h1>
        </div>
        </div>
        <div class="data-box">
            <h1 style="color: rgb(0, 0, 0);">
                Servo คืออุปกรณ์มอเตอร์ ที่สามารถควบคุมการหมุนที่แม่นยำ เซอร์โวชุดนี้มีขนาดเล็กแรงบิด 1.2-1.4 kg สามารถหมุน แบบต่อเนื่อง 360 องศาไปกลับได้
        KG/cm สีน้ำตาลเป็นสายกราวด์ สีแดงเป็นไฟเข้า 4.8-7.2V สีส้มเป็นสัญญาณอินพุต 
        ขนาด 21.5mmx11.8mmx22.7mm
        - น้ำหนัก 9 กรัม
        - ความเร็วเมื่อไม่มีโหลด 0.12 วินาที/ุ60องศา (4.8V)
        - แรงบิด 1.2-1.4 kg/cm (4.8V)
        - ทำงานที่อุณหภูมิ -30-60 องศาเซลเซียส
        - 7 มิลลิวินาที
        - 4.8V - 6V
                <div class="link-box" style="margin-left: 10%; margin-top: 30px; position: relative; top:10px; left: -80%">
                    <div class="link-box" style="margin-left: 10%; margin-top: 30px; position: relative; top: -50px; left: -70%">
                        <a href="https://www.cybertice.com/product/935/sg90-micro-servo-motor-%E0%B9%81%E0%B8%9A%E0%B8%9A-%E0%B8%AB%E0%B8%A1%E0%B8%B8%E0%B8%99360%E0%B8%AD%E0%B8%87%E0%B8%A8%E0%B8%B2%E0%B8%95%E0%B9%88%E0%B8%AD%E0%B9%80%E0%B8%99%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%87" style="color: rgb(0, 0, 0); ">
                            <h3> ตัวอย่างการต่อวงจรและเขียนโปรแกรม</h3>
                            <div class="data-box" style="margin-left: 10%; margin-top: -30px; position: relative; top: 30px; left: -70%">
                        </div>
                        <div class="data-box">
                            <h4 style="color: rgb(0, 0, 0);">
                                ตัวอย่างโค้ดการควบคุม   
            #include <Servo.h> 
                Servo myservo;   
                void setup() 
                { 
                  myservo.attach(9); 
                } 
                void loop() 
                {       myservo.write(0); 
                        delay(1000);      
                        myservo.write(90); 
                        delay(1000);      
                        myservo.write(180); 
                        delay(1000);                     
                
                }               
                        <img src="public\images\sensors\servocer.png" alt="Image Description"width="600" height="600" 
                                    style="margin-left: 10%; margin-top: 70px; position: relative; top: 110px;left: -50%">
                </div>
                        </div>

    </div>
    
    
    


    <div class="loginForm" >
    <form action="login.php">
        <h1>Login</h1>
        <input type="text" name="Username" placeholder="Username" required>
        <input type="text" name="Username" placeholder="Password" required>
        <div style="display: flex;flex-direction: row; padding: 10px;">
            <input type="checkbox" id="remember" label="Remember password?">
            <label for="remember">Remember password</label>
        </div>
            <input type="submit" title="submit">
        <h2 style="padding-top: 20px;">dont have an account? <a onclick="switcher()">Register</a></h2>
        <h4 onclick="closeAll()">close page</h4>
    </form>
</div>
<div class="regForm">
    <form action="#">
        <h1>Register</h1>
        <input type="text" name="Username" placeholder="Username" required>
        <input type="text" name="password" placeholder="Password" required>
        <input type="email" name="email" placeholder="Email" required>
        
            <input type="submit" title="submit">
        <h2 style="padding-top: 20px;">already have an account? <a onclick="switcher()">Login</a></h2>
        <h4 onclick="closeAll()">close page</h4>
    </form>
</div>
</body>
<script src="mario.js"></script>
</html>