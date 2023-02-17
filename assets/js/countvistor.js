/**Đây là đoạn code đếm số lần truy cập trang bằng JavaScripts */
var countVisitor = document.getElementById('count');
updateCountviews();
function updateCountviews() {
    fetch('https://api.countapi.xyz/update/okinawa/vudung/?amount=1')
        .then(res => res.json())
        .then(res => {
            countVisitor.innerHTML = res.value;
        });
}