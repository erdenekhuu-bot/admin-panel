<header>
    <div class="navi">
        <a href="/">
            <img src={{ asset("pics2use/LogoVert.png")}} class="MenuLogo">
        </a>
        <div class="rghtMenu">
            <a href="/ecological">ТОГТВОРТОЙ ХӨГЖИЛ</a>
            <div class="SepLine"></div>
            <a href="/calculate">ТООЦООЛУУР</a>
            <button class="Luser" id="Luser">НЭВТРЭХ
                <img src={{ asset("pics2use/icons/user.png")}} class="LUserIcon">
            </button>
        </div>
        <div class="mnubtn">
            <span></span><span></span><span></span>
        </div>
    </div>
    <div class="mblMenu">
        <a href="/company">БАЙГУУЛЛАГА</a>
        <a href="/ecological">ТОГТВОРТОЙ ХӨГЖИЛ</a>
        <a href="/calculate" class="CalcBtn">ТООЦООЛУУР</a>
        <a href="/advice">ЗӨВЛӨМЖ</a>
        <button class="Luser" id="Luser">НЭВТРЭХ
            {{-- <img src={{ asset("pics2use/icons/user.png")}} class="LUserIcon"> --}}
        </button>
    </div>
    <div class="complaint-popup-wrapper" id="complaintPopup">
        <div class="complaint-popup">
            <span class="close-btn" id="closeComplaintPopup">&times;</span>
            <h2>Санал хүсэлтээ илгээх</h2>
            <section>
                <script>
                    $(document).ready(function() {
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            $('.submit-btn').click(function() {
                                $.ajax({
                                    type: 'post',
                                    url: '/sanal',
                                    dataType: 'json',
                                    data: {
                                        'name': $('#nameC').val(),
                                        'phone': $('#PhoneNumCom').val(),
                                        'post': $('#complaintDetail').val()
                                    },
                                    success: function(response) {
                                        alert('Амжилттай хүлээж авлаа.')
                                    }
                                });
                            });
                        });
                </script>
                <label for="nameC">Таны нэр:</label>
                <input type="text" id="nameC" placeholder="Нэрээ бичнэ үү" required>
                <label for="PhoneNumCom">Утасны дугаар:</label>
                <input type="text" id="PhoneNumCom" placeholder="Утасны дугаараа бичнэ үү" required>
                <label for="complaintDetail">Санал хүсэлт:</label>
                <textarea id="complaintDetail" placeholder="Санал хүсэлтээ бичнэ үү..." required></textarea>
                <button type="button" class="submit-btn">Илгээх</button>
            </section>
        </div>
    </div>

    <div class="login-wrapper" id="loginPopup">
        <div class="login-side">
            <div class="my-form_wrapper">
            <span class="closeLog-btn" id="closeloginPopup">&times;</span>
                <div class="login-welcome-row">
                    <h1>Тавтай морил</h1>
                    <p>Хэрэглэгчийн мэдээлэл оруулна уу</p>
                </div>
                <form class="my-form">
                    <div class="socials-row">
                        <a href="#" title="Use Google">
                            <img src="./pics2use/icons/Google.png" alt="Google">
                            Google-р нэвтрэх
                        </a>
                        <a href="#" title="Use Facebook">
                            <img src="./pics2use/icons/Facebook.png" alt="Facebook">
                            Facebook-р нэвтрэх
                        </a>
                    </div>
                    <div class="divider">
                        <div class="divider-line"></div>
                        Эсвэл
                        <div class="divider-line"></div>
                    </div>
                    <div class="text-field">
                        <label for="email">Е-мэйл:</label>
                        <input type="email" 
                                id="email" 
                                name="email" 
                                placeholder="Таны Е-мэйл" 
                                required>
                        <img src="./pics2use/icons/Email@.png" alt="Email Icon" title="Email Icon">
                    </div>
                    <div class="text-field">
                        <label for="email">Нууц үг:</label>
                        <input type="password" 
                                id="email" 
                                name="email" 
                                placeholder="Таны нууц үг" 
                                required>
                        <img src="./pics2use/icons/PassIcon.png" alt="Email Icon" title="Email Icon">
                    </div>
                    <input type="submit" 
                        class="my-form_button" 
                        value="Нэвтрэх">
                    <div class="my-form_actions">
                        <div class="my-form_row">
                            <span>Нууц үгээ мартсан уу?</span>
                            <a href="#" title="Reset Password">Нууц үгээ солих</a>
                        </div>
                        <div class="my-form_signup">
                            <a href="#" title="Create Account">Бүртгүүлэх</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>