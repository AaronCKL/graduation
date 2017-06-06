function showpic(){
    oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById('inputfile').files[0]);
    oFReader.onload = function (oFREvent) {
        document.getElementById('img1').src = oFREvent.target.result;
        document.getElementById('img1').style.display = 'block';
    };
     if(!dFile.value.match(/.jpg|.gif|.png|.bmp/i)){
       alert('图片类型必须是: .jpg, .gif, .bmp or .png !');
          return;
        }
}