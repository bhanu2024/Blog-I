<?php  include 'nav.php' ?>

<style>
    *{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}
body{
    font-family: 'Playfair Display', serif;
    display: grid;
    /*background-color: #4158D0;*/
/*background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);*/

    align-content: center;
    min-height: 100vh;
}
section{
    display: grid;
    grid-template-columns: 1fr 1fr;
    min-height: 70vh;
    width: 75vw;
    margin: 0 auto;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 12px
}
.image{
    background-color: #12192c;
    display: flex;
    border-radius: 12px 0 0 12px;
}
.image img{
height:50vh;
margin:50px auto
}
.content{
    background-color: #12192c;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    border-radius: 0  12px 12px 0;
    color: #fff;
}
.content h2{
    text-transform: uppercase;
    font-size: 36px;
    letter-spacing: 6px;
    opacity: 0.9;
}
.content span{
    height: 0.5px;
    width: 80px;
    background: #777;
    margin: 30px 0;
}
.content p{
    padding-bottom: 15px;
    font-weight: 300;
    opacity: 0.7;
    width: 60%;
    text-align: center;
    margin: 0 auto;
    line-height: 1.7;
    color:#ffffff
}
.links{
    margin: 15px 0;
}
.links li{
    border: 2px solid #4158D0;
    list-style: none;
    border-radius: 5px;
    padding: 10px 15px;
    width: 160px;
    text-align: center;
}
.links li a{
    text-transform: uppercase;
    color: #fff;
    text-decoration: none;
}
.links li:hover{
    border-color: #C850C0;
}

.vertical-line{
    height: 30px;
    width: 3px;
    background: #C850C0;
    margin: 0 auto;
}
.icons{
    display: flex;
    padding: 15px 0;
}
.icons li{
    display: block;
    padding: 5px;
    margin: 5px;
}
.icons li i{
    font-size: 26px;
    opacity: 0.8;
}
.icons li i:hover{
    color: #C850C0;
    cursor: pointer;
}


/*****************/

@media(max-width: 900px){
    section{
        grid-template-columns: 1fr;
        width: 100%;
        border-radius: none;
    }
    .image{
        height: 100vh;
        border-radius: none;
    }
    .content{
        height: 100vh;
        border-radius: none;
    }
    .content h2{
        font-size: 20px;
        margin-top: 50px;
    }
    .content span{
        margin: 20px 0;
    }
    .content p{
        font-size: 14px;
    }
    .links li a{
        font-size: 14px;
    }
    .links{
        margin: 5px 0;
    }
    .links li{
        padding: 6px 10px;
    }
    .icons li i{
        font-size: 15px;
    }
}


</style>

<br>
<br>
<br>
<br>

<section class="about" id="about">
    <div class = "image">
       <img src="https://cdn.pixabay.com/photo/2017/08/26/23/37/business-2684758__340.png" 
       alt="images/mine.png">
    </div>

    <div class = "content">
        <h2>About Us</h2>
        <span><!-- line here --></span>
        <p>My name is Bhanu! I'm a Programmer with a passion for Everything. I started Blog&I with the idea. If you are like me then you like to be as productive as possible. Don't worry I've got you covered!If there is anything you need, I'll be happy to help if I can.</p>
        <ul class = "links">
            <li><a href = "blog.php">Blog</a></li>
        </ul>
        <ul class = "icons">
            <li>
                <i class = "fa fa-twitter"></i>
            </li>
            <li>
                <i class = "fa fa-facebook"></i>
            </li>
            <li>
                <i class = "fa fa-github"></i>
            </li>
            <li>
                <i class = "fa fa-pinterest"></i>
            </li>
        </ul>
    </div>
</section>

<br><br>

<?php  include 'footer.php' ?>