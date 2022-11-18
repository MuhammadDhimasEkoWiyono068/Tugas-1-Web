const checkbox =
document.getElementById("checkbox");
checkbox.addEventListener("click",() => {
  
  
  document.body.classList.toggle("light");

 
  
});

function popup() {
  var me = document.getElementById("me");
  var konfirmasi = confirm("Beneran?");
  if(konfirmasi==true){
    console.log("Aksi berhasil");
    me = "#aboutme"
  }else{
    console.log("Aksi batal");
    me = "#"
    alert("yah gk jadi")
  }
  document.getElementById("me").href = me
}


//Tombol genre di browse
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}


