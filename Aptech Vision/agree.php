
<?php

session_start();
include 'header.php';

?>



<?php

if(isset($_SESSION['errorMessage'])){
?>

<div class="row justify-content-center mt-5">
    <div class="col-6">
        <div class="alert alert-danger alert-dismissible fade show"
        role="alert">
        <?php echo $_SESSION['errorMessage'];
        unset($_SESSION['errorMessage']);
        ?>
        <button type="button" class="btn-close"
        data-bs-dismiss="alert" aria-label="Close"></button>

        
        </div>
    </div>
</div>

<?php

}
?>




<div class="customer_login mt-60">
        <div class="container">
            <div class="row justify-content-center">
                <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2 class="text-center text-primary">Register</h2>
                        <form action="admin/index.php" method="POST">
                        <div class="my-3">
                            <h3 class="text-center">Privacy and Terms</h3>
                            <p>To create a Google Account, you’ll need to agree to the <a href="#" class="text-primary">Terms of Service</a> below.
                            <br>
                            In addition, when you create an account, we process your information as described in our <a href="#" class="text-primary">Privacy Policy</a> , including these key points:</p>
                            <h4>Data we process when you use Google</h4>
                            <li>When you set up a Google Account, we store information you give us like your name, email address, and telephone number.</li>
                            <li>When you use Google services to do things like write a message in Gmail or comment on a YouTube video, we store the information you create.</li>
                            <li>When you search for a restaurant on Google Maps or watch a video on YouTube, for example, we process information about that activity – including information like the video you watched, device IDs, IP addresses, cookie data, and location.</li>
                            <li>We also process the kinds of information described above when you use apps or sites that use Google services like ads, Analytics, and the YouTube video player.</li>
                            <br>
                            <h4>Why we process it</h4>
                            We process this data for the purposes described in <a href="#" class="text-primary">our policy</a>, including to:
                              <div class="my-3">
                                <li>Help our services deliver more useful, customized content such as more relevant search results;</li>
                                <li>Improve the quality of our services and develop new ones;</li>
                                <li>Deliver personalized ads, depending on your account settings, both on Google services and on sites and apps that partner with Google;</li>
                                <li>Improve security by protecting against fraud and abuse; and</li>
                                <li>Conduct analytics and measurement to understand how our services are used. We also have partners that measure how our services are used. <a href="#" class="text-primary">Learn more</a> about these specific advertising and measurement partners.</li>
                                </div>
                                <h4>Combining data</h4>
                                <p>We also combine this data among our services and across your devices for these purposes. For example, depending on your account settings, we show you ads based on information about your interests, which we can derive from your use of Search and YouTube, and we use data from trillions of search queries to build spell-correction models that we use across all of our services.</p>
                                <h4>You’re in control</h4>
                                <p>Depending on your account settings, some of this data may be associated with your Google Account and we treat this data as personal information. You can control how we collect and use this data now by clicking “More Options” below. You can always adjust your controls later or withdraw your consent for the future by visiting My Account (myaccount.google.com).
                                Customize your Google experience by confirming your personalization settings and the data stored with your account.
                                You can always learn more about these options, adjust them, and review your activity in your Google Account (account.google.com).
                                <br>
                                <h4>Web & App Activity</h4>
                                <p>Saves your activity on Google sites and apps, including searches and associated info like location. Also saves activity from sites, apps, and devices that use Google services, including Chrome history. This helps Google provide better search results, suggestions, and personalization across Google services. Activity older than 18 months will be automatically deleted. You can change your auto-delete option, stop saving activity, or delete it manually at account.google.com.</p>
                                </p>
                            </div>
                            <br>
                            <div class="register_submit text-center">
                                <button type="submit" name="agreebtn" class="w-75">I agree</button>
                            </div>
                        
                        </form>
                    </div>
                </div>







