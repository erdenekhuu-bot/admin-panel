<div class="complaint-popup-wrapper" id="complaintPopup">
    <div class="complaint-popup">
        <span class="close-btn" id="closeComplaintPopup">&times;</span>
        <h2>Санал хүсэлтээ илгээх</h2>
        <div>
            <label for="nameC">Таны нэр:</label>
            <input type="text" id="nameC" placeholder="Нэрээ бичнэ үү" required>
            <label for="PhoneNumCom">Утасны дугаар:</label>
            <input type="text" id="PhoneNumCom" placeholder="Утасны дугаараа бичнэ үү" required>
            <label for="complaintDetail">Санал хүсэлт:</label>
            <textarea id="complaintDetail" placeholder="Санал хүсэлтээ бичнэ үү..." required></textarea>
            <button type="submit" class="submit-btn">Илгээх</button>
        </div>
    </div>
</div>
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