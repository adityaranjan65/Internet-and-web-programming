$aArray = array('work','home','sky','door');   

foreach($aArray as &$sValue)
{
     if ( $sValue!='work' && $sValue!='home' ) $sValue=0;
}