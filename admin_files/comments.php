<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location:login_admin.php");
    exit;
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> 
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<style>
span.item {
    font-size: 13px;
    text-align:center;
}
.wrapper .sidebar{
	background:#393E46;
	position: fixed;
	top: 0;
	left: 0;
	width: 225px;
	height: 100%;
	padding: 14px 0;
	transition: all 0.5s ease;
}
.wrapper .sidebar ul li a{
	display: block;
	padding: 12px 24px;
	border-bottom: 1px solid #10558d;
	color: rgb(241, 237, 237);
	font-size: 10px;
	position: relative;
}
h2{
      margin-left:60px;
  }
body {
	font-family: Arial;
	width: 1000px;
}

.comment-form-container {
	background: #F0F0F0;
	border: #e0dfdf 1px solid;
	padding: 20px;
	border-radius: 4px;
	margin-left: 515px;
	margin-top: 30px;

}

.input-row {
	margin-bottom: 20px;
}

.input-field {
	width: 100%;
	border-radius: 4px;
	padding: 10px;
	border: #e0dfdf 1px solid;
}

.btn-submit {
	padding: 10px 20px;
	background: #333;
	border: #1d1d1d 1px solid;
	color: #f0f0f0;
	font-size: 0.9em;
	width: 100px;
	border-radius: 4px;
	cursor: pointer;
}

ul {
	list-style-type: none;
	margin-left:0px;
}

.comment-row {
	border-bottom: #e0dfdf 1px solid;
	margin-bottom: 15px;
	padding: 15px;
}

.outer-comment {
	background: #F0F0F0;
	padding: 20px;
	border: #dedddd 1px solid;
	border-radius: 4px;
	margin-left: 415px;
		margin-top: 10px;
	width: 700px;
}

span.comment-row-label {
	color: #484848;
}

span.posted-by {
	font-weight: bold;
}

.comment-info {
	font-size: 0.9em;
	padding: 0 0 10px 0;
}

.comment-text {
	margin: 10px 0px 30px 0;
}

.btn-reply {
	color: #2f20d1;
	cursor: pointer;
	text-decoration: none;
}

.btn-reply:hover {
	text-decoration: underline;
}

#comment-message {
	margin-left: 20px;
	color: #005e00;
	display: none;
}

.label {
	padding: 0 0 4px 0;
}
.listt{
    margin-left:0px;
}
.wrapper .sidebar ul li a{
	/*display: block;*/
	padding: 13px 5px;
	border-bottom: 1px solid #10558d;
	color: rgb(241, 237, 237);
	font-size: 16px;
	position: relative;
		margin-left: 0px;
}
h2{
    text-align:center;
    color: white;
    margin-right:170px;
  }
  .wrapper .sidebar ul li a{
	display: block;
	padding: 12px 24px;
	border-bottom: 1px solid #10558d;
	color: rgb(241, 237, 237);
	font-size: 13px;
	position: relative;
}

.wrapper .sidebar ul li a .icon{
	color: #dee4ec;
	width: 30px;
	display: inline-block;
}

 

.wrapper .sidebar ul li a:hover,
.wrapper .sidebar ul li a.active{
	color: #0c7db1;

	background:white;
    border-right: 2px solid rgb(5, 68, 104);
}

.wrapper .sidebar ul li a:hover .icon,
.wrapper .sidebar ul li a.active .icon{
	color: #0c7db1;
}

.wrapper .sidebar ul li a:hover:before,
.wrapper .sidebar ul li a.active:before{
	display: block;
}

.wrapper .section{
	width: calc(100% - 225px);
	margin-left: 225px;
	transition: all 0.5s ease;
}
 .top_navbar{
    background: #F5F6FA;
}



.wrapper .section .top_navbar .hamburger a{
	font-size: 24px;
		color:#393E46;
		margin-left:10px;
		padding:10px;
	
}

.wrapper .section .top_navbar .hamburger a:hover{
	color: #0D4C92;
}

 

body.active .wrapper .sidebar{
	left: -225px;
}

body.active .wrapper .section{
	margin-left: 0;
	width: 100%;
}
@media (max-width:1500px){
     html{
      font-size: 13px;
     }
     .comment-form-container {
         margin-left: 450px;
         padding: 10px;
         width:390px;
     }
     .outer-comment {
         margin-left: 300px;
     }
}
@media (max-width:1320px){
     html{
      font-size: 13px;
     }
     .comment-form-container {
         margin-left: 400px;
         padding: 10px;
         width:380px;
     }
     .outer-comment {
         margin-left: 280px;
     }
}
@media (max-width:900px){
     html{
      font-size: 13px;
     }
     .comment-form-container {
         margin-left: 400px;
         padding: 10px;
     }
     .outer-comment {
         margin-left: 300px;
     }
}
@media (max-width:254px){
     html{
      font-size: 13px;
     }
     .comment-form-container {
         margin-left: 80px;
         padding: 5px;
         width:320px;
     }
     .outer-comment {
         margin-left: 40px;
          width:510px;
     }
}
@media (max-width:430px){
     html{
      font-size: 13px;
     }
     .comment-form-container {
         margin-left: 110px;
         padding: 5px;
         width:320px;
     }
     .outer-comment {
         margin-left: 30px;
         width:520px;
     }
}
</style>
<title>Comments</title>
<script src="jquery-3.2.1.min.js"></script>


<body>
  <div class="wrapper">
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>
             
        </div>
        <div class="sidebar">
            <div class="profile">
                
                <h2><?php echo $_SESSION['username']?></h2>
                
            </div>
            <ul>
                <li>
                    <a href="admin_profile.php">
                        <span class="item">Profile</span>
                    </a>
                </li>
                    
                <li>
                    <a href="admin_products.php">
                        
                        <span class="item">Products</span>
                    </a>
                </li>
                <li>
                    <a href="admin_porders.php" >
                        
                        <span class="item">Product Orders</span>
                    </a>
                </li>
                <li>
                    <a href="admin_rawmaterials.php" >
                        
                        <span class="item">Raw Materials Inventory</span>
                    </a>
                </li>
                <li>
                    <a href="admin_workbench.php">
                        
                        <span class="item">Workbench</span>
                    </a>
                </li>
                
                <li>
                    <a href="admin_wip.php">
                        
                        <span class="item">WIP Inventory</span>
                    </a>
                </li>
                <li>
                    <a href="admin_finishedg.php" >
                        
                        <span class="item">Finished Goods Inventory</span>
                    </a>
                </li>
                <li>
                    <a href="admin_mro.php" >
                        
                        <span class="item">MRO Inventory</span>
                    </a>
                </li>
                 <li>
                 <a href="comments.php" class="active">
                        
                        <span class="item">Comments</span>
                    </a>
                </li>
                <li>
                    <a href="admin_empmanage.php">
                        
                        <span class="item">Employee Management</span>
                    </a>
                </li>
                <li>
                    
                        <a href="logout.php"><span class="item">Signout</span></a>
                        
                    
                </li>
            
  </ul>
        </div>

   </div>
	
	<div class="comment-form-container">
		<form id="frm-comment">
			<div class="input-row">
				<div class="label">Name:</div>
				<input type="hidden" name="comment_id" id="commentId" /> <input
					class="input-field" type="text" name="name" id="name"
					placeholder="Enter your Name and Designation" />
			</div>
			<div class="input-row">
				<textarea class="input-field" name="comment" id="comment"
					placeholder="Your comment here"></textarea>
			</div>
			<div>
				<input type="button" class="btn-submit" id="submitButton"
					value="Publish" />
				<div id="comment-message">Comment added successfully.</div>
			</div>
		</form>
	</div>
	<div id="output"></div>
	<script>
            function postReply(commentId) {
                $('#commentId').val(commentId);
                $("#name").focus();
            }

            $("#submitButton").click(function () {
            	   $("#comment-message").css('display', 'none');
                var str = $("#frm-comment").serialize();

                $.ajax({
                    url: "comment-add.php",
                    data: str,
                    type: 'post',
                    success: function (response)
                    {
                        var result = eval('(' + response + ')');
                        if (response)
                        {
                        	$("#comment-message").css('display', 'inline-block');
                            $("#name").val("");
                            $("#comment").val("");
                            $("#commentId").val("");
                     	   listComment();
                        } else
                        {
                            alert("Failed to add comments !");
                            return false;
                        }
                    }
                });
            });
            
            $(document).ready(function () {
            	   listComment();
            });

            function listComment() {
                $.post("comment-list.php",
                        function (data) {
                           var data = JSON.parse(data);
                            
                            var comments = "";
                            var replies = "";
                            var item = "";
                            var parent = -1;
                            var results = new Array();

                            var list = $("<ul class='outer-comment'>");
                            var item = $("<li>").html(comments);

                            for (var i = 0; (i < data.length); i++)
                            {
                                var commentId = data[i]['comment_id'];
                                parent = data[i]['parent_comment_id'];

                                if (parent == "0")
                                {
                                    comments = "<div class='comment-row'>"+
                                    "<div class='comment-info'><span class='comment-row-label'>from</span> <span class='posted-by'>" + data[i]['comment_sender_name'] + " </span> <span class='comment-row-label'>at</span> <span class='posted-at'>" + data[i]['comment_at'] + "</span></div>" + 
                                    "<div class='comment-text'>" + data[i]['comment'] + "</div>"+
                                    "<div><a class='btn-reply' onClick='postReply(" + commentId + ")'>Reply</a></div>"+
                                    "</div>";

                                    var item = $("<li>").html(comments);
                                    list.append(item);
                                    var reply_list = $('<ul>');
                                    item.append(reply_list);
                                    listReplies(commentId, data, reply_list);
                                }
                            }
                            $("#output").html(list);
                        });
            }

            function listReplies(commentId, data, list) {
                for (var i = 0; (i < data.length); i++)
                {
                    if (commentId == data[i].parent_comment_id)
                    {
                        var comments = "<div class='comment-row'>"+
                        " <div class='comment-info'><span class='comment-row-label'>from</span> <span class='posted-by'>" + data[i]['comment_sender_name'] + " </span> <span class='comment-row-label'>at</span> <span class='posted-at'>" + data[i]['comment_at'] + "</span></div>" + 
                        "<div class='comment-text'>" + data[i]['comment'] + "</div>"+
                        "<div><a class='btn-reply' onClick='postReply(" + data[i]['comment_id'] + ")'>Reply</a></div>"+
                        "</div>";
                        var item = $("<li>").html(comments);
                        var reply_list = $('<ul>');
                        list.append(item);
                        item.append(reply_list);
                        listReplies(data[i].comment_id, data, reply_list);
                    }
                }
            }
        </script>
        <script>
       var hamburger = document.querySelector(".hamburger");
	hamburger.addEventListener("click", function(){
		document.querySelector("body").classList.toggle("active");
	})
  </script>
</body>

</html>