
function disp(){


	number = window.prompt("作成日を記入してください", "例2022-01-01");

if(number != "" && number != null && number == /^[0-9]{4}-?[0-9]{2}-?[0-9]{2}$/){
		window.alert('OK');
	}else{
		window.alert('正しい値を入力してください');
	}

}