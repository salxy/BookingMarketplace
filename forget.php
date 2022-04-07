<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC ″-//w3c//DTD XHTML 1.1//EN″ “http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd”>
<html xmlns = ″http://www.w3.org/1999/xhtml″>

<head>
    <title> El Bet Baytak | Forgotten Password</title>
    <link rel="stylesheet" type="text/css" href="styleSheet.css"/>

    <script type="text/javascript">

        function highlight(){
            x = document.getElementById("high").style;
            x.border = "2px dashed red";
            x.marginBottom = "0";
            x.float = "left";
    }

        function undoHighlight(){
            x = document.getElementById("high").style;
            x.borderStyle = "none";
    }
    function changeLoc(x){
        if(x == "1"){
            location.href =  "login.php";
        }else if (x == "2"){
            location.href =  "form.php";
        }

    }
    </script>
</head>
<body class="page1">
    <div class="bbar"> 
    <header>
    <p class="tit"> El Bet Baytak </p>
    <ul class="bar"> 
        <li><a href="page1.html"> Home</a></li>
        <li><a href="#bottom" onclick="highlight(), setTimeout(undoHighlight, 3000);"> Contact Us</a></li>
        <li><a href="#"> Account</a>
            <div class="con">
                <ul class="bar"> <li id="loc1" onclick="changeLoc(1);"> Login</li>
                    <li id="loc1" onclick="changeLoc(2);"> SignUp</li>
                </ul>
        </div>
    </li>
     </ul>

</header>
</div>
<form action="checkForget.php" method="post">
    <div class="acc">
       <a href="login.php"> <img src="x.png" style="width:25px; height:25px; float: right; padding-top: 2px; padding-right: 2px;" /></a>
    <p class="log"> El Bet Baytak </p>
    <div class="acc2">
    <p class="enter"> Please enter your e-mail to reset your password: </p> <br/>
    <input class="i2" type="email" placeholder="📧 E-mail" size="30" name="email" required/>
    <br/><br/>

    <div class="al">
   <input  type="submit" value="Reset Password" size="30" class="l2" /> 
    </div>
    
</div>
</div>
</form>

<div class="fixedNav">
    <div id="high">
    <a href="https://www.facebook.com/elbet.baytak/" class="socials" target="_blank">
        <img src="facebook.png" style="width:30px; height:30px;"/>
    </a>
    <a href="https://www.instagram.com/elbet_baytak/" class="socials" target="_blank">
        <img src="instagram.png" style="width:30px; height:30px;"/>
    </a>
    <a href="https://twitter.com/ElBaytak" class="socials" target="_blank">
        <img src="twitter.png" style="width:40px; height:35px;"/>
    </a>
</div>
    <div class="bottomNav" style="height:30px;" id="bottom">
    
    El Bet Baytak 2021&trade; &emsp;&emsp;&emsp;
    <a href="privacy.html" class="open">Privacy Policy</a> &emsp;&emsp;&emsp;
    <a href="terms.html" class="open">Terms &amp; Conditions</a> 


    <a href="#" class="extra">
        <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" style="display:inline-block;height:13px;width:13px;fill:currentColor" aria-hidden="true" role="presentation" focusable="false"><path d="m8.002.25a7.77 7.77 0 0 1 7.748 7.776 
        7.75 7.75 0 0 1 -7.521 7.72l-.246.004a7.75 
        7.75 0 0 1 -7.73-7.513l-.003-.245a7.75 7.75 0 0 1 7.752-7.742zm1.949 
        8.5h-3.903c.155 2.897 1.176 5.343 1.886 5.493l.068.007c.68-.002 1.72-2.365 
        1.932-5.23zm4.255 0h-2.752c-.091 1.96-.53 3.783-1.188 5.076a6.257 6.257 0 0 0 
        3.905-4.829zm-9.661 0h-2.75a6.257 6.257 0 0 0 3.934 5.075c-.615-1.208-1.036-2.875-1.162-4.686l-.022-.39zm1.188-6.576-.115.046a6.257 
        6.257 0 0 0 -3.823 5.03h2.75c.085-1.83.471-3.54 1.059-4.81zm2.262-.424c-.702.002-1.784 2.512-1.947 5.5h3.904c-.156-2.903-1.178-5.343-1.892-5.494l-.065-.007zm2.28.432.023.05c.643 1.288 
        1.069 3.084 1.157 5.018h2.748a6.275 6.275 0 0 0 -3.929-5.068z" /></svg>English(US)</a>
    <a href="#" class="extra">$USD</a>

</div>
</div>
</body>
</html>