function validasi() {

    var nama = document.getElementById("nama").value;
    var email = document.getElementById("email").value;

    if (nama == "") {
        alert("Nama harus diisi!");
        return false;
    }

    if (email == "") {
        alert("Email harus diisi!");
        return false;
    }

    alert("Pendaftaran berhasil!");
    return true;
}