// JS sederhana, gaya jadul: cuma pakai alert & sedikit helper.

function fakeSendMessage() {
    alert("Form ini hanya contoh. Silakan kirim email langsung untuk benar-benar menghubungi saya.");
    return false; // cegah submit beneran
}

// Optional: scroll ke atas kalau klik "Kembali ke atas"
document.addEventListener("DOMContentLoaded", function () {
    var backToTop = document.getElementById("backToTop");
    if (backToTop) {
        backToTop.addEventListener("click", function (e) {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    }
});
