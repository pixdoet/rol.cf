<?php
$conn = new mysqli("localhost","root","beer","devblogs");

$post = '<p>Yes, it is true. ROL will be shut down on May 20, 2021</p>
<p>Since the launching of Rant out Loud on April 2021, we have constantly been receiving posts daily. We have also updated the site for some. However, as everything on the internet, it comes and goes. Newer things replace older ones. Stuff like ROL can&apos;t actually last forever, can it?</p>
<h3>Why?</h3>
<p>I have made this decision out of the sole reasons of ROL being not important anymore. Hey, even sites like MySpace and Yahoo Answers die because of the same reason, they are not relevant anymore. Sites like <a href="http://bwitter.me">bwitter</a> are more suitable for the masses than ROL is.</p>
<h3>What about our posts?</h3>
<p>So what happens to the posts? Well, me and Nycrite are working on a new project called <a href="http://thefuckbook.ml/affc">affc</a>. Unlike ROL, affc is multi purpose, which makes it more suitable for talking than just plain ranting on ROL. On affc, an account named &quot;rol&quot; will be created, and posts from ROL will be stored there.</p>
<h3>What will happen after May 20?</h3>
<p>ROL will enter into archive mode, where the pages will still exist, the reader will still function, and posts will still be there. However, posting will be permanantly disabled, not just through the webpage, but POST requests to the SQL script will also be disabled. Old ROL will be disabled by default, however it can still be accessed by adding /old after the link.</p>
<p><br></p>
<p>Goodbye to ROL, and I hope to see you guys again soon.</p>
<p><br></p>
<p>-Ian Hiew</p>';

$sql = $conn->prepare("INSERT INTO devblogs(title,context) VALUES ('ROL Shutting Down',?");
$sql->bind_param("s",$post);
$sql->execute();
?>