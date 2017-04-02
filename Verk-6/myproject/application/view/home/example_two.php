<div class="container">
    <h1>Here's how you can get in touch</h1>

<div style="float: left;width: 350px;height: 505px;">
<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FBokasafnReykjanesbaejar%2F&tabs=timeline%2C%20events%2C%20messages&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId"
 width="340"
 height="500"
 style="border:none;overflow:hidden"
 scrolling="no"
 frameborder="0" 
 allowTransparency="true">
 </iframe>
 </div>


<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sollicitudin efficitur nibh. Sed quis erat massa. Integer tincidunt, augue nec posuere imperdiet, magna odio tincidunt orci, quis finibus metus urna at nulla. Aenean egestas non neque ullamcorper posuere. Curabitur eleifend et turpis sed dapibus. Suspendisse eu nisl arcu. Fusce vestibulum libero fermentum mauris mattis hendrerit. Etiam justo diam, sodales ut semper et, vestibulum at sem. Pellentesque eu lacus non ipsum ultrices convallis quis at nulla. Praesent molestie euismod risus, sit amet auctor metus ornare at. Etiam feugiat turpis mauris, eget commodo lorem porttitor vitae. In lacinia justo arcu, a dictum nisl rhoncus sit amet. Proin pretium ante urna, in sollicitudin nibh ornare sit amet. Duis semper purus a est mattis cursus.</p>

<p>Ut ut ex molestie, feugiat velit in, laoreet ligula. Mauris tincidunt mattis pulvinar. Proin euismod faucibus fermentum. Sed pretium consequat lacus vel ullamcorper. Nunc semper aliquam molestie. Suspendisse at scelerisque leo. Proin molestie sagittis purus, id facilisis massa bibendum a. Donec ut justo nulla. Morbi consectetur odio a felis ultricies, tincidunt condimentum nisi varius. Quisque porttitor dolor eu lacus viverra, non dignissim leo lobortis.</p>

<p>Aliquam felis lorem, iaculis sit amet tortor quis, tempor dapibus augue. Vivamus molestie pharetra ultricies. Phasellus ac nibh lectus. Suspendisse efficitur pellentesque est eu hendrerit. Nam id ornare urna, id consectetur eros. Sed in vehicula nibh. Mauris porta fringilla semper. Pellentesque non eros vehicula ante auctor ultricies at at dui. Duis sit amet feugiat magna. Maecenas tincidunt neque sit amet libero varius, nec fermentum nisl luctus. Vivamus vestibulum mi eu sapien gravida lacinia. Vestibulum eget fermentum velit.</p>

<p>Nam sit amet libero vel purus egestas ornare a in nunc. Cras augue nibh, tincidunt at blandit et, faucibus sed ligula. Pellentesque vel orci at neque lobortis fringilla. In congue nisi libero, in luctus metus aliquet a. Aenean id diam quis diam porta rhoncus. Aenean eget lectus turpis. Aenean massa dolor, luctus a quam et, varius placerat urna. Proin nisl neque, tincidunt eu malesuada non, facilisis sed ante. Phasellus venenatis sagittis volutpat.</p>

<p>Cras quis diam ex. Sed ut semper arcu, vitae porttitor urna. Mauris velit libero, pellentesque ut lorem tincidunt, gravida tempus sem. Vivamus semper, sem eu congue tempor, mi nibh sagittis orci, sit amet commodo risus libero vitae urna. Nunc convallis commodo quam, a maximus nulla ornare pharetra. Sed eu neque ut ligula interdum tempus. Aliquam viverra mi nisl, non commodo arcu auctor ac. Fusce condimentum sagittis nisi sed tristique. Cras at augue felis. Mauris vel tincidunt felis. Vestibulum pellentesque maximus lorem, a cursus ante faucibus at. </p>

<div style="background-color: #8dbf8b; float: right;width: 300px;height: 320px;">
<?php
$action = $_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <form  action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    Your name:<br>
    <input name="name" type="text" value="" size="30"/><br>
    Your email:<br>
    <input name="email" type="text" value="" size="30"/><br>
    Your message:<br>
    <textarea name="message" rows="7" cols="30"></textarea><br>
    <input type="submit" value="Send email"/>
    </form>
    <?php
    } 

else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
        }
    else{        
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
        mail("stykki@hotmail.com", $subject, $message, $from);
        echo "Email sent!";
        echo '<script language="javascript">';
		echo 'alert("message successfully sent")';
		echo '</script>';
        }
    }  
?>
</div>

<p>consectetur adipiscing elit. In ac convallis nisi, eget ultricies leo. Nam risus mi, consectetur nec lacinia a, fringilla quis metus. In euismod lectus ut mi semper consectetur. Duis aliquet sapien purus, et elementum massa accumsan at. Proin ipsum sapien, fermentum vel varius id, imperdiet eu risus. Fusce dignissim, tortor a tristique molestie, justo felis ultrices leo, in fermentum odio quam aliquam nisi. Duis laoreet tellus quis aliquet tempor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi ut massa ornare, faucibus justo at, fringilla sapien. Donec commodo bibendum orci. Ut pulvinar convallis eros ut semper.</p>

<p>Donec at blandit turpis. Morbi lorem odio, commodo id mattis at, ultrices id sapien. Integer scelerisque est eleifend, commodo lorem quis, cursus tortor. Nullam viverra enim tellus, id rhoncus erat lacinia id. Nullam sed volutpat ipsum. Donec eleifend tincidunt ex, non scelerisque quam fringilla quis. Nam eu elit suscipit metus pellentesque tempor. Nam posuere ante ac molestie rutrum.</p>

<p>Nulla eu metus ultrices, dictum lorem non, dictum mi. Vivamus non tempus elit. Integer mollis semper sapien, id pretium nibh maximus a. Mauris mi enim, efficitur at fringilla ut, tempus eu odio. Sed magna justo, tristique sollicitudin ipsum ac, mollis aliquet augue. Ut ac neque in erat congue lacinia sed ut mi. Nullam id lorem et quam faucibus auctor rhoncus non leo. Suspendisse molestie lacus rutrum diam suscipit varius. Quisque id euismod diam. Mauris eget tempus massa. Quisque egestas libero non felis luctus, ut dignissim tellus suscipit. Aliquam at leo a nisl rhoncus sodales sed sed felis. Sed a dolor magna.</p>
<div style="float: left;width: 300px; height: 170px;">
<hr>
<p>Heimilisfang:
    Tjarnargata 12</p>

<p>GPS:
    64.0029534, -22.55716319999999</p>

<p>Sími:
    421 6770</p>

<p>Netfang:
    bokasafn@reykjanesbaer.is</p>

<p>Vefur:
    <a href="http://reykjanesbaer.is/bokasafn">http://reykjanesbaer.is/bokasafn</a></p>

<hr>
</div>
<p>Donec a mauris dolor. Nam hendrerit velit sed urna pharetra posuere. Duis molestie risus non neque porttitor facilisis ut a massa. Nunc egestas tortor id sodales aliquam. Praesent vel lacus vitae elit aliquam dictum ac vel risus. Morbi sed eros rutrum, finibus dolor vel, aliquet purus. Quisque imperdiet, magna auctor vestibulum interdum, nisl libero pellentesque dui, eget efficitur turpis metus interdum massa. Ut vehicula felis nec enim tempus maximus. In feugiat ex sapien, id finibus leo euismod quis. Curabitur aliquam nulla eget mauris ultrices semper. Vestibulum malesuada, erat finibus porttitor vehicula, metus ipsum accumsan justo, et fermentum leo tellus in turpis. Ut et nunc quis sem dapibus dignissim tincidunt eu urna. Aenean est ex, scelerisque non vehicula in, vulputate quis ligula. Aliquam sit amet dui in mi iaculis fringilla eu ut risus.</p>

<p>Donec in turpis volutpat, ornare metus vitae, aliquam lectus. Vestibulum id dui at nisi iaculis scelerisque. Sed nisi magna, ultrices quis maximus eget, sagittis lacinia sem. Proin elementum, eros sit amet porta porta, mauris ex dictum orci, vitae pretium velit orci eget mi. Sed consectetur augue lacus, et pulvinar risus malesuada vel. Nunc fringilla, purus vel imperdiet eleifend, purus justo blandit enim, vel lobortis lacus dui ac enim. Mauris lacus sapien, egestas non lectus a, placerat facilisis risus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam consectetur maximus lorem, egestas euismod neque faucibus at. In vel lectus urna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam tincidunt neque a nibh consequat, quis hendrerit ligula condimentum. Nullam ultrices pretium ex eu interdum. Maecenas vehicula vitae velit at blandit. Mauris ac malesuada mi, vitae lacinia dolor.</p>

</div>
