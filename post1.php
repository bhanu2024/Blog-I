 <?php include 'nav.php' ?> 



 <style>
 	

body {
  font-size: 20px;
  color: #212529;
  font-family: 'Lora', 'Times New Roman', serif;
}

p {
  line-height: 1.5;
  margin: 30px 0;
}

p a {
  text-decoration: underline;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-weight: 800;
  font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
}

a {
  color: #212529;
  transition: all 0.2s;
}

a:focus, a:hover {
  color: #0085A1;
}

blockquote {
  font-style: italic;
  color: #868e96;
}

.section-heading {
  font-size: 36px;
  font-weight: 700;
  margin-top: 60px;
}

.caption {
  font-size: 14px;
  font-style: italic;
  display: block;
  margin: 0;
  padding: 10px;
  text-align: center;
  border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
}
content p {
    font-style: italic;
    color:red;
}

::-moz-selection {
  color: #fff;
  background: #0085A1;
  text-shadow: none;
}

::selection {
  color: #fff;
  background: #0085A1;
  text-shadow: none;
}

img::-moz-selection {
  color: #fff;
  background: transparent;
}

img::selection {
  color: #fff;
  background: transparent;
}

img::-moz-selection {
  color: #fff;
  background: transparent;
}
.comment {
    padding-top: 20px;
}
.detailBox {
    width:320px;
    border:1px solid #bbb;
    margin:50px;
}
.titleBox {
    background-color:#fdfdfd;
    padding:10px;
}
.titleBox label{
  color:#444;
  margin:0;
  display:inline-block;
}

.commentBox {
    padding:10px;
    border-top:1px dotted #bbb;
}
.commentBox .form-group:first-child, .actionBox .form-group:first-child {
    width:80%;
}
.commentBox .form-group:nth-child(2), .actionBox .form-group:nth-child(2) {
    width:18%;
}
.actionBox .form-group * {
    width:100%;
}
.taskDescription {
    margin-top:10px 0;
}
.commentList {
    padding:0;
    list-style:none;
    max-height:200px;
    overflow:auto;
}
.commentList li {
    margin:0;
    margin-top:10px;
}
.commentList li > div {
    display:table-cell;
}
.commenterImage {
    width:30px;
    margin-right:5px;
    height:100%;
    float:left;
}
.commenterImage img {
    width:100%;
    border-radius:50%;
}
.commentText p {
    margin:0;
}
.sub-text {
    color:#aaa;
    font-family:verdana;
    font-size:11px;
}
.actionBox {
    border-top:1px dotted #bbb;
    padding:10px;
}


header.masthead {
  margin-bottom: 50px;
  background: no-repeat center center;
  background-color: #868e96;
  background-attachment: scroll;
  position: relative;
  background-size: cover;
}

header.masthead .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: #212529;
  opacity: 0.5;
}

header.masthead .page-heading,
header.masthead .post-heading,
header.masthead .site-heading {
  padding: 200px 0 150px;
  color: white;
}

@media only screen and (min-width: 768px) {
  header.masthead .page-heading,
  header.masthead .post-heading,
  header.masthead .site-heading {
    padding: 200px 0;
  }
}

header.masthead .page-heading,
header.masthead .site-heading {
  text-align: center;
}

header.masthead .page-heading h1,
header.masthead .site-heading h1 {
  font-size: 50px;
  margin-top: 0;
}

header.masthead .page-heading .subheading,
header.masthead .site-heading .subheading {
  font-size: 24px;
  font-weight: 300;
  line-height: 1.1;
  display: block;
  margin: 10px 0 0;
  font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
}

@media only screen and (min-width: 768px) {
  header.masthead .page-heading h1,
  header.masthead .site-heading h1 {
    font-size: 80px;
  }
}

header.masthead .post-heading h1 {
  font-size: 35px;
}

header.masthead .post-heading .meta,
header.masthead .post-heading .subheading {
  line-height: 1.1;
  display: block;
}

header.masthead .post-heading .subheading {
  font-size: 24px;
  font-weight: 600;
  margin: 10px 0 30px;
  font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
}

header.masthead .post-heading .meta {
  font-size: 20px;
  font-weight: 300;
  font-style: italic;
  font-family: 'Lora', 'Times New Roman', serif;
}

header.masthead .post-heading .meta a {
  color: #fff;
}

@media only screen and (min-width: 768px) {
  header.masthead .post-heading h1 {
    font-size: 55px;
  }
  header.masthead .post-heading .subheading {
    font-size: 30px;
  }
}

.post-preview > a {
  color: #212529;
}

.post-preview > a:focus, .post-preview > a:hover {
  text-decoration: none;
  color: #0085A1;
}

.post-preview > a > .post-title {
  font-size: 30px;
  margin-top: 30px;
  margin-bottom: 10px;
}

.post-preview > a > .post-subtitle {
  font-weight: 300;
  margin: 0 0 10px;
}

.post-preview > .post-meta {
  font-size: 18px;
  font-style: italic;
  margin-top: 0;
  color: #868e96;
}

.post-preview > .post-meta > a {
  text-decoration: none;
  color: #212529;
}

.post-preview > .post-meta > a:focus, .post-preview > .post-meta > a:hover {
  text-decoration: underline;
  color: #0085A1;
}

@media only screen and (min-width: 768px) {
  .post-preview > a > .post-title {
    font-size: 36px;
  }
}
.form-control {
    font-size: 1.2rem;
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}
.floating-label-form-group {
  font-size: 14px;
  position: relative;
  margin-bottom: 0;
  padding-bottom: 0.5em;
  border-bottom: 1px solid #dee2e6;
}

.floating-label-form-group input,
.floating-label-form-group textarea {
  font-size: 1.5em;
  position: relative;
  z-index: 1;
  padding: 0;
  resize: none;
  border: none;
  border-radius: 0;
  background: none;
  box-shadow: none !important;
  font-family: 'Lora', 'Times New Roman', serif;
}

.floating-label-form-group input::-webkit-input-placeholder,
.floating-label-form-group textarea::-webkit-input-placeholder {
  color: #868e96;
  font-family: 'Lora', 'Times New Roman', serif;
}

.floating-label-form-group label {
  font-size: 0.85em;
  line-height: 1.764705882em;
  position: relative;
  z-index: 0;
  top: 2em;
  display: block;
  margin: 0;
  transition: top 0.3s ease, opacity 0.3s ease;
  opacity: 0;
}

.floating-label-form-group .help-block {
  margin: 15px 0;
}

.floating-label-form-group-with-value label {
  top: 0;
  opacity: 1;
}

.floating-label-form-group-with-focus label {
  color: #0085A1;
}

form .form-group:first-child .floating-label-form-group {
  border-top: 1px solid #dee2e6;
}

/*footer {
  padding: 50px 0 65px;
}

footer .list-inline {
  margin: 0;
  padding: 0;
}

footer .copyright {
  font-size: 14px;
  margin-bottom: 0;
  text-align: center;
}*/

.btn {
  font-size: 14px;
  font-weight: 800;
  padding: 15px 25px;
  letter-spacing: 1px;
  text-transform: uppercase;
  border-radius: 0;
  font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
}

.btn-primary {
  background-color: #0085A1;
  border-color: #0085A1;
}

.btn-primary:hover, .btn-primary:focus, .btn-primary:active {
  color: #fff;
  background-color: #00657b !important;
  border-color: #00657b !important;
}

.btn-lg {
  font-size: 16px;
  padding: 25px 35px;
}



 </style>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('images/b1.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>Catcti</h1>
            <h2 class="subheading">Can't touch this.</h2>
            <span class="meta">Posted by
              <a href="about.php">Bhanu</a>
              on 14/03/2022</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            Cactus, (family Cactaceae), plural cacti or cactuses, flowering plant family (order Caryophyllales) with nearly 2,000 species and 139 genera. Cacti are native through most of the length of North and South America, from British Columbia and Alberta southward; the southernmost limit of their range extends far into Chile and Argentina. Mexico has the greatest number and variety of species. The only cacti possibly native to the Old World are members of the genus Rhipsalis, occurring in East Africa, Madagascar, and Sri Lanka.
          <hr>

            <div class="clearfix">
            <a class="btn btn-primary float-right" href="comment.php">Comment</a>
            </div>


<!--           Comments Area -->
          <div class="col-lg-8 col-md-10 mx-auto comment">
              <ul class="commentList">
                <li>

                	<?php

					$con = mysqli_connect('localhost', 'root');

					if($con){
						// echo "Connection successful!";
					}else{
						die("Not Connected");
					}

					mysqli_select_db($con, 'blog_user_data');

					$query = "SELECT * FROM comments";

					$result = mysqli_query($con, $query);

					$rowCount = mysqli_num_rows($result);

					if ($rowCount > 0) {
					    while ($row = mysqli_fetch_assoc($result)) {

					        echo "<div class='commenterImage'>";
                      		echo "<img src='https://picsum.photos/200/'>";
                    		echo "</div>";
                    		echo "<div class='commentText'>";
                      		echo "<p>{$row['comment']}</p>";
                      		echo "<span class='date sub-text'>{$row['username']}</span>";
                    		echo "</div>";

					    }
					} else {
					    echo "No Results Found.";
					}

					?>
                </li>
              </ul>
            </div>


          </div>
      </div>
    </div>
  </article>

  <hr>

  <?php include 'footer.php' ?> 