@extends("main")
@section("Phoenix")
<script>
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
</script>


 <div class="container">
        <header class="header">
            <h1>Манай бизнес Тогтвортой хөгжлийн дараах зорилтуудыг дэмждэг </h1>
        </header>

        <section class="content">
            <div class="plant-image">
                <img src={{ asset("pics2use/SDGsLogo1.png")}} alt="Plant Image">
            </div>
            <div class="plant-info">
                <div class="info-box leaf">
                    <h2>8</h2>
                    <p>Тогтвортой, хүртээмжтэй эдийн засгийн өсөлт, бүрэн, 
                    бүтээмжтэй ажил эрхлэлт, зохистой хөдөлмөрийг хөхүүлэн дэмжих</p>
                </div>
                <div class="info-box shoot">
                    <h2>9</h2>
                    <p>Уян хатан дэд бүтцийг байгуулж, хүртээмжтэй, 
                    тогтвортой аж үйлдвэржилтийг дэмжиж, инновацийг хөгжүүлэх</p>
                </div>
                <div class="info-box stem">
                    <h2>13</h2>
                    <p>Цаг уурын өөрчлөлт, түүний үр дагавартай тэмцэх 
                    талаар яаралтай арга хэмжээ авах</p>
                </div>
            </div>


            <div class="stats">
                <div class="bonZcontainer">
                    <div class="stat4SDG">
                        <div class="bonzInfo">
                            <div class="bonzImg">
                                <img src={{asset("pics2use/icons/FamilyC.png")}}>
                            </div>
                            <div class="BsepLine"></div><!--dashed sep line-->
                            <div class="bonzText">
                                <p>+300 айлын халаалтын шийдлийг эко болгосон.</p>
                            </div>
                        </div>
                        <span></span>
                        <div class="bonzInfo">
                            <div class="bonzImg">
                                <img src={{asset("pics2use/icons/consumptionC.png")}}>
                            </div>
                            <div class="BsepLine"></div><!--dashed sep line-->
                            <div class="bonzText">
                                <p>Монгол улсын стандартаар ~780кВт/ц хэрэглэх байсан 
                                цахилгааныг ~600кВт/ц болгож багасгав.</p>
                            </div>
                        </div>
                        <span></span>
                        <div class="bonzInfo">
                            <div class="bonzImg">
                                <img src={{asset("pics2use/icons/ElecbillC.png")}}>
                            </div>
                            <div class="BsepLine"></div><!--dashed sep line-->
                            <div class="bonzText">
                                <p>Манай халаагуурыг хэрэглэж буй нийт айл өрхүүд 
                                1 жилд 174'960'000 төгрөг хэмнэв.</p>
                            </div>
                        </div>
                        <span></span>
                        <div class="bonzInfo">
                            <div class="bonzImg">
                                <img src={{asset("pics2use/icons/EmplC.png")}}>
                            </div>
                            <div class="BsepLine"></div><!--dashed sep line-->
                            <div class="bonzText">
                                <p>Ажлын байрны тогтвортой байдал 100%</p>
                            </div>
                        </div>
                        <span></span>
                        <div class="bonzInfo">
                            <div class="bonzImg">
                                <img src={{asset("pics2use/icons/auditorC.png")}}>
                            </div>
                            <div class="BsepLine"></div><!--dashed sep line-->
                            <div class="bonzText">
                                <p>Эрх бүхий эрчим хүчний аудитораар халаагуур 
                                тус бүрт хэмжилт хийлгүүлж 30-с доошгүй цахилгааны 
                                хэмнэлттэй гэх дүгнэлт гаргуулсан.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Example: Change percentage color dynamically
        let percentage = document.querySelector('.percentage');
        if (parseInt(percentage.textContent) > 50) {
            percentage.style.color = 'red';
        }
    });
</script>



@endsection