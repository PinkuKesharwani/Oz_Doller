<nav class="top_navigationbar">
    <div class="logo_block">
        <img src="images/prihul_logo.png" alt="Prihul Green" />
    </div>
    <div class="dash_menuicon" onclick="ResponsiveMenuClick();"><i class="mdi mdi-menu"></i>
    </div>
    <div class="option-container">
        <div class="user-info glo_menuclick">
            <!-- <img src="images/Male_default.png" class="profile_img">--><span>Pinku</span>
            <span class="caret"></span>
            <div class="menu_basic_popup menu_popup_setting effect scale0">
                <div class="menu_popup_containner padding0">
                   <!-- <div class="menu_popup_settingrow effect">
                        <a href="#" class="menu_setting_row">
                            <i class="mdi mdi-account-edit global_color"></i>
                            Edit Profile
                        </a>
                    </div>
                    <div class="menu_popup_settingrow effect">
                        <a href="#" class="menu_setting_row">
                            <i class="mdi mdi-account-settings-variant global_color"></i>
                            Setting
                        </a>
                    </div>-->
                    <div class="menu_popup_settingrow effect" onclick="update_password();" data-toggle="modal" data-target="#myModal_UpdatePassword">
                        <a href="#" class="menu_setting_row">
                            <i class="mdi mdi-lock-open-outline global_color"></i>
                            Change Password
                        </a>
                    </div>
                    <div class="menu_popup_settingrow effect">
                        <a href="#" class="menu_setting_row">
                            <i class="mdi mdi-logout global_color"></i>
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="menu_basic_block glo_menuclick">
            <span class="mdi mdi-earth global_color"></span>
            <div class="total_count">5</div>
            <div class="menu_basic_popup effect scale0 notification_popbox">
                <div class="menu_popup_head">Notification</div>
                <div class="menu_popup_containner">
                    <div class="menu_popup_row">
                        <div class="menu_popup_imgbox"><img src="images/Male_default.png" class="profile_img"></div>
                        <div class="menu_popup_text">
                            <p class="popup_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                veniam,</p>
                            <div class="popup_iconwithtime"><i class="mdi mdi-calendar-clock global_color"></i> 28-Dec-2017</div>
                        </div>
                    </div>
                    <div class="menu_popup_row">
                        <div class="menu_popup_imgbox"><img src="images/Male_default.png" class="profile_img"></div>
                        <div class="menu_popup_text">
                            <p class="popup_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                veniam,</p>
                            <div class="popup_iconwithtime"><i class="mdi mdi-calendar-clock global_color"></i> 28-Dec-2017</div>
                        </div>
                    </div>
                </div>
                <div class="menu_popup_showall">
                    <a href="NotificationList.php"> See All </a>
                </div>
            </div>
        </div>
        <div class="menu_basic_block glo_menuclick">
            <span class="mdi mdi-email global_color"></span>
            <div class="total_count" id="spanShortList">2</div>
            <div class="menu_basic_popup effect scale0 massage_popbox">
                <div class="menu_popup_head">Messages</div>
                <div class="menu_popup_containner style-scroll">
                    <div class="menu_popup_row">
                        <div class="menu_popup_imgbox"><img src="images/Male_default.png" class="profile_img"></div>
                        <div class="menu_popup_massage">
                            <div class="popup_user_namewithdate">
                                Pinku Kesharwani
                                <div class="popup_iconwithtime_right"><i class="mdi mdi-calendar-clock global_color"></i> 28-Dec-2017
                                </div>
                            </div>
                            <div class="popup_user_massagetxt">
                                Lorem ipsum dolor sit amet, consectetur
                            </div>
                        </div>
                    </div>
                    <div class="menu_popup_row">
                        <div class="menu_popup_imgbox"><img src="images/Male_default.png" class="profile_img"></div>
                        <div class="menu_popup_massage">
                            <div class="popup_user_namewithdate">
                                Pinku Kesharwani
                                <div class="popup_iconwithtime_right"><i class="mdi mdi-calendar-clock global_color"></i> 28-Dec-2017
                                </div>
                            </div>
                            <div class="popup_user_massagetxt">
                                Lorem ipsum dolor sit amet, consectetur
                            </div>
                        </div>
                    </div>
                    <div class="menu_popup_row">
                        <div class="menu_popup_imgbox"><img src="images/Male_default.png" class="profile_img"></div>
                        <div class="menu_popup_massage">
                            <div class="popup_user_namewithdate">
                                Pinku Kesharwani
                                <div class="popup_iconwithtime_right"><i class="mdi mdi-calendar-clock global_color"></i> 28-Dec-2017
                                </div>
                            </div>
                            <div class="popup_user_massagetxt">
                                Lorem ipsum dolor sit amet, consectetur
                            </div>
                        </div>
                    </div>
                    <div class="menu_popup_row">
                        <div class="menu_popup_imgbox"><img src="images/Male_default.png" class="profile_img"></div>
                        <div class="menu_popup_massage">
                            <div class="popup_user_namewithdate">
                                Pinku Kesharwani
                                <div class="popup_iconwithtime_right"><i class="mdi mdi-calendar-clock global_color"></i> 28-Dec-2017
                                </div>
                            </div>
                            <div class="popup_user_massagetxt">
                                Lorem ipsum dolor sit amet, consectetur
                            </div>
                        </div>
                    </div>
                    <div class="menu_popup_row">
                        <div class="menu_popup_imgbox"><img src="images/Male_default.png" class="profile_img"></div>
                        <div class="menu_popup_massage">
                            <div class="popup_user_namewithdate">
                                Pinku Kesharwani
                                <div class="popup_iconwithtime_right"><i class="mdi mdi-calendar-clock global_color"></i> 28-Dec-2017
                                </div>
                            </div>
                            <div class="popup_user_massagetxt">
                                Lorem ipsum dolor sit amet, consectetur
                            </div>
                        </div>
                    </div>
                    <div class="menu_popup_row">
                        <div class="menu_popup_imgbox"><img src="images/Male_default.png" class="profile_img"></div>
                        <div class="menu_popup_massage">
                            <div class="popup_user_namewithdate">
                                Pinku Kesharwani
                                <div class="popup_iconwithtime_right"><i class="mdi mdi-calendar-clock global_color"></i> 28-Dec-2017
                                </div>
                            </div>
                            <div class="popup_user_massagetxt">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                veniam,
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu_popup_showall">
                    <a href="AllMassageList.php"> See All </a>
                </div>
            </div>
        </div>-->
    </div>
</nav>
<aside class="dash_sidemenu">
    <div class="dash_emp_details">
        <img src="images/Admin_pic.jpg" class="dash_profile_img" />
        <div class="dash_emp_basic">
            <span class="dash_name global_color">Pinku Kesharwani</span>
            <span class="dash_designation">Manager</span>
        </div>
    </div>
    <ul class="list-group dash_menu_ul">
        <li class="right_menu_li">
            <a href="Dashboard.php">
                <i class="dash_arrow mdi mdi-speedometer global_color"></i>
                Dashboard
            </a>
        </li>
        <li class="right_menu_li">
            <a href="edit_restuarent_details.php">
                <i class="dash_arrow mdi mdi-speedometer global_color"></i>
                Edit Restuarent Details
            </a>
        </li>
        <li class="right_menu_li">
            <a href="cuisin_item_details.php">
                <i class="dash_arrow mdi mdi-speedometer global_color"></i>
                Cuisins Items
            </a>
        </li>
        <li class="right_menu_li">
            <a href="order_list.php">
                <i class="dash_arrow mdi mdi-speedometer global_color"></i>
                Order List
            </a>
        </li>
      <!--  <li class="right_menu_li" onclick="MenuClick(this);">
            <a href="javascript:;">
                <i class="dash_arrow mdi mdi-sitemap  global_color"></i>
                Option menu 1
                <i class="mdi mdi-chevron-right icon-left-arrow"></i>
            </a>
            <ul class="list-group dash_sub_menu">
                <li>
                    <a href="ClientList.aspx">Option Manu List 1</a>
                </li>
                <li>
                    <a href="ClientList.aspx">Option Manu List 2</a>
                </li>
            </ul>
        </li>
        <li class="right_menu_li"  onclick="MenuClick(this);">
            <a href="javascript:;">
                <i class="dash_arrow mdi mdi-sitemap  global_color"></i>
                Option menu 2
                <i class="mdi mdi-chevron-right icon-left-arrow"></i>
            </a>
            <ul class="list-group dash_sub_menu">
                <li>
                    <a href="ClientList.aspx">Option Manu List 1</a>
                </li>
                <li>
                    <a href="ClientList.aspx">Option Manu List 2</a>
                </li>
            </ul>
        </li>
        <li class="right_menu_li"  onclick="MenuClick(this);">
            <a href="javascript:;" class="waves-effect waves-block">
                <i class="dash_arrow mdi mdi-sitemap  global_color"></i>
                Option menu 3
                <i class="mdi mdi-chevron-right icon-left-arrow"></i>
            </a>
            <ul class="list-group dash_sub_menu">
                <li>
                    <a href="ClientList.aspx">Option Manu List 1</a>
                </li>
                <li>
                    <a href="ClientList.aspx">Option Manu List 2</a>
                </li>
            </ul>
        </li>
        <li class="right_menu_li"  onclick="MenuClick(this);">
            <a href="javascript:;">
                <i class="dash_arrow mdi mdi-sitemap global_color"></i>
                Option menu 4
                <i class="mdi mdi-chevron-right icon-left-arrow"></i>
            </a>
            <ul class="list-group dash_sub_menu">
                <li>
                    <a href="ClientList.aspx">Option Manu List 1</a>
                </li>
                <li>
                    <a href="ClientList.aspx">Option Manu List 2</a>
                </li>
            </ul>
        </li>-->
    </ul>
</aside>
