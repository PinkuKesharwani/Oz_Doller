<nav class="main_menu" id="top_header_menu fixed_menu">
    <div class="container">
        <div class="row top_menubox">
            <div class="main_logo">
                <a href="homeupdate.php">
                    <img src="images/logo.png">
                </a>
            </div>
            <div class="menu_all_containner">

                <div class="login_with_baskit">
                    <ul>
                        <li><a class="dots_animation menu_selected">Home</a></li>
                        <li><a class="dots_animation">Medieval Warrior</a>
                            <ul class="sub-menu style-scroll">
                                <li><a>Medieval Armour</a></li>
                                <li><a>Mini Medieval Helmets</a></li>
                                <li><a>Medieval Helmets</a></li>
                            </ul>
                        </li>
                        <li><a class="dots_animation">Gift &amp; Home Decor</a>
                            <ul class="sub-menu style-scroll">
                                <li><a>Antique Pad Lock</a></li>
                                <li><a>Brass Bells</a></li>
                                <li><a>Fireman Helmet</a></li>
                                <li><a>Hour Glass</a></li>
                                <li><a>Key Chains</a></li>
                                <li><a>Magnifying Glass</a></li>
                                <li><a>Musical Instrument</a></li>
                                <li><a>Pocket Watch</a></li>
                                <li><a>Table Clock</a></li>
                                <li><a>Telescope</a></li>
                                <li><a>World Globe</a></li>
                            </ul>
                        </li>
                        <li><a class="dots_animation">Nautical</a>
                            <ul class="sub-menu style-scroll">
                                <li><a>Compass</a></li>
                                <li><a>Diver Helmet</a></li>
                                <li><a>Sextant</a></li>
                                <li><a>Ship Items</a></li>
                                <li><a>Sundial</a></li>
                            </ul>
                        </li>
                        <li><a class="dots_animation">Soft Toys</a>
                            <ul class="sub-menu style-scroll">
                                <li><a>Teddy Bear</a></li>
                                <li><a>Toys</a></li>
                            </ul>
                        </li>
                        <li><a class="dots_animation" onclick="ShowLoginSignup('signin');">Sign In</a></li>
                        <li><a class="dots_animation" onclick="ShowLoginSignup('signup');">Sign Up</a></li>
                        <li data-target="#global_product_search" data-toggle="modal"><i class="menu_ser_icon mdi mdi-magnify"></i>
                        </li>
                        <li>
                            <div class="baskit_containner baskit_click">
                                <span class="baskit_counter" id="baskit_counter">2</span>
                                <i class="mdi mdi-basket menu_baskit_icon" id="baskit_block"></i>
                                <div class="card_menubox" id="card_menubox">
                                    <div class="header_popup">
                                        <div class="total_item_count">
                                            <span class="basic_icon mdi mdi-basket-fill"></span>
                                            1 Item
                                        </div>
                                        <div class="total_item_amt pull-right">
                                            <span class="basic_icon mdi mdi-currency-inr"></span>
                                            55
                                        </div>
                                    </div>
                                    <div class="card_menubox_containner style-scroll">
                                        <table class="table table-striped table_addcard">
                                            <tbody>
                                            <tr>
                                                <td class="text-left"><a class="cart_product_name">Mini Medieval Helmets</a></td>
                                                <td class="text-center"> x1</td>
                                                <td class="text-center"><i class="fa fa-inr"></i>500</td>
                                                <td class="text-right">
                                                    <a class="mdi mdi-close-circle cart-delete" data-toggle="tooltip" title="" data-original-title="Remove"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left"><a class="cart_product_name">Medieval Helmets</a></td>
                                                <td class="text-center"> x1</td>
                                                <td class="text-center"><i class="fa fa-inr"></i>300</td>
                                                <td class="text-right">
                                                    <a class="mdi mdi-close-circle cart-delete" data-toggle="tooltip" data-original-title="Remove"></a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="cart_btn_box">
                                        <a class="btn btn-warning btn-sm" href="mycart.php">
                                            <span class="mdi mdi-basket-fill basic_icon_margin"></span>View Cart
                                        </a>
                                        <a class="btn btn-danger btn-sm pull-right" href="checkout.php">
                                            <span class="mdi mdi-cart basic_icon_margin"></span>Checkout
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<!--<div class="page_loader" id="page_loader">-->
<!--    <div class="loaders">-->
<!--        <div class="dot dot-1"></div>-->
<!--        <div class="dot dot-2"></div>-->
<!--        <div class="dot dot-3"></div>-->
<!--    </div>-->
<!--</div>-->
<div class="page_loader" id="page_loader">
    <div class="mainloader"></div>
</div>

<div class="fixed_button fixed_bottom" id="bottom_scroll_btn" onclick="ScrollTop();">
    <i class="mdi mdi-mdi mdi-arrow-expand-up"></i>
</div>
<div class="fixed_asked" data-toggle="tooltip" data-placement="left" title="Ask For Call" id="ask_call">
    <span class="" data-toggle="modal" data-target="#AskForCall">
    <i class="mdi mdi-phone"></i>
    </span>
</div>
<div class="modal right fade" id="global_product_search" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
    <div class="modal-dialog globalsearch_box" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel2" style="color: #dead1f;">Product List</h4>
            </div>
            <div class="search_filter">
                <input type="text" class="main_filter_search" id="Search" onkeyup="getBuyItem()"
                       placeholder="Search by category">
                <div class="filter_search_icon">
                    <i class="mdi mdi-magnify"></i>
                </div>
            </div>
            <div class="filter_category">
            <ul class="product_list_ul style-scroll" id="filter_data">
                    <li class="product_list_li selected" onclick="get_items(this)" id="0">All Products</li>
                    <li class="product_list_li" onclick="get_items(this)" id="1">Medieval Armour</li>
                    <li class="product_list_li" onclick="get_items(this)" id="2">Mini Medieval Helmets</li>
                    <li class="product_list_li" onclick="get_items(this)" id="3">Medieval Helmets</li>
                    <li class="product_list_li" onclick="get_items(this)" id="4">Antique Pad Lock</li>
                    <li class="product_list_li" onclick="get_items(this)" id="5">Brass Bells</li>
                    <li class="product_list_li" onclick="get_items(this)" id="7">Fireman Helmet</li>
                    <li class="product_list_li" onclick="get_items(this)" id="8">Hour Glass</li>
                    <li class="product_list_li" onclick="get_items(this)" id="9">Key Chains</li>
                    <li class="product_list_li" onclick="get_items(this)" id="12">Magnifying Glass</li>
                    <li class="product_list_li" onclick="get_items(this)" id="15"> Musical Instrument</li>
                    <li class="product_list_li" onclick="get_items(this)" id="19">Pocket Watch</li>
                    <li class="product_list_li" onclick="get_items(this)" id="20"> Table Clock</li>
                    <li class="product_list_li" onclick="get_items(this)" id="22">Telescope</li>
                    <li class="product_list_li" onclick="get_items(this)" id="23"> World Globe</li>
                    <li class="product_list_li" onclick="get_items(this)" id="24">Compass</li>
                    <li class="product_list_li" onclick="get_items(this)" id="25">Diver Helmet</li>
                    <li class="product_list_li" onclick="get_items(this)" id="26">Sextant</li>
                    <li class="product_list_li" onclick="get_items(this)" id="28">Ship Items</li>
                    <li class="product_list_li" onclick="get_items(this)" id="29">Sundial</li>
                    <li class="product_list_li" onclick="get_items(this)" id="30">Taddy bear</li>
                    <li class="product_list_li" onclick="get_items(this)" id="31">Toys</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="modal right fade" id="AskForCall" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel2" style="color: red;">Ask For Call</h4>
                <div class="headphone_forask">
                    <i class="mdi mdi-headphones-settings"></i>
                </div>
            </div>
            <div class="modal-body">
                <div class="deli_row">
                    <input type="text" name="ask_number" autocomplete="off" class="form-control login_txt"
                           placeholder="Enter Mobile Number"/>
                </div>
            </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="AskSubmit">Submit</button>
            </div>
        </div>
    </div>
</div>
<div id="myModal_UpdatePassword" class="modal fade" role="dialog" aria-hidden="false">
    <div class="modal-dialog forgotpass_lb">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">UPDATE PASSWORD ?</h4>
            </div>
            <div class="modal-body">
                <div class="basic_lb_row">
                    <input type="text" class="form-control forgot_txt" placeholder="Old Password"
                           id="txtChange_previousPsd" autocomplete="off" data-validate="TT_btnChangepass">
                    <div class="forgot_icon"><i class="mdi mdi-lock mdi-16px"></i></div>
                </div>
                <div class="basic_lb_row">
                    <input type="text" class="form-control forgot_txt" placeholder="New Password" id="txtchange_newPsd"
                           autocomplete="off" data-validate="TT_btnChangepass">
                    <div class="forgot_icon"><i class=" mdi mdi-lock-open-outline mdi-16px"></i></div>
                </div>
                <div class="basic_lb_row">
                    <input type="text" class="form-control forgot_txt" placeholder=" Re-type Password"
                           id="txtchange_retypePsd" autocomplete="off" data-validate="TT_btnChangepass">
                    <div class="forgot_icon"><i class=" mdi mdi-lock-open-outline mdi-16px"></i></div>
                </div>
            </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="TT_btnChangepass">Update</button>
            </div>
        </div>

    </div>
</div>
<!------Popup Box -->
<div class="modal popup_bgcolor" id="sucess_popup">
    <div class="popup_box">
        <div class="alert_popup success_bg">
            <div class="popup_verified"><i class="mdi mdi-check"></i></div>
            <h4 class="popup_mainhead">Thank You!</h4>
            <p class="popup-text dynamic_popuptxt">You have successfully Submit</p>
        </div>
        <div class="popup_submit">
            <button class="popup_submitbtn success_bg sucess_btn" type="submit" onclick="HidePopoupMsg();">Ok
            </button>
        </div>
    </div>
</div>
<div class="modal popup_bgcolor" id="error_popup">
    <div class="popup_box">
        <div class="alert_popup error_bg">
            <div class="popup_verified"><i class="mdi mdi-close"></i></div>
            <h4 class="popup_mainhead">Error Massage!</h4>
            <p class="popup-text dynamic_popuptxt">You have entered wrong text</p>
        </div>
        <div class="popup_submit">
            <button class="popup_submitbtn error_bg error_btn" type="submit" onclick="HidePopoupMsg();">ok</button>
        </div>
    </div>
</div>
<div class="modal popup_bgcolor" id="conformation_popup">
    <div class="popup_box">
        <div class="alert_popup conformation_bg">
            <div class="popup_verified"><i class="mdi mdi-close"></i></div>
            <h4 class="popup_mainhead">Confirmation Massage!</h4>
            <p class="popup-text dynamic_popuptxt">Do you really want to delete this record.t</p>
        </div>
        <div class="popup_submit">
            <a class="popup_submitbtn conformation_bg conformation_btn" type="submit" id="ConfirmBtn"
               onclick="HidePopoupMsg();">Yes
            </a>
            <a class="popup_submitbtn conformation_nobtn" type="submit" onclick="HidePopoupMsg();">No</a>
        </div>
    </div>
</div>

<div class="modal popup_bgcolor" id="loginSignup_popup">
    <div class="login_popup_box">
        <div class="close_login" onclick="HidePopoupMsg();"><i class="mdi mdi-close"></i></div>
        <div class="login_lefttxtbox">
            <div class="left_block login">
                <h1>Login</h1>
                <p>Get access to your Orders, and Recommendations.</p>
                <img src="images/oz-images/oz-login-img.png">
            </div>
            <div class="left_block registration">
                <h1>Registration</h1>
                <p>We do not share your personal details with anyone.</p>
                <img src="images/oz-images/signup_img.png">
            </div>
            <div class="left_block forgot">
                <h1>Forgot</h1>
                <p>Enter mobile phone number associated with your OZDollar account.</p>
                <img src="images/forgot_image.png"/>
            </div>
        </div>
        <div class="login_right_txt">
            <div class="right_block login">
                <div class="deli_row">
                    <input type="text" name="email_pass" autocomplete="off" class="form-control login_txt"
                           placeholder="Email/Mobile Number ">
                </div>
                <div class="deli_row">
                    <input type="password" name="login_password" autocomplete="off" class="form-control login_txt"
                           placeholder="Password">
                </div>
                <hr>
                <div class="deli_row">
                    <button class="btn btn-danger login_btn">
                        <i class="mdi mdi-account-check basic_icon_margin"></i>Submit
                    </button>
                </div>
                <hr>
                <div class="product_btn_box">
                    <div class="btn btn-warning" onclick="ShowLoginSignup('forgot')">
                        <i class="mdi mdi-account-alert basic_icon_margin"></i>Forgot
                    </div>
                    <div class="btn btn-primary pull-right" onclick="ShowLoginSignup('signup');">
                        <i class="mdi mdi-account-edit basic_icon_margin"></i>Sign Up
                    </div>
                </div>
            </div>
            <div class="right_block forgot">
                <div class="deli_row">
                    <input type="text" name="email_pass" autocomplete="off" class="form-control login_txt"
                           placeholder="Enter Mobile Number ">
                </div>
                <hr>
                <div class="deli_row">
                    <button class="btn btn-danger login_btn">
                        <i class="mdi mdi-account-check basic_icon_margin"></i>Submit
                    </button>
                </div>
                <hr>
                <div class="product_btn_box">
                    <div class="btn btn-primary login_btn" onclick="ShowLoginSignup('signin');">
                        <i class="mdi mdi-account-edit basic_icon_margin"></i>Sign In
                    </div>
                </div>
            </div>
            <div class="right_block registration">
                <div class="deli_row">
                    <input type="text" name="referal_code" autocomplete="off" class="form-control login_txt"
                           placeholder="Referral Code">
                </div>
                <div class="deli_row">
                    <input type="text" name="reg_name" autocomplete="off" class="form-control login_txt"
                           placeholder="Enter Name">
                </div>
                <div class="deli_row">
                    <input type="text" name="reg_email" autocomplete="off" class="form-control login_txt"
                           placeholder="Enter Email Id">
                </div>
                <div class="deli_row">
                    <input type="text" name="reg_number" autocomplete="off" class="form-control login_txt"
                           placeholder="Enter Mobile Number">
                </div>
                <div class="deli_row">
                    <input type="password" name="reg_password" autocomplete="off" class="form-control login_txt"
                           placeholder="Enter Password">
                </div>
                <div class="deli_row">
                    <input type="password" name="reg_password" autocomplete="off" class="form-control login_txt"
                           placeholder="Confirmation Password">
                </div>
                <div class="deli_row">
                    <button class="btn btn-danger login_btn">
                        <i class="mdi mdi-account basic_icon_margin"></i>Registerd
                    </button>
                </div>
                <hr>
                <div class="deli_row">
                    <button class="btn btn-default login_btn" onclick="ShowLoginSignup('signin');">
                        <i class="mdi mdi-account-check basic_icon_margin"></i>Existing User? Log In
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    //    $(document).ready(function(){
    //        $('[data-toggle="tooltip"]').tooltip();
    //    });
    function getBuyItem() {
        var input = document.getElementById("Search");
        var filter = input.value.toLowerCase();
        var nodes = document.getElementsByClassName('product_list_li');
        for (i = 0; i < nodes.length; i++) {
            if (nodes[i].innerText.toLowerCase().includes(filter)) {
                nodes[i].style.display = "block";
            } else {
                nodes[i].style.display = "none";
            }
        }
    }
</script>