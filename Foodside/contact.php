<?php /* Template Name: Contact Us */ get_header(); ?>
<div class="container-fluid">

    <div class="row">
       
        <div class="col-sm-4 col-sm-offset-4" id="contact-form">
            <h2 class="text-center">  <?php  printf( esc_html__( 'Contact us', 'myfirstheme' ));  ?>  </h2>
            <hr>
            <font color="#FF0000">
               
                <?php if(isset($_POST['submit'])) { 
    $flag=1;
    if($_POST['yourname']=='') {
        $flag=0;  printf( esc_html__( 'Please enter your name', 'myfirstheme' )); echo"<br>"; }
    else if(!preg_match('/[a-zA-Z_x7f-xff][a-zA-Z0-9_x7f-xff]*/',$_POST['yourname'])) {
        $flag=0; 
       printf( esc_html__( 'Please enter valid name', 'myfirstheme' )); echo"<br>"; }
    if($_POST['email']=='') {
        $flag=0; printf( esc_html__( 'Please enter mail', 'myfirstheme' )); echo"<br>";
    } 
    else if(!eregi("^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$", $_POST['email'])) {
        $flag=0;  printf( esc_html__( 'Please enter valid email', 'myfirstheme' )); echo"<br>";  } 
    if($_POST['subject']=='')
    { 
        $flag=0; printf( esc_html__( 'Please enter subject', 'myfirstheme' )); echo"<br>";
    } 
    if($_POST['message']=='') {
        $flag=0; printf( esc_html__( 'Please enter message', 'myfirstheme' )); echo"<br>"; } 
    if ( empty($_POST) ) {
       printf( esc_html__( 'Sorry, your notice did not verify', 'myfirstheme' )); exit; 
    } 
    else 
    { 
        if($flag==1) 
        { 
            wp_mail(get_option("admin_email"),trim($_POST[yourname])." sent you a message from ".get_option("blogname"),stripslashes(trim($_POST[message])),"From: ".trim($_POST[yourname])." <".trim($_POST[email]).">rnReply-To:".trim($_POST[email])); printf( esc_html__( 'Mail Successfully Sent', 'myfirstheme' )); } } } 
            ?>
            </font>
            <form method="post" id="contactus_form">
               
                <?php  printf( esc_html__( 'Your name:', 'myfirstheme' ));  ?> <input type="text" name="yourname" id="yourname" rows="1" value="" /> <br /><br />
                <?php  printf( esc_html__( 'Your email:', 'myfirstheme' ));  ?><input type="text" name="email" id="email" rows="1" value="" /> <br /><br />
                <?php  printf( esc_html__( 'Your subject:', 'myfirstheme' ));  ?><input type="text" name="subject" id="subject" rows="1" value=""> <br /><br />
                <?php  printf( esc_html__( 'Leave a message:', 'myfirstheme' ));  ?><textarea name="message" id="message"></textarea> <br /><br />
                <input type="submit" name="submit" id="submit" value="<?php  printf( esc_html__( 'Send', 'myfirstheme' ));  ?>" style="float:right;"/> </form>
        </div>
    </div>
</div><!-- #content -->
<?php get_footer(); ?>
