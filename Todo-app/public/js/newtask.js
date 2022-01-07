
function disp(){


	number = window.prompt("作成日を記入してください", "20220101");
    result = number.match( /(\d{4})(\d{2})(\d{2})/ );

if(number != "" && number != null){
		window.alert('OK');
	}else{
		window.alert('正しい値を入力してください');
	}

  if(  result == true){
    window.alert('OK');
  }else{
      window.alert("No");
  }

}