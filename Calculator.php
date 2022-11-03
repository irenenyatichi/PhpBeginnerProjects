<?php
//Normal Calculator
extract($_POST);
if(isset($save))
{
    switch($ch)
    {
        case '+':
            $res=$fn+$sn;
            break;

        case '-':
            $res=$fn-$sn;
            break;

        case '*':
            $res=$fn*$sn;
            break;

        case '/':
            $res=$fn/$sn;
            break;

        case '%':
            $res=$fn%$sn;
            break;

        case '**':
            $res=$fn**$sn;
            break;
    }
}

//Profit and Loss Calculator
extract($_POST);
if (isset($save)) {
    if ($sp > $cp) {
        $p = $sp - $cp;
        $pp = ($p * 100) / $cp;
        $res = 'Profit=' . $p;
        $res .= ', Prpfit % =' . $pp . '';
    } else {
        $l = $cp - $sp;
        $lp = ($l * 100) / $cp;
        $res = 'Loss=' . $l;
        $res .= ', Loss % =' . $lp . '';
    }
}

?>

<!DOCTYPE html>

<html>
<head>
    <title>Calculator</title>
</head>
<body style="background-image: linear-gradient(135deg, #92FFC0 10%, #002661 100%);">
<form method="post">
    <table  align="center">
        <h1 style="margin-left: 500px">Basic Calculator</h1>
        <tr style="margin-top: 500px">
            <th style="font-weight: lighter; margin-top: 60px">Enter the First Number</th>
            <th><input type="number" name="fn" value="<?php  echo @$fn;?>"/></th>
        </tr>
        <br>
        <tr>
            <th style="font-weight: lighter; margin-top: 60px">Enter the Second number</th>
            <th><input type="number" name="sn" value="<?php  echo @$sn;?>"/></th>
        </tr>
        <br>
        <tr>
            <th style="font-weight: lighter; margin-top: 60px">Mathematical Operation</th>
            <th> <select name="ch">
                    <option value='Default' selected>Default</option>
                    <option>Addition (+)</option>
                    <option>Subtraction (-)</option>
                    <option>Multiplication (*)</option>
                    <option>Division (/)</option>
                    <option>Modulus (%)</option>
                    <option>Exponentiation (**)</option>
                </select> </th>
        </tr>
        <tr>
            <th style="font-weight: lighter; margin-top: 60px">Result</th>
            <th><input type='number' readonly='readonly' value="<?php echo @$res; ?>"/></th>
        </tr>
        <tr>
            <th colspan="2"><input type="submit" name="save" value="Result"/></th>
        </tr>
    </table>
</form>
</body>
<br>
<br>
<br>
<body>
<form method="post">
    <h1 style='margin-left: 500px'>Profit and Loss Calculator</h1>
    <table margin-top="200px" align="center">
        <tr>
            <th> style='font-weight: lighter; margin-top: 60px'>Enter your Cost Price</th>
            <th><input type="number" name="cp" value="<?php echo @$cp; ?>"/></th>
        </tr>
        <br>
        <tr>
            <th style='font-weight: lighter; margin-top: 60px'>Enter your Selling Price</th>
            <th><input type="number" name="sp" value="<?php echo @$sp; ?>"/></th>
        </tr>
        <br>
        <tr>
            <th style='font-weight: lighter; margin-top: 60px'>Your Output</th>
            <th><textarea readonly='readonly'><?php echo @$res; ?></textarea></th>
        </tr>
        <tr>
            <th colspan="2"><input type="submit" name="save" value="Check"/></th>
        </tr>
    </table>
</form>
</body>
</html>