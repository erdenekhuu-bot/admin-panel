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

    <div class="faq-container">
        <h1>Хэрэглэгчдээс ирдэг асуултууд</h1>
        <div class="faq-item">
            <button class="faq-question">Хэдэн м2 халаах вэ?</button>
            <div class="faq-answer">
                <p> Манай халаагуурууд 22 мкв хүртэл халаах хүчин чадалтай 
                    ба бид танд загвар тус бүрийн халаах мкв мэдээллийг 
                    доор дэлгэрэнгүй орууллаа. Танай гэрийн дулаан алдалгүй 
                    байх юм бол доорх халаах хүчин чадлаас .. хувиар илүү 
                    мкв халаах боломжтой. <br>
                    S600 загварын халаагуур 12-14 хүртэлх мкв халаана.<br>
                    SA800 загварын халаагуур 16-18 хүртэлх мкв халаана.<br>
                    S900  загварын халаагуур18-20  хүртэлх мкв халаана.<br>
                    S100 загварын халаагуур 18-20 хүртэлх мкв халаана.<br>
                    S1200 загварын халаагуур 20-22 хүртэлх мкв халаана.<br>
                    Босоо загвартай халаагуур 14-18 хүртэлх мкв халаана.<br>
                    Алчуур хатаагчтай загварын халаагуур 6-8 хүртэлх мкв халаана.</p>
            </div>
        </div>
        
        <div class="faq-item">
            <button class="faq-question">Агаар хуурайшуулах уу?</button>
            <div class="faq-answer">
                <p>Ахуйн зориулалттай учир агаар хуурайшуулахгүй.</p>
            </div>
        </div>
        
        <div class="faq-item">
            <button class="faq-question">Хэрхэн ажилладаг, юугаар хийсэн халаагуур вэ?</button>
            <div class="faq-answer">
                <p>Байшин доторх хүйтэн агаарыг халаагуурын доод хэсгээр авч их 
                    бие дотроо халаан дээш гаргаж өрөөг дээрээс нь жигд халааж 
                    ажиллана. Манай хараагуур нь нүүрстөрөгчийн инфра хавтангаар 
                    хийгдсэн халаагуур юм.</p>
            </div>
        </div>
        
        <div class="faq-item">
            <button class="faq-question">Аль улсын халаагуур вэ?</button>
            <div class="faq-answer">
                <p>Манай халаагуур нь Монгол улсдаа үйлдвэрлэдэг дотоодын 
                    үйлдвэрлэл юм. Бид 2014 онд үүсгэн байгуулагдсан цагаасаа 
                    хойш өөрсдийн бүтээгдэхүүн хөгжүүлэлт дээр тасралтгүй 
                    хөгжүүлэлт хийснээр гадаадын бүтээгдэхүүнтэй өрсөлдөхүйц 
                    чанартай бүтээгдэхүүнийг дотооддоо үйлдвэрлэсэн болно. 
                    Манай бүтээгдэхүүн Монголын оюуны өмчин газар бүртгэгдсэнээс 
                    гадна ашигтай загварын 2 гэрчилгээтэй болно. Мөн бүтээгдэхүүний 
                    чанараа баталгаажуулж “Чанар, стандартын MNS 6780:2019” 
                    гэрчилгээ авсан болно. </p>
            </div>
        </div>
        
        <div class="faq-item">
            <button class="faq-question">Цахилгаан голдог уу?</button>
            <div class="faq-answer">
                <p>190вольт-с 240вольт хүртэл хүчдэлд залгаж ажиллуулж болно.</p>
            </div>
        </div>
        
        <div class="faq-item">
            <button class="faq-question">Орон нутагт хэрхэн авах вэ?</button>
            <div class="faq-answer">
                <p>Та чат, утас, видео дуудлага гэх мэт өөрийн хүссэн сувгаар 
                    манай харилцагчийн зөвлөхтэй холбогдож бүтээгдэхүүний 
                    дэлгэрэнгүй мэдээлэл, зөвлөгөө авсаны үндсэн дээр орон 
                    нутагт захиалга өгөх боломжтой. Бид таны сонгосон 
                    халаагуурыг “Нарантуул худалдааны төв”, “Драгон төв”, 
                    “Улаанбаатар төмөр зам” зэрэг таны хүссэн газраас орон 
                    нутгийн унаанд тавьж өгдөг болно. Орон нутгийн унаанаас 
                    авах төлбөр таниас гарах ба тус нөхцөл байдалд үндэслэн 
                    бид орон нутгийн унаанд тавьж өгөхөд хүргэлтийн төлбөрөө 
                    үнэгүй болгодог болно. </p>
            </div>
        </div>
        
        <div class="faq-item">
            <button class="faq-question">Цахилгаан зарцуулалт хэд гардаг вэ?</button>
            <div class="faq-answer">
                <p>Цахилгаан зарцуулалт бодох арга:<br>
                    кВатт*15ц*30хоног*(кВт/ц)146₮*0.6(Thermostat-н хэмнэлт) <br>
                    S400 загвар =15768₮<br>
                    S600 загвар =23652₮<br>
                    S800 загвар =31536₮<br>
                    S900 загвар =35478₮<br>
                    S1000 загвар =39420₮<br>
                    S1200 загвар =47304₮<br>
                    G1800 загвар =70956₮<br>
                    G2200 загвар =86724₮<br>
                    Эдгээр тооцоолол нь шөнийн хөнгөлөлттэй айлын тооцоолох 
                    арга юм. Хэрвээ хөнгөлөлтгүй бол 24 цагаар тооцож бодно 
                    ( кВатт*24ц*30хоног*(кВт/ц)146₮*0.6 )</p>
            </div>
        </div>
        
        <div class="faq-item">
            <button class="faq-question">Монгол гэрт ямар халаагуур зохимжтой вэ?</button>
            <div class="faq-answer">
                <p>Монгол гэрт G2200 болон G1800 загварын халаагуурууд тохиромжтой.</p>
            </div>
        </div>
        
        <div class="faq-item">
            <button class="faq-question">Амины орон сууцандаа хэдэн халаагуур орохыг хэрхэн тооцоолох вэ?</button>
            <div class="faq-answer">
                <p>Манай Веб хуудасны тооцоолуур хэсэгрүү орон байшингийн мэдээллээ 
                    оруулж тооцоолох товчин дээр дарахад танай байшинд хэдэн халаагуур 
                    орох, сар гарах зардал болон нийт үнийн дүнг гаргаж өгнө.</p>
            </div>
        </div>
    </div>
<script>
        const faqQuestions = document.querySelectorAll('.faq-question');
        
        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                const isOpen = question.classList.contains('active');
        
                // Collapse all open answers
                document.querySelectorAll('.faq-answer').forEach(answer => {
                    answer.style.maxHeight = null;
                });
                document.querySelectorAll('.faq-question').forEach(q => {
                    q.classList.remove('active');
                });
        
                // Toggle the current answer
                if (!isOpen) {
                    question.classList.add('active');
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                }
            });
        });
</script>
@endsection