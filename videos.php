   









    <html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="author" content="Amardeep Kesharwani" />
<title>UnLink Video</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.5/fullpage.min.css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>






    <body>











        <div id="contain" style="display:none">
<main id="fullpage">


<?php



    include 'pag/conn2.php';




include 'conn.php';



 $conexion = mysqli_connect("$hot", "$user", "$cla", "$db") or
    die("Problemas con la conexión");

  
  $registros = mysqli_query($conexion, "select codigo,url,video,titulo
                        from comunidad") or
    die("Problemas en el select:" . mysqli_error($conexion));

  while ($reg = mysqli_fetch_array($registros)) {


$correo = $reg['codigo']; 


$url = $reg['url']; 

$video = $reg['video']; 


$url = $reg['url']; 



}



?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.5/fullpage.min.js"></script>

























<script>
const videos = [
 {
  id:1,
  src:"https://statusvideoplus.com/wp-content/uploads/2020/05/Se-Preparo-Spanish-Whatsapp-Status-Video.mp4",
  tags:"#trending #song #pooja_movie #indian #bestvideo",
  like:"2.2k",
  share:"208",
  comments:[ 
  "my favorite song ”9ý9", "awesome video", 
  ]
 },
 {
  id:2,
  src:"https://statusvideoplus.com/wp-content/uploads/2020/05/Subeme-La-Radio-Spanish-WhatsApp-Status-Video.mp4",
  tags:"#funny #trending #entertainment #indian",
  like:"5.5k",
  share:"2.2k",
  comments:[ 
  "nice video", "awesome video", "fantastic video bro"
  ]
 },
 {
  id:3,
  src:"https://statusvideoplus.com/wp-content/uploads/2020/05/Dura-Feat-Daddy-Yankee-Spanish-WhatsApp-Status-Video.mp4",
  tags:"#sad #mehrama #song #trending #kartik",
  like:"5.1k",
  share:"2k",
  comments:[ 
  "i love this song", "nyccc song","wow nice song", 
  ]
 },
 {
 id:4,
 src:"https://statusvideoplus.com/wp-content/uploads/2020/02/best-tik-tok-video-status-download.mp4",
 tags:"#popular #trending #funny #best",
 like:"1.2k",
 share:"180",
 comments:[ 
 "nyccc video", "awesome code bro"
 ]
 },
 {
  id:5,
  src:"videos/chavo.mp4",
  tags:"#IIT #funny #comedy #popular",
  like:"6.2k",
  share:"3k",
  comments:[ 
  "suppperr video", "nice dialogue", "best video bro"
  ]
 },
 {
  id:6,
  src:"videos/lameta.mp4",
  tags:"#trending #popular #comedy #Indian",
  like:"4.7k",
  share:"3.2k",
  comments:[ 
  "so entertaining video", "nice dialogue", "very funny"
  ]
 },
 {
  id:7,
  src:"https://www.videostatusmarket.com/download/3552/funny_video?v=aHR0cHM6Ly93d3cudmlkZW9zdGF0dXNtYXJrZXQuY29tL2Z1bGxzY3JlZW52aWRlb3N0YXR1cy9mdW5ueXZpZGVvX21haW4vZGVlcGFuc2hpMjM0NTY3XzkxNzY3NDIxN18xX3pncW4ubXA0",
  tags:"#trending #popular #comedy #Indian",
  like:"2.1k",
  share:"208",
  comments:[ 
  "entertaining video", "very funny"
  ]
 },
 {
 id:8,
 src:"https://www.videostatusmarket.com/download/3104/funny_video?v=aHR0cHM6Ly93d3cudmlkZW9zdGF0dXNtYXJrZXQuY29tL2Z1bGxzY3JlZW52aWRlb3N0YXR1cy9mdW5ueXZpZGVvX21haW4vamF5YW50NTc1M18xNjU2NDIyNTEwX3NxNDEubXA0",
 tags:"#trending #comedy #Indian",
 like:"4.2k",
 share:"2.8k",
 comments:[ 
 "nice", "very funny"
 ]
 },
 {
 id:9,
 src:"https://www.videostatusmarket.com/download/267/funny_video?v=aHR0cHM6Ly93d3cudmlkZW9zdGF0dXNtYXJrZXQuY29tL2Z1bGxzY3JlZW52aWRlb3N0YXR1cy9mdW5ueXZpZGVvX21haW4vc29uYWwxMjA2XzE1Mzk2OTIwOTM0MDEubXA0",
 tags:"#garmi #pani #popular #comedy",
 like:"3.6k",
 share:"1.3k",
 comments:[ 
 "very funny", "haay Garmi"
 ]
 },
]




 
 
 function setVideo() {
  videos.forEach(video => addVideo(video));
 }
 setVideo();
 function addVideo(video) {
  let html = `
    <section class="section" >
    <video 
    poster="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSqt20cYMVm4M0tgvo0DElv-75c84oTS7Re9A&usqp=CAU" 
    src="${video.src}"    
    controls  data-autoplay=1
    >
    </video>
  

    <div class="action">
    <a href="https://www.sololearn.com/Profile/9151475/?ref=app" class="follow-btn" >
    <img src="img/logo.jpg"></a>
     <button class="like" ><i class="material-icons" >favorite</i>${video.like}</button>
     <button class="comment" data-id="${video.id}"><i class="material-icons" >textsms</i>${video.comments.length}k</button>
     <button class="share" ><i class="material-icons" >reply</i>${video.share}</button>
    </div>
    <div class="user-info" >
    <span>@Josmig.unlink</span>
    <p>${video.tags}</p>
    </div>
    <div class="song" ><img src="img/logo.jpg"></div>
    </section>
  `;
  $("#fullpage").append(html)
 }
 
 
 new fullpage('#fullpage',{
 autoScrolling:true,
 autoplay:true,
 navigation:false,
 scrollingSpeed:1000,
 });
 
</script>










<style type="text/css">
/* Created by Amardeep kesharwani */

:root {
 --red:#f44559;
}
*{
margin:0;
padding:0;
box-sizing:border-box;
}
body {
font-family:sans-serif;
font-weight:400;
line-height:1.5;
font-size:1rem;
background:#000;
color:#fff;
}
img{
 max-width:100%;
}
button {
 display:inline-block;
 outline:none;
 border:none;
 background:none;
 transition:300ms;
 color:#fff;
 cursor:pointer;
}
#fullpage {
 max-width:420px;
 margin:auto;
}
 video {
  width:100%;
 }
 .section {
  position:relative;
  background:#000;
  padding-bottom:50px;
  overflow:hidden;
  text-align:center;
 }
 .section video {
  position: absolute;
  right: 0;
  bottom: 0;
  top:0;
  right:0;
  width: 100%;
  height: 100%;
  background-size: 100% 100%;
  background: #000;
  background-position: center center;
  background-size: contain;
  object-fit: cover; 
  z-index:1;
 }
 .action {
   position:absolute;
   top:50%;
   transform:translateY(-60%);
   right:0;
   z-index:2;
  }
  .follow-btn {
   display:block;
   height:55px;
   width:55px;
   border-radius:50%;
   border:1px solid #fff;
   overflow:hidden;
   transform:translateX(10px);
  }
  .action button {
   display:block;
   padding:8px;
   margin:15px 5px;
   display:flex;
   flex-direction: column;
   align-items: center;
   justify-content: center;
  }
  .action .material-icons {
   font-size:3rem;
   transition:300ms ease;
  }
  .like.liked > i{
   color:var(--red);
   animation:zoomIn 600ms ease;
  }
  @keyframes zoomIn {
   0%, 100%{
    transform:scale(1);
   }
   50% {
    transform:scale(1.6);
   }
  }
  .follow-top {
   position:absolute;
   left:50%;
   transform:translateX(-50%);
   display:flex;
   align-items: center;
   top:25px;
   color:rgba(255,255,255,0.7);
   font-weight:500;
   z-index:2;
  }
  .follow-top span {
    display:inline-block;
    width:1px;
    height:6px;
    background:rgba(255,255,255,0.7);
    margin:0 10px;
   }
   .follow-top p:nth-child(1){
     color:#fff;
   } 
   .user-info {
    position:absolute;
    bottom:100px;
    left:15px;
    width:160px;
    z-index:4;
    text-align:left;
   }
   .song {
    position:absolute;
    bottom:120px;
    right:12px;
    height:60px;
    width:60px;
    background:#262626;
    border-radius:50%;
    overflow:hidden;
    z-index:4;
    display:flex;
    justify-content: center;
    align-items: center;
    animation:spin 3s linear infinite;
   }
   @keyframes spin {
    to{
     transform:rotate(360deg);
    }
   }
   .song img {
    height:35px;
    width:35px;
    border-radius:50%;
   }
   
   footer {
    position:fixed;
    width:100%;
    max-width:420px;
    transform:translateX(-50%);
    height:54px;
    bottom:0;
    left:50%;
    z-index:8;
    background:#000;
    border-top:1px solid #555;
    display:flex;
    padding:5px ;
   }
   footer button {
    flex:1;
    padding:0 5px;
    color:#a6a6a6;
   }
   footer button:hover {
    color:#fff;
   }
   footer button.active {
    color:#fff;
   }
   footer button .material-icons {
    font-size:28px;
   }
   .material-icons.fs-4 {
    font-size:35px;
   }
   .comment-box {
    position:fixed;
    width:100%;
    max-width:420px;
    transform:translate(-50%,100%);
    height:65%;
    bottom:0;
    left:50%;
    z-index:9;
    background:#fff;
    border-top-left-radius:15px;
    border-top-right-radius:15px;
    transition:300ms ease;
    color:#555;
    padding:5px 10px;
    overflow:scroll;
    transform-origin: bottom;
   }
   
   .comment-box.active {
    transform:translate(-50%,0%);
   }
   .com-header {
    display:flex;
    justify-content: space-between;
    padding:5px;
   } 
   .com-header .close {
    color:#555;
    cursor:pointer;
   }
   .com-list {
    padding:25px 0;
    height:100%;
    overflow:scroll; 
   }
   

   .com-content span {
     color:#777;
   }
   .com-content button {
    position:absolute;
    right:5px;
    top:5px;
    color:#333;
   }
   
   .form-group {
    width:100%;
    display:flex;
    align-items: center;
    padding:0 10px;
    box-shadow:0 0 5px rgba(0,0,0,0.1);
    margin-top:10px;
   }
   .form-group input {
    flex:1;
    outline:none;
    border:none;
    height:40px;
   }
   .form-group button {
    color:#333;
    width:35px;
   }
   
   
   .sec {
    position:fixed;
    top:0;
    left:0;
    bottom:0;
    width:100%;
    height:100vh;
    background:#000;
    z-index:10;
    display:flex;
    justify-content: center;
    overflow:auto;
   }
   .sec .wrap {
    width:100%;
    max-width:420px;
    text-align:center;
    padding:40px 20px 20px;
   }
   .sec1 svg {
    animation:fadeIn 500ms ease 0.2s;
    animation-fill-mode:both;
   }
   .title {
     font-size:3rem;
     margin-top:50px;
     animation:fadeIn 500ms ease 1s;
     animation-fill-mode:both;
   }
   .title span {
    color:#ff9100;
   }
   .wrap p {
    font-weight:300;
    animation:fadeIn 500ms ease 1.5s;
    animation-fill-mode:both;
   }
   .wrap button {
    padding:10px 25px;
    background:#ff9100;
    border-radius:20px;
    margin:20px;
    font-size:16px;
    animation:fadeIn 500ms ease 2s;
    animation-fill-mode:both;
   }
   @keyframes fadeIn {
    0% {
     opacity:0;
     transform:translateY(40px);
    }
    100%{
    opacity:1;
    transform:translateY(0px);
    }
   }
    .sec2 {
     z-index:9;
    }
   .sec2 .wrap {
    padding-top:10px;
   }
   .sec2 .title {
    margin-top:-20px;
    margin-bottom:15px;
   }
   .tags span {
    display:inline-block;
    padding:6px 12px;
    border-radius:20px;
    border:1px solid #666;
    margin:5px;
    font-size:14px;
    background:#333;
    transition:300ms ease;
   }
   .tags span.select {
    background:var(--red); 
    border-color:#fff;
   }



</style>













        </div>
        <div id="loadingMessage" style="display:none">
            <h2>Cargando...</h2>
        </div>
        <script type="text/javascript">
    var obj_contain = document.getElementById('contain');
    var obj_loadingMessage = document.getElementById('loadingMessage'); 
    function loading()
    {
        var images = document.images;
        for (var i = 0; i<images.length; i++) {
            var image = images[i];
            if (image.complete) {
                if ((i+1)==images.length) {
                    obj_loadingMessage.style.display = 'none';
                    obj_contain.style.display = 'block';
                }
            } else {
                setTimeout(loading, 5000);
                return false;
            }
        }
    }
    obj_contain.style.display = 'none';
    obj_loadingMessage.style.display = 'block';
    loading();
        </script>



    </body>
    </html>
