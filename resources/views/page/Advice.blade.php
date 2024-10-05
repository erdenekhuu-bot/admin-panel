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
    
<div id="AdvPage">
    @if (count($advice) > 0)
       @foreach ($advice as $item)
        <div class="cardd" id="card1">
                <img src={{ asset("storage/".$item->Зураг)}}>
                <div>
                    <h2>{{ $item->Гарчиг }}</h2>
                    <h3> Нийтэлсэн {{ $item->created_at }}</h3>
                    <p>
                        {{ $item->Зөвлөгөө }}
                    </p>
                    <button id="More1" onclick="More1()">Дэлгэрэнгүй...</button>
                </div>
            </div>
       @endforeach
    @else
        <div class="cardd" id="card1">
            <img src={{ asset("pics2use/TechSketch.jpg")}}>
            <div>
                <h2>Дугуйгаа шалгаж байх</h2>
                <h3> Нийтэлсэн 2024.03.04</h3>
                <p>
                    Дугуйн даралтыг сайн шалгаж, шаардлагатай үед нэмэх. Дугуй хэт өндөр 
                    эсвэл хэт нам даралттай байх нь таны жолоодлогот болон дугуйн элэгдэлд 
                    нөлөөлдөг, мөн дугуйн насжилтыг багасгадаг байна. Дугуй нь таны унаж 
                    буй машины модельд тохирсон төрөл болон хэмжээтэй байх нь чухал. Дугуйн 
                    хээ хамгийн багадаа 1.66мм байдаг. Машиныхаа жолоодлогыг жигд байлгахын 
                    тулд та тогтмол үзлэгт орж байгаарай.
                </p>
                <button id="More1" onclick="More1()">Дэлгэрэнгүй...</button>
            </div>
        </div>
    @endif
</div>
@endsection
