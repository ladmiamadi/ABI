<?php
function checkbox(string $name, string $value, array $data):string
{
    $attributes='';
   if(isset($data[$name]) && in_array($value,$data[$name] ))
   {
       $attributes .='checked';
   }
    return <<<HTML
    <input type="checkbox" name="{$name}[]" value="$value" $attributes>
    HTML;

}

function radio(string $name, string $value, array $data):string{

    $attributes='';
    if(isset($data[$name]) && $value==$data[$name])
    {
        $attributes .='checked';
    }
    return <<<HTML
    <input type='radio' name='{$name}' value='$value' $attributes>

    HTML;

}


function creneaux_html(array $creneaux)
{
    if(empty($creneaux))
    {
        return 'fermé';
    }
    $phrase=[];
    foreach($creneaux as $creneau)
    {
        $phrase[]="de <strong>{$creneau[0]}</strong>h à <strong>{$creneau[1]}</strong>h";
    }
    return implode(' et ', $phrase);
 
}


?>