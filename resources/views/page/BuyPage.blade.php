@extends("main")
@section("Phoenix")
<script>
    
    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("complaintBtn").addEventListener("click", function() {
            document.getElementById("complaintPopup").style.display = "flex";
            document.body.classList.add("no-scroll");
        });
        document.getElementById("closeComplaintPopup").addEventListener("click", function() {
            document.getElementById("complaintPopup").style.display = "none";
            document.body.classList.remove("no-scroll");
        });
        window.addEventListener("click", function(event) {
            const popup = document.getElementById("complaintPopup");
            if (event.target === popup) {
                popup.style.display = "none";
                document.body.classList.remove("no-scroll");
            }
        });
        document.querySelector(".continueBtn").addEventListener("click", function() {
            document.querySelector(".paymentDisp").style.display = "flex";
            document.body.classList.remove("no-scroll");
        });
        window.addEventListener("click", function(event) {
            const popupBuy = document.querySelector(".paymentDisp");
            if (event.target === popupBuy) {
                popupBuy.style.display = "none";
                document.body.classList.remove("no-scroll");
            }
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('.orderBtn').addEventListener('click', function() {
        document.querySelector('.zahialagchiinBulan').style.display = 'flex';
        document.querySelector('.tulburiinMedeelel').style.display = 'flex';
        });
    });
    $('#Salbaraas, #HotDotor, #OronNutag').click(function() {
    if ($(this).attr('id') !== 'Salbaraas') {
        $('input[placeholder="Хаяг"]').show();
    } else {
        $('input[placeholder="Хаяг"]').hide();
    }
    });

</script>



<div id="mainContnr">
    @if(!isset($production) || $production == null)
        <div class="prodPicSide">
            <div class="bigImage">
                <img src={{ asset("pics2use/xmpl2.png")}}>
            </div>
            <div class="miniImage">
                    <img src={{ asset("pics2use/xmpl2.png")}} class="mnimgs">
                    <img src={{ asset("pics2use/xmpl2.png")}} class="mnimgs">
                    <img src={{ asset("pics2use/xmpl2.png")}} class="mnimgs">
            </div>
            <div class="advantageImage">
                <div class="advntg">
                    <img src={{ asset("pics2use/TechSketch.jpg")}}>
                    Эрчим хүч хэмнэнэ
                </div>
                <div class="advntg">
                    <img src={{ asset("pics2use/TechSketch.jpg")}}>
                    Эрчим хүч хэмнэнэ
                </div>
                <div class="advntg">
                    <img src={{ asset("pics2use/TechSketch.jpg")}}>
                    Эрчим хүч хэмнэнэ
                </div>
            </div>
        </div>
        <div class="specSide">
            <div class="heaterinfoDiv">
                <div class="heaterName">
                    S1200 Төрлийн халаагуур
                </div>
                <div class="heaterDesc">
                    -Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
                    <br> 
                    -Expedita, aut. Aspernatur, totam! Perferendis, deleniti <br>
                    <br>
                    -fugit perspiciatis labore adipisci illum.
                </div>
                <div class="zagwaruudlabel">Загварууд</div>
                <div class="HeaterSelection">
                    <div class="selections">
                        <h2>S1200</h2>
                        <p>650'000₮</p>
                    </div>
                    <div class="selections">
                        <h2>S1200T</h2>
                        <p>690'000₮</p>
                    </div>
                    <div class="selections">
                        <h2>S1200TW</h2>
                        <p>730'000₮</p>
                    </div>
                </div>
                <div class="tooshirheg">
                    <div class="quantity-selector">
                        <span>Тоо ширхэг</span>
                        <span>1</span>
                    </div>
                </div>
                <div class="bntsForOrder">
                    <script>
                        $(document).ready(function() {
                            $('.cartBtn').click(function() {
                            window.location.href = '/shoppingcart';
                            });
                        });
                    </script>
                    <button class="cartBtn">Сагсанд хийх</button>
                    <button class="orderBtn">Захиалга өгөх</button>
                </div>
            </div>
            <div class="zahialagchiinBulan">
                <h2>Захиалагчийн мэдээлэл</h2>
                <div class="NoaTdiv" id="ZahialagchDID">
                    <label for="NoaT">НӨАТ:</label>
                    <div id="NoaT">
                        <button class="opt">Хувь хүн</button>
                        <button class="opt">Байгууллага</button>
                    </div>
                </div>
                <div class="PersDiv" id="ZahialagchDID">
                    <label for="PersonalInfo">Хувийн мэдээлэл оруулах:</label>
                    <div id="PersonalInfo">
                        <input type="text" placeholder="Нэр">
                        <input type="text" placeholder="Утасны дугаар">
                        <input type="text" placeholder="Мэйл хаяг">
                    </div>
                </div>
                <div class="InstallDiv" id="ZahialagchDID">
                    <label for="Installment">Суурилуулалт хийлгэх эсэх:</label>
                    <div id="Installment">
                        <button class="instChoice" id="InstYes">Хийлгэнэ</button>
                        <button class="instChoice" id="InstNo">Хийлгэхгүй</button>
                    </div>
                </div>
                <div class="BairshilDiv" id="ZahialagchDID">
                    <label for="Bairshil">Бараа хүлээн авах сонголт:</label>
                    <div id="Bairshil">
                        <button class="BChoice" id="Salbaraas">Салбараас ирж авах</button>
                        <button class="BChoice" id="HotDotor">Хот дотор хүргүүлэх</button>
                        <button class="BChoice" id="OronNutag">Орон нутагт хүргүүлэх</button>
                    </div>
                    <input type="text" placeholder="Хаяг">
                </div>
            </div>
            <div class="tulburiinMedeelel">
                <h2>Төлбөрийн мэдээлэл</h2>
                <div class="PaymentDetails">
                    <div class="zahDugaar">
                        <div class="zahialga">Захиалгын дугаар</div>
                        <div class="zahialgaNum">2024/09/24/01</div>
                    </div>
                    <div class="sepLine"></div>
                    <div class="zahDetails">
                        <div class="baraaS">Барааны дүн</div>
                        <div class="dun">1250000₮</div>
                    </div>
                    <div class="zahDetails">
                        <div class="hurgeltS">Хүргэлтийн төлбөр</div>
                        <div class="dun">40000₮</div>
                    </div>
                    <div class="zahDetails">
                        <div class="suuriluulaltS">Суурилуулалтын төлбөр</div>
                        <div class="dun">50000₮</div>
                    </div>
                    <div class="sepLine"></div>
                    <div class="totalS">
                        <div class="niitTuluh">Нийт төлөх дүн</div>
                        <div class="dunTotal">1340000₮</div>
                    </div>
                </div>
                <div class="btnOrder">
                    <button class="continueBtn">Үргэлжлүүлэх</button>
                    <button class="cancelBtn">Цуцлах</button>
                </div>
            </div>
        </div>
    @else
            <div class="prodPicSide">
                <div class="bigImage">
                    <img src={{ asset("storage/".$production->Зураг)}} alt="">
                </div>
                @foreach ($production->category as $sub_pro)
                    {{-- <div class="miniImage">
                        <img src={{ asset("storage/".$sub_pro->Зураг)}} class="mnimgs" alt="">
                    </div> --}}
                    <div class="advantageImage">
                        <div class="advntg">
                            <img src={{ asset("storage/".$sub_pro->Зураг)}} alt="">
                            Эрчим хүч хэмнэнэ
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="specSide">
                <div class="heaterinfoDiv">
                    <div class="heaterName">
                        {{ $production->Бүтээгдэхүүн }} Төрлийн халаагуур
                    </div>
                    <div class="heaterDesc">
                        {{ '- '.$production->Онцлог_шинж }}
                    </div>
                    <div class="zagwaruudlabel">Загварууд</div>
                    <div class="HeaterSelection">
                        @foreach ($production->category as $sub_pro)
                            <div class="selections">
                                <h2>{{ $sub_pro->Загвар }}</h2>
                                <p>{{ $sub_pro->Үнэ.'₮' }}</p>
                            </div>
                        @endforeach
                    </div>
                    <div class="tooshirheg">
                        <div class="quantity-selector">
                            <span>Тоо ширхэг</span>
                            <span>{{ $production->Тоон_хэмжээ }}</span>
                        </div>
                    </div>
                    <div class="bntsForOrder">
                        <script>
                            $(document).ready(function() {
                                $('.cartBtn').click(function() {
                                window.location.href = '/shoppingcart';
                                });
                            });
                        </script>
                        <button class="cartBtn">Сагсанд хийх</button>
                        <button class="orderBtn">Захиалга өгөх</button>
                    </div>
                </div>
                <div class="zahialagchiinBulan">
                    <h2>Захиалагчийн мэдээлэл</h2>
                    <div class="NoaTdiv" id="ZahialagchDID">
                        <label for="NoaT">НӨАТ:</label>
                        <div id="NoaT">
                            <button class="opt">Хувь хүн</button>
                            <button class="opt">Байгууллага</button>
                        </div>
                    </div>
                    <div class="PersDiv" id="ZahialagchDID">
                        <label for="PersonalInfo">Хувийн мэдээлэл оруулах:</label>
                        <div id="PersonalInfo">
                            <input type="text" placeholder="Нэр">
                            <input type="text" placeholder="Утасны дугаар">
                            <input type="text" placeholder="Мэйл хаяг">
                        </div>
                    </div>
                    <div class="InstallDiv" id="ZahialagchDID">
                        <label for="Installment">Суурилуулалт хийлгэх эсэх:</label>
                        <div id="Installment">
                            <button class="instChoice" id="InstYes">Хийлгэнэ</button>
                            <button class="instChoice" id="InstNo">Хийлгэхгүй</button>
                        </div>
                    </div>
                    <div class="BairshilDiv" id="ZahialagchDID">
                        <!--irj awah songoltoos hamaarch idwehijdeg baih-->
                        <label for="Bairshil">Бараа хүлээн авах сонголт:</label>
                        <div id="Bairshil">
                            <button class="BChoice" id="Salbaraas">Салбараас ирж авах</button>
                            <button class="BChoice" id="HotDotor">Хот дотор хүргүүлэх</button>
                            <button class="BChoice" id="OronNutag">Орон нутагт хүргүүлэх</button>
                        </div>
                        <input type="text" placeholder="Хаяг">
                    </div>
                </div>
                <div class="tulburiinMedeelel">
                    <h2>Төлбөрийн мэдээлэл</h2>
                    <div class="PaymentDetails">
                        <div class="zahDugaar">
                            <div class="zahialga">Захиалгын дугаар</div>
                            <div class="zahialgaNum">2024/09/24/01</div>
                        </div>
                        <div class="sepLine"></div>
                        <div class="zahDetails">
                            <div class="baraaS">Барааны дүн</div>
                            <div class="dun">1250000₮</div>
                        </div>
                        <div class="zahDetails">
                            <div class="hurgeltS">Хүргэлтийн төлбөр</div>
                            <div class="dun">40000₮</div>
                        </div>
                        <div class="zahDetails">
                            <div class="suuriluulaltS">Суурилуулалтын төлбөр</div>
                            <div class="dun">50000₮</div>
                        </div>
                        <div class="sepLine"></div>
                        <div class="totalS">
                            <div class="niitTuluh">Нийт төлөх дүн</div>
                            <div class="dunTotal">1340000₮</div>
                        </div>
                    </div>
                    <div class="btnOrder">
                        <button class="continueBtn">Үргэлжлүүлэх</button>
                        <button class="cancelBtn">Цуцлах</button>
                    </div>
                </div>
            </div>
    <div class="paymentDisp">
        <div class="detCont"></div>
    </div>
    @endif
</div>
@endsection