<?php
    require("./index.php");

    /*  
    var $useCustomColors = false; //false    
    var $submitValue = "Submit"; //"Submit"
    var $resetValue = "Reset"; //"Reset"
    var $inputLabels = [""]; //[""]
    var $inputPlaceholders = [""]; //[""]
    var $inputValues = [""]; //[""]
    var $inputsRequired = [false]; //[false]
    var $inputsReadOnly = [false]; //[false]
    var $setFieldsets = [""]; //[""]
    var $useCustomCSS = false; //false
    var $cssPath = "";
    var $fontFamily = "sans-serif"; //"sans-serif"
    var $preset = "Default"; //"Default"    
    var $colorFormBg = "#fff"; //"#fff"
    var $colorFont = "#000"; //"#000"
    var $colorBorders = "#000"; //"#000"
    var $colorInputBg = "#fff"; //"#fff"
    var $colorLabelFont = "#000"; //"#000"
    */


    $formId = $_REQUEST["textFormId"];


    $inputAmount = $_REQUEST["numberInputAmount"];


    $inputTypes="";
    for($i=0;$i<$inputAmount;$i++)
    {
        $inputTypes.="'".$_REQUEST["selectInputType".$i]."'";
        if($i<$inputAmount-1)
        {
            $inputTypes.=",";
        }
    }


    $inputNames="";
    for($i=0;$i<$inputAmount;$i++)
    {
        $inputNames.="'".$_REQUEST["inputName".$i]."'";
        if($i<$inputAmount-1)
        {
            $inputNames.=",";
        }
    }


    $formMethod=$_REQUEST["selectFormMethod"];


    $formAction="";
    if(isset($_REQUEST["textFormAction"]))
    {
        $formAction=$_REQUEST["textFormAction"];
    }


    $formWidth="512px";
    if(isset($_REQUEST["numberFormWidth"]) and $_REQUEST["numberFormWidth"]!="")
    {
        $formWidth=(string)$_REQUEST["numberFormWidth"].$_REQUEST["selectFormWidth"];
    }

    $usePlaceholders="false";
    if(isset($_REQUEST["switchUsePlaceholders"]) and ($_REQUEST["switchUsePlaceholders"] == "on"))
    {
       $usePlaceholders="true"; 
    }


    $useReset="false";
    if(isset($_REQUEST["switchUseReset"]) and ($_REQUEST["switchUseReset"] == "on"))
    {
       $useReset="true"; 
    }


    $submitValue="Submit";
    if(isset($_REQUEST["textSubmitValue"]))
    {
        $submitValue=$_REQUEST["textSubmitValue"];
    }
    

    $resetValue="Reset";
    if(isset($_REQUEST["textResetValue"]))
    {
        $resetValue=$_REQUEST["textResetValue"];
    }
?>
<html>
    <head>
    </head>
    <body>
        <div width="50%">
        <?php
        
            $str=
                "\$form = new form; ".
                "\$form->inputAmount = ".$inputAmount."; ".
                "\$form->inputTypes = [".$inputTypes."]; ".
                "\$form->inputNames = [".$inputNames."]; ".
                "\$form->formMethod = '".$formMethod."'; ".
                "\$form->formAction = '".$formAction."'; ".
                "\$form->formWidth = '".$formWidth."'; ".
                "\$form->usePlaceholders = '".$usePlaceholders."'; ".
                "\$form->useReset = '".$useReset."'; ".
                "\$form->submitValue = '".$submitValue."'; ".
                "\$form->resetValue = '".$resetValue."'; "
                ;
            echo($str);
        ?>
        
        
        </div>
        <div width="50%"></div>
    </body>
</html>
