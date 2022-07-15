<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A12.2018.06059-Bayu Setyadji</title>
</head>
<body>
    <p>Ini bagian atas</p>
    <div id="box"></div>
    <p>ini bagian bawah</p>
   <button id="btn">ambil data</button>
    <!-- <input type="text" name="name" id="inputText">
    <button id="button">ambil data</button> -->
    <script src="jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#btn').click(function() {
                $.ajax({
                url:'file.php',
                method : "POST",
                data : {nama:"Bayu Setyadji"}
                }).done(function(hasil) {
                $('#box').html(hasil);
                });
            });
            //load,post,get,ajax
            //1 load
            //  $('#box').load('file.php',function(response,status,xhr) {
            //      if (status === 'success') {
            //          console.log('berhasil!');
            //      }
            //      else{
            //          console.log('gagal!');
            //      }
            //  });
            // //2. get
        //     $.get('file.php',{'nim' : "A12.2018.06059"}).done(function(data) {
        //      $('#box').html(data);
        //  });
        //  //3.post
        //  $.post('file.php',{'nama' : "Bayu Setyadji"}).done(function(data) {
        //      $('#box').html(data);
        //  });
            //AJAX
            
        });
        // function load_ajax(url, callback) {
        //     // buat objek xmlhttprequest
        //     var abc = new XMLHttpRequest();
        //     abc.onreadystatechange = cekStatus;
        //     function cekStatus() {
        //         if (abc.readyState === 4 && abc.status === 200) {
        //             callback(abc.responseText);
        //         }
        //     }
        //     abc.open('GET',url,true);
        //     abc.send();
        // }
        // document.getElementById('button').onclick = function() {
        //     text= document.getElementById('inputText').value;
        //      //memanggil otomatis
        //     load_ajax('data.php?b=' + text,function(data) {
        //         document.getElementById('box').innerHTML= data;
        //     });
        // };
    </script>
</body>
</html>