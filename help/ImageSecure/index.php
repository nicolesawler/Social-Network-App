<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>ImageUpload Class</title>
		<link href="prism.css" rel="stylesheet" />
		<style>
		body {
			background: #ffffe0;
		}
		</style>
		<script src="prism.js"></script>
	</head>
	<body>
		<p>
			<h1>ImageUpload Class</h1><br/>
			If you've downloaded this PHP Class it means you would like to allow visitors of your website(s) to upload images to your server. Unfortunetely most enthousiast web developers don't realise the potential risks that come with this. If you don't process the files correctly, someone could (intentially or not) bring serious harm to your server (and any visitors of your website(s)). However, processing the files correctly is not so easy if you're just an enthousiast.<br /><br />
			The ImageUpload Class was developed with that in mind. If you follow the guide below, the class will do most of the difficult work for you while keeping it as simple as possible for you to use.<br /><br />
			<h3>USAGE:</h3>
			<ol>
				<li>Edit config.php inside the ImageUpload folder.</li>
				<li>Upload the contents of the ImageUpload folder to your server.</li>
				<li>Uploading image(s):<br /><br />
					First create your upload form:
<?php
$code = htmlspecialchars('<form name="upload" action="upload.php" method="POST" enctype="multipart/form-data">
	Select image to upload: <input type="file" name="image[]" multiple>
	<input type="submit" name="upload" value="upload">
</form>');
?>
					<pre><code class="language-html"><?php echo $code;?></code></pre>
					ImageUpload is designed to handle single or multiple files at once. It is however important
					that you always use the same name in the name attribute of your file input elements!<br /><br />
					So for multiple file selections:
<?php
$code = htmlspecialchars('<input type="file" name="image[]" multiple>');
?>
					<pre><code class="language-html"><?php echo $code;?></code></pre>

					</pre>
					And for single file selections:
<?php
$code = htmlspecialchars('<input type="file" name="image[]">
<input type="file" name="image[]">
<input type="file" name="image[]">');
?>
					<pre><code class="language-html"><?php echo $code;?></code></pre>

					</pre>
					Secondly, you'll need to prepare your PHP form handler to use the ImageUpload class:
<?php
$code = htmlspecialchars('<?php
require_once "config.php";
require_once "imgupload.class.php";

$img = new ImageUpload;

$result = $img->uploadImages($_FILES[\'image\']);');
?>
				<pre><code class="language-php"><?php echo $code;?></code></pre>
				The result is een object that contains any errors, messages and database table id's regarding the uploads.<br /><br />
				If you wish to test for errors:
<?php
$code = htmlspecialchars('if(!empty($result->error)){
	foreach($result->error as $errMsg){
		echo $errMsg;
	}
}');
?>
				<pre><code class="language-php"><?php echo $code;?></code></pre>
				If you wish to display information about each file uploaded to the visitor.<br />
				For example:<br />
				<pre>File: img1.png was succesfully uploaded!
File: img2.png was succesfully uploaded!
File: test.exe is not an image. The file is removed!
File: img3.jpg exceeds the maximum file size of: 2MB. The file is removed!
File: img4.gif was succesfully uploaded!
				</pre>
<?php
$code = htmlspecialchars('if(!empty($result->info)){
	foreach($result->info as $infoMsg){
		echo $infoMsg;
	}
}');
?>
				<pre><code class="language-php"><?php echo $code;?></code></pre>
				If you need the database table id's for each successful file uploaded because you want the image(s) to be embedded somewhere in your website directly:
<?php
$code = htmlspecialchars('if(!empty($result->ids)){
	foreach($result->ids as $id){
		// Do something with $id
	}
}');
?>
				<pre><code class="language-php"><?php echo $code;?></code></pre>
				</li>
				<li>Displaying image(s):<br /><br />
					If you simply want to display the image in the browser:<br /><br />
					Browse to:
					<pre><code class="language-html">http://www.yourwebsite.com/image.php?id=1</code></pre>
					Where id is the id of the image.<br /><br />
					To show an image inside a webpage with other content:<br /><br />
					Put the following Javascript code inside your head element:
<?php
$code = htmlspecialchars('function load_img(element, id, style = "") {
	document.getElementById(element).innerHTML=\'<object type="text/html" style="\'+ style +\'" data="image.php?id=\'+ id +\'"></object>\';
}
document.addEventListener( "DOMContentLoaded", function(){
	// Load the images after the website is loaded. Some examples:
	load_img("img", 1);
	load_img("img2", 2);
});');
?>
					<pre><code class="language-javascript"><?php echo $code;?></code></pre>
					Put div element(s) inside your webpage where you wish to display the image(s):
<?php
$code = htmlspecialchars('<div id="img"></div>
<div id="img2"></div>');
?>
					<pre><code class="language-html"><?php echo $code;?></code></pre>
					If you wish to style the images (resize them for example), you'll need to style the object element that's created with Javascript:
<?php
$code = htmlspecialchars('load_img("img", 1, "width: 300px; border: 1px solid black;");');
?>
					<pre><code class="language-javascript"><?php echo $code;?></code></pre>
				</li>
				<li>Downloading image(s):<br /><br />
					Browse to:
					<pre><code class="language-html">http://www.yourwebsite.com/download.php?id=1</code></pre>
					Where id is the id of the image. The image is sent with its original filename and extension so your security won't be compromised.
				</li><br />
				<li>Deleting an image:<br /><br />
					Use the following PHP code to delete an image:
<?php
$code = htmlspecialchars('<?php
require_once "config.php";
require_once "imgupload.class.php";

$img = new ImageUpload;

$result = $img->deleteImage(id);

echo $result->info[0];');
?>
					<pre><code class="language-php"><?php echo $code;?></code></pre>
					Replace id with the id of the image.
			</ol>
			<h3>FAQ:</h3>
			<ol>
				<li>I'm getting the error "The image cannot be displayed because it contains errors".<br />
<pre>
The ImageUpload class renames all uploaded images to a random name and changes the extension to '.tmp'. In order to correctly
display the image to the visitor, it needs to send headers towards the browser to tell it what kind of file it is and how it should handle it.
Headers however cannot be sent if there's already output sent towards the browser. And this is VERY strict! It can be as simple as some text or PHP echo,
or as difficult a <a href="https://en.wikipedia.org/wiki/Byte_order_mark">Byte Order Marker</a> because you've edited some of the class's files with an editor that supports this.
See if your editor is able to save the file with ANSI or UTF-8 encoding without a BOM.

This is also why you should use the image.php file to retrieve the image. It was coded and saved in such a way that no output is sent towards the browser
before displaying the image.</pre>
				</li>
				<li>I'm getting the error "Unable to create htaccess file.".<br />
<pre>
Make sure that the ImageUpload class has sufficient read/write permissions to your upload directory. This directory should normally be owned by your
webserver user (apache for example) so it has all the rights nessesary. Do NOT chmod 777 the directory! This would make you vulnerable!</pre>
				</li>
				<li>I'm getting the error "The PHP fileinfo extension isn't loaded and ImageUpload was unable to load it for you.".<br />
<pre>
The ImageUpload class relies on the PHP fileinfo extension to validate the image file. If this extension isn't installed or disabled, the class can't function.
Please contact your server provider about this issue and ask them to install / enable it.</pre>
				</li>
				<li>I'm getting the error " 'file' exceeds the maximum file size that this server allowes to be uploaded!".<br />
<pre>
This means that the visitor is trying to upload a file that is larger than what is allowed by the 'post_max_size' and/or 'upload_max_filesize' settings
in your php.ini file. Either adjust the maximum file size allowed in your config.php to match the php.ini settings or edit your php.ini file to
allow larger files to be uploaded.</pre>
				</li>
				<li>I have other questions and/or suggestions about the ImageUpload class.<br />
<pre>
I'm always happy to hear from my users! Send me an email on bjorno43@hotmail.com with the subject "ImageUpload Class".
I will reply to you as soon as possible! Keep in mind though that I have a busy life so it could take a few days before you get a reply.</pre>
				</li>
			</ol>
			<h3>DISCLAIMER:</h3>
			<ol>
				<li>If you distribute any portion of the source code of the ImageUpload Class, you must retain all copyright, patent, trademark, and attribution notices that are present in the source code.</li>
				<li>The ImageUpload Class is provided "as-is." You bear the risk of using it. The contributors give no express warranties, guarantees or conditions. To the extent permitted under your local laws, the contributors exclude the implied warranties of merchantability, fitness for a particular purpose and non-infringement.</li>
			</ol>

			In simple words: I've done my very best to create a reliable and secure way of handling files uploaded by your website(s) visitors. However, I cannot guarantuee that it's 100% secure! The internet is ever changing and at some point, someone will find a way to circumvent the security measures I've put in place. That's why I have to add "Use at your own risk!". If something happened that shouldn't happen, contact me on my email address provided in the FAQ above. I will do my best to fix the issue as soon as possible!<br /><br />
			If you wish to distribute the class (with or without changes made to it), please leave the copyright notice in place. I strongly believe in the open source community, however "credit due where credit deserved". If you've made any changes to the source code, make sure to add "modified by: your name" to the copyright notice.

		</p>
	</body>
</html>
