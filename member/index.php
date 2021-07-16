<?php
include('include_menu.php');
?>
    <div class="main-content">
        <?php
           include('include_header.php');
        ?>
        <main>
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h2>ข้อมูลเจ้าของ</h2>
                            <button> แก้ไขข้อมูล<span class="las la-arrow-right"></span></button>
                        </div>
                        <div class="card-body">
                            <div class="profile">
                                <div class="profile-info">
                                <a href="profile_tag.php">
                                    <img src="../assets/img/profile/avatar.jpg" width="250px" height="250px" alt="">
                                    </a>
                                </div>
                                <div>
                                    <h3> <span class="las la-user-circle"></span> ชื่อผู้ใช้: aa</h3>
                                    <h3> <span class="las la-address-book"></span> ชื่อ-นามสกุล: John Doe</h3>
                                    <p> <span class="las la-inbox"></span> Testemail@gmail.com</p>
                                    <p> <span class="las la-mobile"></span> 0123456</p>
                                    <p> <span class="lab la-line"></span> Testline</p>
                                    <p> <span class="lab la-facebook-square"></span> Testfacebook</p>
                                </div>
                               
                            </div>
                         </div>
                    </div>
                </div>
                <div class="tags">
                    <div class="card">
                        <div class="card-header">
                            <h3>แท็กทั้งหมด</h3>
                            </span></button>
                        </div>
                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                <a href="profile_tag.php">
                                    <img src="../assets/img/profile/prodog1.jpg" width="80px" height="80px" alt="">
                                </a>
                                    <div>
                                        <h4>Lewis S. Cunningham</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                <a href="profile_tag.php">
                                    <span class="las la-eye"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="info">
                                <a href="profile_tag.php">
                                    <img src="../assets/img/profile/procat1.jpg" width="80px" height="80px" alt="">
                                    </a>
                                    <div>
                                        <h4>Lewis S. Cunningham</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                <a href="profile_tag.php">
                                    <span class="las la-eye"></span>
                                </a>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="info">
                                <a href="profile_tag.php">
                                    <img src="../assets/img/profile/proplant1.jpg" width="80px" height="80px" alt="">
                                </a>
                                    <div>
                                        <h4>Lewis S. Cunningham</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                <a href="profile_tag.php">
                                    <span class="las la-eye"></span>
                            </a>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="info">
                                <a href="profile_tag.php">
                                    <img src="../assets/img/profile/prodog2.jpg" width="80px" height="80px" alt="">
                                    </a>
                                    <div>
                                        <h4>Lewis S. Cunningham</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                <a href="profile_tag.php">
                                    <span class="las la-eye"></span>
                                 </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
           include('include_card_list.php');
        ?>
        </main>
    </div>
    </body>
</html>
