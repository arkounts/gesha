<?php
if(isset($_POST['submit'])){
    $msg = 'Name: ' .$_POST['name'] ."\n"
    .'Email: ' .$_POST['email'] ."\n"
    .'Comment' .$_POST['comment'];
    mail('benjatumwesigye@gmail.com','Gesha Contact Us', $msg);
    header('lacation: contact.html')


}else{
    exit(0);
}

?>