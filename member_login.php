<!-- member-login --> 
    <div class="member-login">
        <div class="popup__wrap member-login-popup__close z-i-999">
        </div>
        <!-- 手機版跳出為7(固定) 桌機約4請桌機版自己改大小 -->
        <div class="popup__box col-7 col-lg-4 card-lg ta-c z-i-999">
            <h1 class="mb--10">會員登入</h1>
                <table class="ta-l m-a">
                    <tr>
                        <td class="pt-20">
                            <p class="dis-n dis-lg-ib">帳號：</p>
                        </td>
                        <td class="pt-20">
                            <input id="memId" type="text" class="w-100p" placeholder="請輸入帳號">
                        </td>
                    </tr>
                    <tr>
                        <td class="pt-20">
                            <p class="dis-n dis-lg-ib">密碼：</p>
                        </td>
                        <td class="pt-20">
                            <input id="memPsw" type="password" class="w-100p" value="" placeholder="請輸入密碼">
                        </td>
                    </tr>
                    <tr class="ta-c">
                        <td colspan="2" class="pt-20">
                            <span id="register" class="ml-xl-25 pointer">註冊新會員</span>
                            <span id="psw-back" class="ml-20 pointer">取回密碼</span>
                        </td>
                    </tr>
                    <tr>
                        <td id="login-erroMsg" colspan="2" class="ta-c pt-20">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="pt-20">
                            <input onclick = "sendForm()" class="btn-sub-lg dis-b mt-10 dis-xl-ib m-a " type="button" id="btnLogin" name="btnUpdate" value="登入">
                            <input onclick = "cancelLogin()" class="member-login-popup__close btn-sub-lg dis-b mt-10 dis-xl-ib m-a ml-xl-20" type="submit" id="btnLoginCancel" name="btnUpdate" value="取消">
                        </td>
                    </tr>
                </table>
            <div class="popup__icons dis-f fw-w">
            </div>
            <i class="close-btn member-login-popup__close po-r far fa-times-circle"></i>
        </div>
    </div>
<!-- register -->
    <div class="register">
        <div class="popup__wrap z-i-999">
        </div>
        <!-- 手機版跳出為7(固定) 桌機約4請桌機版自己改大小 -->
        <div class="popup__box col-7 col-lg-4 card-lg ta-c z-i-999">
            <h1 class="mb--10">註冊會員</h1>
                <table class="ta-l m-a">
                    <tr>
                        <td class="pt-20">
                            <p class="dis-n dis-lg-ib">帳號：</p>
                        </td>
                        <td class="pt-20">
                            <input id="Register-memId" type="text" class="w-100p" placeholder="請輸入帳號">
                        </td>
                    </tr>
                    <tr>
                        <td class="pt-20">
                            <p class="dis-n dis-lg-ib">密碼：</p>
                        </td>
                        <td class="pt-20">
                            <input id="Register-memPsw" type="password" class="w-100p" placeholder="請輸入密碼">
                        </td>
                    </tr>
                    <tr>
                        <td class="pt-20">
                            <p class="dis-n dis-lg-ib">確認密碼：</p>
                        </td>
                        <td class="pt-20">
                            <input id="Register-memPsw-Check" type="password" class="w-100p" placeholder="再次輸入密碼">
                        </td>
                    </tr>
                    <tr>
                        <td class="pt-20">
                            <p class="dis-n dis-lg-ib">姓名：</p>
                        </td>
                        <td class="pt-20">
                            <input id="Register-memName" type="text" class="w-100p" placeholder="請輸入姓名">
                        </td>
                    </tr>
                    <tr>
                        <td class="pt-20">
                            <p class="dis-n dis-lg-ib">電話：</p>
                        </td>
                        <td class="pt-20">
                            <input id="Register-memTel" type="text" class="w-100p" placeholder="請輸入電話">
                        </td>
                    </tr>
                    <tr>
                        <td class="pt-20">
                            <p class="dis-n dis-lg-ib">信箱：</p>
                        </td>
                        <td class="pt-20">
                            <input  id="Register-memEmail" type="text" class="w-100p" placeholder="請輸入信箱">
                        </td>
                    </tr>
                    <tr>
                        <td id="register-erroMsg" colspan="2" class="pt-20 ta-c">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="pt-20">
                            <input onclick = "registerForm()" class="btn-sub-lg dis-b mt-10 dis-lg-ib m-a " type="submit" value="確認">
                            <input id="member-register" class="btn-sub-lg dis-b mt-10 dis-lg-ib m-a ml-lg-20" type="submit"
                                name="btnUpdate" value="取消">
                        </td>
                    </tr>
                </table>
            <div class="popup__icons dis-f fw-w">
            </div>
            <i class="close-btn po-r far fa-times-circle"></i>
        </div>
    </div>
    <!-- memPsw-back -->
    <div class="psw-back">
        <div class="popup__wrap member-login-popup__close z-i-999">
        </div>
        <!-- 手機版跳出為7(固定) 桌機約4請桌機版自己改大小 -->
        <div class="popup__box col-7 col-lg-4 card-lg ta-c z-i-999">
            <h1 class="mb--10">取回密碼</h1>
                <table class="ta-l m-a">
                    <tr>
                        <td class="pt-20">
                            <p class="dis-n dis-lg-ib">帳號：</p>
                        </td>
                        <td class="pt-20">
                            <input id="getPsw-memId"  type="text" class="w-100p" placeholder="請輸入帳號">
                        </td>
                    </tr>
                    <tr>
                        <td class="pt-20">
                            <p class="dis-n dis-lg-ib">信箱：</p>
                        </td>
                        <td class="pt-20">
                            <input id="getPsw-memEmail" type="text" class="w-100p" value="" placeholder="請輸入信箱">
                        </td>
                    </tr>
                    <tr>
                        <td id="getPsw-erroMsg" colspan="2" class="ta-c pt-20">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="pt-20">
                            <input onclick="getPswForm()" class="btn-sub-lg dis-b mt-10 dis-lg-ib m-a " type=""  name="btnUpdate" value="取回密碼">
                            <input id="psw-back-cancel" class=" btn-sub-lg dis-b mt-10 dis-lg-ib m-a ml-lg-20" type="submit"
                                name="btnUpdate" value="取消">
                        </td>
                    </tr>
                </table>
            <div class="popup__icons dis-f fw-w">
            </div>
            <i class="close-btn po-r far fa-times-circle"></i>
        </div>
    </div>
    <!-- memPsw-back-end -->
    <div class="psw-back-end">
        <div class="popup__wrap member-login-popup__close z-i-999">
        </div>
        <!-- 手機版跳出為7(固定) 桌機約4請桌機版自己改大小 -->
        <div class="popup__box col-7 col-lg-4 card-lg ta-c z-i-999">
            <h1 class="mb--10">已寄出新密碼</h1>
            <p id="getPsw-memPswBack" 
            class="p-10"></p>
            <input class="member-login-popup__btn btn-sub-lg dis-b mt-10 dis-lg-ib m-a" type="submit" name="btnUpdate" value="登入">
            <div class="popup__icons dis-f fw-w">
            </div>
            <i class="close-btn po-r far fa-times-circle"></i>
        </div>
    </div><!-- memPsw-back-end -->
    <!-- QR -->
    <div class="qrcode_popup">
        <div class="popup__wrap member-login-popup__close z-i-999">
        </div>
        <!-- 手機版跳出為7(固定) 桌機約4請桌機版自己改大小 -->
        <div class="popup__box col-7 col-lg-4 card-lg ta-c z-i-999">
            <div>
                <img src="img/header-img/QR.png" alt="">
            </div>
            <div class="popup__icons dis-f fw-w">
            </div>
            <i class="close-btn member-login-popup__close po-r far fa-times-circle"></i>
        </div>
    </div>
    <!-- QR-end -->
    <!-- loginsuccess -->
    <div class="loginsuccess_popup">
        <div class="popup__wrap member-login-popup__close z-i-999">
        </div>
        <!-- 手機版跳出為7(固定) 桌機約4請桌機版自己改大小 -->
        <div class="popup__box col-7 col-lg-4 card-lg ta-c z-i-999">
            <div>
                <h4>登入成功!</h4>
            </div>
            <div class="popup__icons dis-f fw-w">
            </div>
            <i class="close-btn po-r far fa-times-circle"></i>
        </div>
    </div>
    <!-- loginsuccess-end -->
    <!-- registersuccess -->
    <div class="registersuccess_popup">
        <div class="popup__wrap member-login-popup__close z-i-999">
        </div>
        <!-- 手機版跳出為7(固定) 桌機約4請桌機版自己改大小 -->
        <div class="popup__box col-7 col-lg-4 card-lg ta-c z-i-999">
            <div>
                <h4>註冊成功!</h4>
            </div>
            <div class="popup__icons dis-f fw-w">
            </div>
            <i class="close-btn po-r far fa-times-circle"></i>
        </div>
    </div>
    <!-- registersuccess-end -->
    <script src="js/member_login_ajax.js"></script>
    <script src="js/member_login.js"></script>
<!-- member-login-end -->