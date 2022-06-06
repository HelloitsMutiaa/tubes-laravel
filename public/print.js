$('#print').click(function(event) {
    var status = $('#status').val();
    var left = (screen.width/2) - (800/2);
    var right = (screen.height/2) - (640/2);
    

    if(status == "0"){
    var url = 'printsiswa';
    window.open(url, '', 'width=800, height=640, scrollbars=yes, left='+left+', top='+top+'');

    } else if(status == "1"){
    var url = 'printbuku';
    window.open(url, '', 'width=800, height=640, scrollbars=yes, left='+left+', top='+top+'');
    }

  });

  function cetak() {
      window.print();
  }
