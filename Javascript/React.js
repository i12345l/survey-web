function Next() {
    const First = document.getElementById("First");
    const Second = document.getElementById("Second");
    const Third = document.getElementById("Third");

    if (First.style.display == "none") {
        Second.style.display = "none";
        Third.style.display = "block";
    }
}