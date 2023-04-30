<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ChatGPT Interface</title>
  <link rel="stylesheet" href="<?php echo BASEURL; ?>/public/css/style1.css?v<?=rand(0, 9);?>">
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="home">Home</a></li>       
      </ul>
    </nav>
    
  </header>

  <div class="chat-container">
    <div class="chat-header">
      <h2>Chat with ADMIN</h2>
    </div>
    <div class="chat-body">
      <ul class="chat-message-list"></ul>
    </div>
    <div class="chat-footer">
      <input type="text" placeholder="Type your message...">
      <button>Send</button>
    </div>
  </div>

  <script src="<?php echo BASEURL; ?>/public/js/chat.js"></script> 
<!-- </body>
</html> -->
<?php require_once('public/templates/footer.php');?>
