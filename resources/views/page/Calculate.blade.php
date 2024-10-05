@extends("main")
@section("Phoenix")
<script>
    document.addEventListener("DOMContentLoaded", function(){
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
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const niitTalbai = document.querySelector(".NiitTalbai");
        const roomNum = document.querySelector(".RoomNum");
        const roomContainer = document.querySelector(".room-container");
        const windowHigh = document.querySelector(".WindowHigh");
        const bodojOloh = document.getElementById("Toots");
        const heaterCardContainer = document.getElementById("heater-card-container");
        const totalBillContainer = document.getElementById("total-bill-container");

        const heaters = [
            { name: 'S1200', capacity: 22, kW: 1.2 },
            { name: 'S1000', capacity: 20, kW: 1 },
            { name: 'S900', capacity: 18, kW: 0.9 },
            { name: 'S800', capacity: 16, kW: 0.8 },
            { name: 'S600', capacity: 10, kW: 0.6 }
        ];

        niitTalbai.addEventListener("input", function() {
            if (niitTalbai.value.trim() !== "") {
                roomNum.disabled = false;
            }
        });

        roomNum.addEventListener("input", function() {
            if (roomNum.value.trim() !== "") {
                roomContainer.innerHTML = ""; 
                const numRooms = parseInt(roomNum.value);
                for (let i = 0; i < numRooms; i++) {
                    const label = document.createElement("label");
                    label.textContent = `Өрөөний талбай /мкв/ (${i + 1})`;
                    const input = document.createElement("input");
                    input.type = "number";
                    input.className = "RoomS";
                    
                    roomContainer.appendChild(label);
                    roomContainer.appendChild(input);
                }

                const warning = document.createElement("span");
                warning.className = "warning";
                warning.style.color = "var(--alertColor)";
                warning.style.display = "none";
                warning.style.fontSize = "1.2rem";
                warning.style.padding = "0.5rem 2rem";
                warning.style.textAlign = "center";
                warning.textContent = "Өрөөнүүдийн талбайн нийлбэр байшингын нийт талбайгаас давсан байна. Та өрөөнүүдийн талбайг ахин шалгана уу";
                roomContainer.appendChild(warning);

                windowHigh.disabled = true;

                roomContainer.addEventListener("input", function() {
                    const roomSInputs = roomContainer.querySelectorAll(".RoomS");
                    let totalRoomS = 0;
                    let allFilled = true;

                    roomSInputs.forEach(input => {
                        const value = parseFloat(input.value) || 0;
                        totalRoomS += value;
                        if (input.value.trim() === "") {
                            allFilled = false;
                        }
                    });

                    const niitTalbaiValue = parseFloat(niitTalbai.value);
                    const remaining = niitTalbaiValue - totalRoomS;

                    if (totalRoomS > niitTalbaiValue) {
                        warning.textContent = "Өрөөнүүдийн талбайн нийлбэр байшингын нийт талбайгаас давсан байна. Та өрөөнүүдийн талбайг ахин шалгана уу";
                        warning.style.display = "inline";
                        warning.style.color = "var(--alertColor)";
                        windowHigh.disabled = true;
                    } else if (allFilled && totalRoomS !== niitTalbaiValue) {
                        warning.textContent = `Үлдэгдэл талбай / Коридор = ${remaining}`;
                        warning.style.display = "inline";
                        warning.style.color = "var(--btnClr2)";
                        windowHigh.disabled = false;
                    } else if (allFilled && totalRoomS === niitTalbaiValue) {
                        warning.style.display = "none";
                        windowHigh.disabled = false;
                    } else {
                        warning.style.display = "none";
                        windowHigh.disabled = true;
                    }
                });
            }
        });

        bodojOloh.addEventListener("click", function() {
            const roomSInputs = roomContainer.querySelectorAll(".RoomS");
            const windowHeight = parseFloat(windowHigh.value);
            heaterCardContainer.innerHTML = ""; 
            totalBillContainer.innerHTML = "";  

            let totalBill = 0;

            roomSInputs.forEach((input, index) => {
                const roomSize = parseFloat(input.value) || 0;
                let roomHeaters = [];
                let remainingSize = roomSize;
                let roomBill = 0;

                heaters.forEach(heater => {
                    if (remainingSize >= heater.capacity) {
                        // Assign heaters only if room size is greater or equal to the heater's capacity
                        const numHeaters = Math.floor(remainingSize / heater.capacity);
                        if (numHeaters > 0) {
                            roomHeaters.push({ heaterName: heater.name, count: numHeaters });
                            remainingSize -= numHeaters * heater.capacity;
                        }
                    }
                });

                // If there's any leftover room size, assign the smallest possible heater (S600 for leftover rooms <= 10sqm)
                if (remainingSize > 0 && remainingSize <= 10) {
                    roomHeaters.push({ heaterName: 'S600', count: 1 });
                }

                roomBill = roomSize * 2525;
                totalBill += roomBill;

                const cardDiv = document.createElement("div");
                cardDiv.classList.add("cardh", "swiper-slidee");

                const imageContentDiv = document.createElement("div");
                imageContentDiv.classList.add("image-contentt");

                const cardContentDiv = document.createElement("div");
                cardContentDiv.classList.add("card-contentt");

                const nameHeading = document.createElement("h2");
                nameHeading.classList.add("namee");
                nameHeading.textContent = `Өрөө ${index + 1}`;

                const descrptnPara = document.createElement("p");
                descrptnPara.classList.add("descrptnn");

                roomHeaters.forEach(heater => {
                    descrptnPara.textContent += `${heater.heaterName} x ${heater.count} `;
                });

                const roomBillPara = document.createElement("p");
                roomBillPara.classList.add("room-bill");
                roomBillPara.textContent = `Цахилгааны зардал: ₮${roomBill.toFixed(2)}`;

                cardContentDiv.appendChild(nameHeading);
                cardContentDiv.appendChild(descrptnPara);
                cardContentDiv.appendChild(roomBillPara);
                imageContentDiv.appendChild(cardContentDiv);
                cardDiv.appendChild(imageContentDiv);

                heaterCardContainer.appendChild(cardDiv);
            });

            totalBillContainer.textContent = `Сард гарах нийт цахилгааны зардал: ₮${totalBill.toFixed(2)}`;
        });
    });
</script>
<div class="calcCont">
    <div class="calcHead">
        <h1>ХАЛААГУУРЫН ТООЦООЛУУР</h1>
        <p>Та доорх тооцоолуураар өөрийн байшиндаа
             хэдэн халаагуур суурилуулж болох болон 
             сард халаалтанд хэр хэмжээний зардал гарах 
             талаар мэдээллийг мэдэж болно</p>
    </div>
    <div class="HouseInfo">
        <div class="ques">
            <label for="NiitTalbai">Нийт талбай /мкв/</label>
            <input type="number" class="NiitTalbai">
        </div>
        <div class="ques">
            <label for="RoomNum">Өрөөний тоо /ш/</label>
            <input type="number" class="RoomNum" disabled>
        </div>
        <div class="ques room-container">
                <!-- Өрөөнүүдийн м2 RoomNum-с хамаарч гарч ирнэ -->
        </div>
        <div class="ques">
            <label for="WindowHigh">Шалнаас цонхны тавцан хүртэл зай /см/</label>
            <input type="number" class="WindowHigh" disabled>
        </div>
        <button id="Toots">Тооцоолох</button>
        <div id="heater-card-container" class="card-container"></div>
        <div id="total-bill-container"></div> <!-- Separate container for the total bill -->
    </div>

</div>
@endsection