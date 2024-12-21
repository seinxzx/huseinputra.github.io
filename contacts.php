<?php
$title = 'Contact Us  | Husein Putra Widya Pratama';
$active = 'resume';
echo include('view/component/header.php');
?>
        <!-- Wrapper -->
        <div class="wrapper">

            <!-- Started -->
            <div class="section started">
                <div class="centrize full-width">
                    <div class="vertical-center">
                        <div class="started-content">
                            <div class="h-title glitch-effect" data-text="Contacts">Contacts</div>
                            <div class="h-subtitle typing-bread">
                                <p><a href="/">Home</a> / <a href="contacts.php">Contacts</a></p>
                            </div>
                            <span class="typed-bread"></span>
                        </div>
                    </div>
                </div>
                <a href="#" class="mouse_btn"><span class="ion ion-mouse"></span></a>
            </div>

            <!-- Contacts Info -->
            <div class="section contacts">
                <div class="content">
                    <div class="title">
                        <div class="title_inner">Contacts</div>
                    </div>
                    <div class="service-items">
                        <div class="service-item">
                            <div class="icon"><span class="ion ion-android-phone-portrait"></span></div>
                            <div class="name">Phone</div>
                            <p>
                                <a href="https://wa.me/+6282127074919?text=Hallo Husein" target="__blank nofollow">(+62) 821 2707 4919</a>
                            </p>
                        </div>
                        <div class="service-item">
                            <div class="icon"><span class="ion ion-email"></span></div>
                            <div class="name">Email</div>
                            <p>
                                <a href="mailto:huseinputrawp@gmail.com">huseinputrawp@gmail.com</a>
                            </p>
                        </div>
                        <div class="service-item">
                            <div class="icon"><span class="ion ion-ios-location"></span></div>
                            <div class="name">Address</div>
                            <p>
                                Cisarua, Bogor, Jawa Barat
                            </p>
                        </div>
                    </div>
                    <div class="contact_form">
                        <form action="mailto:huseinputrawp@gmail.com" method="get">
                            <div class="group-val">
                                <input type="text" name="name" placeholder="Name" required/>
                            </div>
                            <div class="group-val">
                                <input type="text" name="email" placeholder="Email" required/>
                            </div>
                            <div class="group-val ct-gr">
                                <textarea name="body" placeholder="Message" required></textarea>
                            </div>
                            <input type="submit" class="btn fill" value="Send message">
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <?=
include('view/component/footer.php');
?>
      