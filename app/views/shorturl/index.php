<?php 
$title = "Shorturls"; 
require_once('public/templates/header.php');?>


<div class="container p-5">
<h1>shorturls index</h1>
<h1>URL Shortener</h1>
    <form method="post" action="shorturl/index.php">
        <label for="url">Enter a URL to shorten:</label>
        <input type="text" name="url" id="url">
        <button type="submit">Shorten URL</button>
    </form>
    <p>Example: http://localhost/abcdef</p>
    <?php //print_r($data);?>
    <hr>
    <?php// print_r($data[0]['shorturl'][0]['msg']);?>
    

</div>

<?php require_once('public/templates/footer.php');?>