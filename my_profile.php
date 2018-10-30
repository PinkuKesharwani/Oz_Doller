<!DOCTYPE>
<html lang="en">
<head>
    <title>My Profile</title>
    <?php include_once("master/plugin.php") ?>
    <style type="text/css">

    </style>
</head>
<body class="body_color">
<?php include_once("master/header.php") ?>

<section class="product_section">
    <div class="container">
        <div class="col-sm-12 col-md-3">
            <div class="order_listbox">
                <div class="carousal_head">
                    <span class="filter_head_txt slider_headtxt">My Profile</span>
                </div>
                <div class="order_list_container">
                    <div class="my_profile_picshow">
                        <img src="images/Male_default.png" id="_UserProfile" alt="UserProfile">
                        <div class="my_profile_name">Pinku Kesharwani</div>
                    </div>
                    <hr>
                    <div class="menu_popup_settingrow">
                        <a class="menu_setting_row" onclick="ShowProfile();">
                            <i class="mdi mdi-account-edit"></i>
                            Edit Profile
                        </a>
                    </div>
<!--                    <div class="menu_popup_settingrow">-->
<!--                        <a class="menu_setting_row" onclick="ShowAddress();">-->
<!--                            <i class="mdi mdi-map-marker"></i>-->
<!--                            Manage Address-->
<!--                        </a>-->
<!--                    </div>-->
                    <div class="menu_popup_settingrow">
                        <a href="order_list.php" class="menu_setting_row">
                            <i class="mdi mdi-format-list-checks"></i>
                            Order List
                        </a>
                    </div>

                    <div class="menu_popup_settingrow">
                        <a href="product_feedback.php" class="menu_setting_row">
                            <i class="mdi mdi-message-draw"></i>
                            Review &amp; Rating
                        </a>
                    </div>
                    <div onclick="ChangePasswordShow();" class="menu_popup_settingrow" data-target="#myModal_UpdatePassword" data-toggle="modal">
                        <a class="menu_setting_row" href="#">
                            <i class="mdi mdi-lock-open-outline"></i>
                            Change Password
                        </a>
                    </div>
                    <div class="menu_popup_settingrow">
                        <a href="index.php" class="menu_setting_row">
                            <i class="mdi mdi-logout"></i>
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-9">
            <div class="order_listbox">
                <div id="profile_box">
                <div class="carousal_head">
                    <span class="filter_head_txt slider_headtxt">Edit Profile Details</span>
                </div>
                <div class="order_list_container">
                    <div class="order_row border-none">
                        <div class="order_details_box">
                            <div class="col-md-5 col-sm-12">
                                    <div class="profile_block text-center">
                                        <div class="profile-picture">
                                            <img src="images/Male_default.png" id="_UserProfile" alt="UserProfile" />
                                        </div>
                                        <div class="btn btn-info btn-sm profile-upload">
                                            <span class="mdi mdi-account-edit mdi-24px"></span>
                                            <input type="file" name="profile_pic" id="profile_file" class="profile-upload-pic" onchange="ChangeSetImage(this, _UserProfile);">
                                        </div>
                                        <div class="btn btn-default btn-sm profile-upload" onclick="RemoveProfileImage(_UserProfile, profile_file);">
                                            <span class="mdi mdi-close mdi-24px"></span>
                                        </div>
                                        <small class="text-muted mute_caption">
                                            Accepted formats are .jpg, .gif &amp; .png. Size &lt; 1MB.
                                        </small>
                                    </div>
                            </div>
                            <div class="col-md-7 col-sm-12">
                                <div class="deli_row">
                                    <input type="text" name="name" placeholder="Name" class="form-control" />
                                </div>
                                <div class="deli_row">
                                    <input type="text" name="email_id" placeholder="Email Id" class="form-control" />
                                </div>
                                <div class="deli_row">
                                    <input type="text" name="phone_no" placeholder="Phone No." class="form-control" />
                                </div>
                                <div class="deli_row">
                                    <div class="btn btn-send">
                                        <i class="mdi mdi-account-check basic_icon_margin"></i>Save
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div id="address_block" style="display: none;">
                    <div class="carousal_head">
                        <span class="filter_head_txt slider_headtxt">Delivery Address Details</span>
                    </div>
                    <div class="order_list_container">
                        <div class="deli_row">
                            <div class="col-sm-6">
                                <div class="radio">
                                    <input id="add_1" value="male" class="gender" name="address_radio" type="radio" checked="" onchange="AddressOption('new');">
                                    <label for="add_1" class="radio-label">New</label>
                                </div>

                                <div class="radio">
                                    <input id="add_2" onchange="AddressOption('existing');" value="female" class="gender" name="address_radio" type="radio">
                                    <label for="add_2" class="radio-label">Existing</label>
                                </div>
                            </div>
                            <div class="col-sm-6" id="existing_dropbox" style="display:none">
                                <select class="form-control" id="existaddess" name="address_id">
                                    <option value="0"> --- Please Select ---</option>
                                    <option value="26">Bijendra
                                        , 9876543210, 789 Sanjeevni Nagar Garha
                                        , </option>
                                </select>
                            </div>
                        </div>
                        <div class="deli_row">
                            <div class="col-sm-6">
                                <input type="text" placeholder="Name" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Phone No." class="form-control">
                            </div>
                        </div>
                        <div class="deli_row">
                            <div class="col-sm-6">
                                <input type="text" placeholder="Email Id" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" placeholder="City" class="form-control">
                            </div>
                        </div>
                        <div class="deli_row">
                            <div class="col-sm-12">
                                <textarea class="form-control glo_txtarea" placeholder="Address"></textarea>
                            </div>
                        </div>
                        <div class="deli_row">
                            <div class="col-sm-12">
                          <input type="button" class="btn btn-primary pull-right" value="Save For Default" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once("master/footer.php") ?>
</body>
</html>