function Send(){
    var phone = document.getElementById("phone").value;
        var name = document.getElementById("name").value;
        var dname = document.getElementById("dname").value;
        var msg = document.getElementById("msg").value;
         $.ajax({
           method:"post",
           url:"contactInfo.php",
           data:{name:name,phone,phone,dname:dname,msg:msg},
           success:function(e){
                alert("success");
           }
         })
}