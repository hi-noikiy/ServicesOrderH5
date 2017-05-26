jQuery('.mui-bar').css('left','0px').css('max-width','640px');
function _SAVEDATA(K,V){
	return localStorage.setItem(K,V);
}
function _GETDATA(K){
	return localStorage.getItem(K);
}