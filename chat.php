<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: users.php");
          }
        ?>
        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="php/images/<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
          <p><?php echo $row['status']; ?></p>
        </div>
      </header>
      <link rel="stylesheet" href="index.css">
      <link rel="stylesheet" href="img.css">
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text"  class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text"   id="input-field" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
   

      <div class="wrapper">
    <div class="search-bar">
         <img src="img/emoji.jpg" onclick="show_emoji()" >
    </div> 
     <div class="emoji">
     <span id="emoji1" onclick="emoji(this.id)">&#128512;</span>
     <span id="emoji2" onclick="emoji(this.id)">&#128513;</span>
     <span id="emoji3" onclick="emoji(this.id)">&#128514;</span>
     <span id="emoji4" onclick="emoji(this.id)">&#128515;</span>
     <span id="emoji5" onclick="emoji(this.id)">&#128516;</span>
     <span id="emoji6" onclick="emoji(this.id)">&#128517;</span>
     <span id="emoji7" onclick="emoji(this.id)">&#128518;</span>
     <span id="emoji8" onclick="emoji(this.id)">&#128519;</span>
     <span id="emoji9" onclick="emoji(this.id)">&#128520;</span>
     <span id="emoji10" onclick="emoji(this.id)">&#128521;</span>
     <span id="emoji11" onclick="emoji(this.id)">&#128522;</span>
     <span id="emoji12" onclick="emoji(this.id)">&#128523;</span>
     <span id="emoji13" onclick="emoji(this.id)">&#128524;</span>
     <span id="emoji14" onclick="emoji(this.id)">&#128525;</span>
     <span id="emoji15" onclick="emoji(this.id)">&#128526;</span>
     <span id="emoji16" onclick="emoji(this.id)">&#128527;</span>
     <span id="emoji17" onclick="emoji(this.id)">&#128528;</span>
     <span id="emoji18" onclick="emoji(this.id)">&#128529;</span>
     <span id="emoji19" onclick="emoji(this.id)">&#128530;</span>
     <span id="emoji20" onclick="emoji(this.id)">&#128531;</span>
     <span id="emoji21" onclick="emoji(this.id)">&#128532;</span>
     <span id="emoji22" onclick="emoji(this.id)">&#128533;</span>
     <span id="emoji23" onclick="emoji(this.id)">&#128534;</span>
     <span id="emoji24" onclick="emoji(this.id)">&#128535;</span>
     <span id="emoji25" onclick="emoji(this.id)">&#128536;</span>
     <span id="emoji26" onclick="emoji(this.id)">&#128537;</span>
     <span id="emoji27" onclick="emoji(this.id)">&#128538;</span>
     <span id="emoji28" onclick="emoji(this.id)">&#128539;</span>
     <span id="emoji29" onclick="emoji(this.id)">&#128540;</span>
     <span id="emoji30" onclick="emoji(this.id)">&#128541;</span>
     <span id="emoji31" onclick="emoji(this.id)">&#128542;</span>
     <span id="emoji32" onclick="emoji(this.id)">&#128543;</span>
     <span id="emoji33" onclick="emoji(this.id)">&#128544;</span>
     <span id="emoji34" onclick="emoji(this.id)">&#128545;</span>
     <span id="emoji35" onclick="emoji(this.id)">&#128546;</span>
     <span id="emoji36" onclick="emoji(this.id)">&#128547;</span>
     <span id="emoji37" onclick="emoji(this.id)">&#128548;</span>
     <span id="emoji38" onclick="emoji(this.id)">&#128549;</span>
     <span id="emoji39" onclick="emoji(this.id)">&#128550;</span>
     <span id="emoji40" onclick="emoji(this.id)">&#128551;</span>
     <span id="emoji41" onclick="emoji(this.id)">&#128552;</span>
     <span id="emoji42" onclick="emoji(this.id)">&#128553;</span>
     <span id="emoji43" onclick="emoji(this.id)">&#128554;</span>
     <span id="emoji44" onclick="emoji(this.id)">&#128555;</span>
     <span id="emoji45" onclick="emoji(this.id)">&#128556;</span>
     <span id="emoji46" onclick="emoji(this.id)">&#128557;</span>
     <span id="emoji47" onclick="emoji(this.id)">&#128558;</span>
     <span id="emoji48" onclick="emoji(this.id)">&#128559;</span>
     <span id="emoji49" onclick="emoji(this.id)">&#128560;</span>
     <span id="emoji50" onclick="emoji(this.id)">&#128561;</span>
     <span id="emoji51" onclick="emoji(this.id)">&#128562;</span>
     <span id="emoji52" onclick="emoji(this.id)">&#128563;</span>
     <span id="emoji53" onclick="emoji(this.id)">&#128564;</span>
     <span id="emoji54" onclick="emoji(this.id)">&#128565;</span>
     <span id="emoji55" onclick="emoji(this.id)">&#128566;</span>
     <span id="emoji56" onclick="emoji(this.id)">&#128567;</span>
</div>
    </section>
  </div>

  
       <!-- <div class="view_img">
        <img src="/one (2).png" alt=""  width=" 400px" height:=" 360px"   object-fit="  contain" />
      </div> -->

     <!-- <div class="choose_img">
        <button>choose Image <img src="images/upload.png" alt="" /></button>
        <input type="file" name="" id="" accept="image/*" hidden />
      </div> -->


   






      <!-- <div id="group_chat_dialog" title="Group Chat Window">
 <div id="group_chat_history" style="height:400px; border:1px solid #ccc; overflow-y: scroll; margin-bottom:24px; padding:16px;">

 </div>
 <div class="form-group">
  <!-- <textarea name="group_chat_message" id="group_chat_message" class="form-control"></textarea>! -->
  <!-- <div class="chat_message_area">
   <div id="group_chat_message" contenteditable class="form-control">

   </div>
   <div class="image_upload"> -->
    <!-- <form id="uploadImage" method="post" action="upload.php"> -->
     <!-- <label for="uploadFile"><img src="upload.png" /></label> -->
      <!-- <input type="file" name="uploadFile" id="uploadFile" accept=".jpg, .png" /> -->
     </form>
    </div>
   </div>
   </div> 
 
</div>


         






         




  
  <script src="javascript/chat.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
  <script>
    click = false;
    function show_emoji() {
        if (click == false) {
            document.getElementsByClassName("emoji")[0].style.height = "142px";
            document.getElementsByClassName("emoji")[0].style.padding = "8px 0px";
            click = true;
        }
        else{
            document.getElementsByClassName("emoji")[0].style.height = "0px";
            document.getElementsByClassName("emoji")[0].style.padding = "0px";
            click = false;
        }
    }
    function emoji(emoji) {
       document.getElementById("input-field").value += document.getElementById(emoji).innerHTML;
    }



    let choose_img_Btn = document.querySelector(".choose_img button");
  let choose_Input = document.querySelector(".choose_img input");
  let imgSrc = document.querySelector(".view_img img");



choose_img_Btn.addEventListener("click", () => choose_Input.click());
choose_Input.addEventListener("change", () => {
  let file = choose_Input.files[0];
  if (!file) return;
  imgSrc.src = URL.createObjectURL(file);
  imgSrc.addEventListener("load", () => {
    document.querySelector(".container").classList.remove("disabled");
  });
});



 </script>


  

</body>
</html>
