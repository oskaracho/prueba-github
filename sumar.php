<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script language="javascript">  
function calcula(operacion){  
    var operando1 = document.calc.operando1.value; 
    var operando2 = document.calc.operando2.value; 
    var operando3 = document.calc.operando3.value; 
    var operando4 = document.calc.operando4.value; 
    var operando5 = document.calc.operando5.value; 
    var result = eval(operando1 + operacion + operando2 + operacion + operando3+ operacion + operando4+ operacion + operando5); 
    document.calc.resultado.value = result ; 
}  
</script> 
</head>
<body>

<form name="calc">  
<input type="Text" name="operando1" placeholder="0" size="12" onkeyup="calcula('+')">
<input type="Text" name="operando2" placeholder="0" size="12" onkeyup="calcula('+')">
<input type="Text" name="operando3" placeholder="0" size="12" onkeyup="calcula('+')">   
<input type="Text" name="operando4" placeholder="0" size="12" onkeyup="calcula('+')">   
<input type="Text" name="operando5" placeholder="0" size="12" onkeyup="calcula('+')">   
<input type="Text" name="resultado" value ="0" size="12">  
</form>  
	<input type="date" name="fechainiprepaS" step="1" min="2015-01-01" max="2020-12-31" value="<?php echo date('Y-m-d');?>">
</body>
</html>