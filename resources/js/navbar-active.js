document.addEventListener("DOMContentLoaded", function () {
    // Mendapatkan semua link navbar
    const navLinks = document.querySelectorAll(".navbar-nav .nav-link");

    // Mendapatkan semua section dengan id
    const sections = document.querySelectorAll("section[id]");

    // Fungsi untuk mengaktifkan link navbar berdasarkan section yang terlihat
    function onScroll() {
        const scrollPosition = window.scrollY + 300; // Offset untuk deteksi lebih awal

        sections.forEach((section) => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute("id");

            if (
                scrollPosition >= sectionTop &&
                scrollPosition < sectionTop + sectionHeight
            ) {
                navLinks.forEach((link) => {
                    link.classList.remove("active");
                    if (link.getAttribute("href") === "#" + sectionId) {
                        link.classList.add("active");
                    }
                });
            }
        });
    }

    // Menambahkan event listener untuk scroll
    window.addEventListener("scroll", onScroll);

    // Memanggil onScroll saat halaman dimuat
    onScroll();

    // Menambahkan event listener untuk klik pada navbar links
    navLinks.forEach((link) => {
        link.addEventListener("click", function (e) {
            e.preventDefault();

            // Menghapus active class dari semua link
            navLinks.forEach((navLink) => {
                navLink.classList.remove("active");
            });

            // Menambahkan active class ke link yang diklik
            this.classList.add("active");

            // Mendapatkan ID section tujuan
            const targetId = this.getAttribute("href");

            // Smooth scroll ke section target
            document.querySelector(targetId).scrollIntoView({
                behavior: "smooth",
            });
        });
    });
});
