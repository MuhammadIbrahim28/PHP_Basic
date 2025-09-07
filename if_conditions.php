<?php
/*if("0")
	{
		echo "<p>Hidaya Trust</p>";
	}
	else
	{
		echo "<p>HIST</p>";
	}
        */
    if((!FALSE AND !TRUE) XOR !NULL)
	{
		echo "<p>IF-Block-1</p>";

		if(!1 XOR !0)
		{
			echo "<p>IF-Block-2</p>";
			
			if("PHP Basic" != "PHP Advance")
			{
				echo "<p>IF-Block-3</p>";
			}
			else
			{
				echo "<p>Else-Block-3</p>";
			}
		}
		else
		{
			echo "<p>Else-Block-2</p>";
		}
	}
	else
	{
		//$a;
		if(($a=10) && (++$a=="11") AND ($a<=>10))
		{
			echo "<p>Hidaya Foundation</p>";
		}
		else
		{
			echo "<p>Else-Block-1</p>";
		}
	}
?>