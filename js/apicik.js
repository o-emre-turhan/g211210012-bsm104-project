let soru = document.getElementById('chat');
function getirici() {
    return '"'+soru.value+'"';
}
const encodedParams = new URLSearchParams();
encodedParams.append("in", getirici() );
encodedParams.append("op", "in");
encodedParams.append("cbot", "1");
encodedParams.append("SessionID", "RapidAPI1");
encodedParams.append("ChatSource", "RapidAPI");
encodedParams.append("cbid", "1");
encodedParams.append("key", "RHMN5hnQ4wTYZBGCF3dfxzypt68rVP");

const options = {
	method: 'POST',
	headers: {
		'content-type': 'application/x-www-form-urlencoded',
		'X-RapidAPI-Host': 'robomatic-ai.p.rapidapi.com',
		'X-RapidAPI-Key': 'd4415e7c92mshfe7bd71102fd45ap165edcjsn66c5efce61f4'
	},
	body: encodedParams
};
$("#sor").click(
    function (){
        alert("Gönderilen değer: " + getirici());
    fetch('https://robomatic-ai.p.rapidapi.com/api.php', options)
	.then(response => response.json())
	.then(response => {console.log(response);$("#sonuc").html(response.out).addClass("text-dark");})
	.catch(err => console.error(err));});
