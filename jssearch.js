function cariPengumuman() {
    const input = document.getElementById("searchInput").value.toLowerCase();
    const announcements = document.querySelectorAll(".col-md-3");

    announcements.forEach((item) => {
    const title = item.querySelector("h5").textContent.toLowerCase();
    if (title.includes(input)) {
        item.style.display = "block";
    } else {
        item.style.display = "none";
    }
  });
}