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
<!--Sanal huseltiin heseg END-->

<script>
    // Attach event listeners to all plus and minus buttons
    document.querySelectorAll('.selectionByOrder').forEach(function(card) {
        // Get the base price from the existing price element
        let priceElement = card.querySelector('.price');
        let basePrice = parseInt(priceElement.innerText.replace(/[^\d]/g, '')); // Extract numeric value
        
        let quantity = card.querySelector('.quantity');

        // Minus button functionality
        card.querySelector('.minus').addEventListener('click', function() {
            if (quantity.innerText > 1) {
                quantity.innerText = parseInt(quantity.innerText) - 1;
                updatePrice(priceElement, quantity.innerText, basePrice);
            }
        });

        // Plus button functionality
        card.querySelector('.plus').addEventListener('click', function() {
            quantity.innerText = parseInt(quantity.innerText) + 1;
            updatePrice(priceElement, quantity.innerText, basePrice);
        });
    });
    function updatePrice(priceElement, quantity, basePrice) {
        let newPrice = basePrice * quantity;
        priceElement.innerText = `${newPrice}₮`;
    }
    //delete section
    document.querySelectorAll('.close-btn').forEach(function(button) {
        button.addEventListener('click', function() {
            let sectionToRemove = button.closest('.selectionByOrder');
            sectionToRemove.remove();
        });
    });
</script>

    <div id="cartMainCont">
        <div class="selectedHtrs">
            
            <div class="selectionByOrder">
                <button class="close-btn">X</button>
                <div><img src={{ asset("pics2use/Heaters/S1200TW_1.png")}}></div>
                <h2 class="OrdrHtrName">S1200TW</h2>
                <span class="price">730000₮</span>
                <div class="quantity-selector1">
                    <button class="qty-btn minus">−</button>
                    <span class="quantity">1</span>
                    <button class="qty-btn plus">+</button>
                </div>
            </div>

        </div>
        <div class="PaymentDetailsDiv">
            <div class="zahialagchiinBulan1">
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
                        <button class="instChoice" id="InstYes">Хийлнэгэ</button>
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
            <div class="tulburiinMedeelel1">
                <h2>Төлбөрийн мэдээлэл</h2>
                <div class="PaymentDetails">
    
                </div>
            </div>
        </div>
    </div>
@endsection