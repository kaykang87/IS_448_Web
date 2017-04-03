var bordersize;

bordersize = prompt("Enter a border size of 1, 4 or 8");
switch(bordersize){
	case "1": 
		document.write("<table border='1'>" );
		break;
	case "4": 
		document.write("<table border='4'>" );
		break;
	case "8": 
		document.write("<table border='8'>" );
		break;
}
	document.write("<tr><td>player1</td><td>score1</td></tr>");
	document.write("<tr><td>player2</td><td>score2</td></tr>");
	document.write("</table>");